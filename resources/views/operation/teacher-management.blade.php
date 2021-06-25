@extends('layouts.operation_dashboard');

@section('content')
<link
      href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
<div style="margin-top: 110px;" class="container-fluid">
<table id="example" style="width:100%" class="table table-bordered table-responsive w-100 d-block d-md-table">
    <thead>
        <tr>
            <th>Sr No. </th>
            <th>Teacher Name</th>
            <th>Session Count</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @php
            $j=1;
        @endphp
        @foreach ($data as $data)
        {{-- {{ print_r($data) }} --}}
            <tr>
                <td>{{ $j }}</td>
                <td>{{ $data->name }}</td>
                <td>@php
                    $i=0;
                @endphp
                    @foreach ($sessions as $session)
                        @if ($session->batch->teacher->name==$data->name)
                            @php
                                $i=$i+1;
                            @endphp
                        @endif
                    @endforeach
                    <a href="{{ route('batch-list') }}">{{ $i }}</a>
                </td>
                <td><button class="btn btn-info">View Detail</button></td>
            </tr>
            @php
                $j=$j+1;
            @endphp
        @endforeach
    </tbody>

</table>
</div>

@endsection

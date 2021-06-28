@extends('layouts.operation_dashboard');

@section('content')
<link
      href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
<div style="margin-top: 110px;" class="container-fluid">
<table id="example" style="width:100%" class="table table-bordered table-responsive w-100 d-block d-md-table">

    <thead>
        <tr>
            <th class="text-center">Sr No. </th>
            <th class="text-center">Teacher Name</th>
            <th class="text-center">Session Count</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    @include('_form.success')

    <tbody style="height: auto !important">
        @php
            $j=1;
        @endphp
        @foreach ($data as $data)
        {{-- {{ print_r($data) }} --}}
            <tr>
                <td class="text-center">{{ $j }}</td>
                <td class="text-center">{{ $data->name }}</td>
                <td class="text-center">@php
                    $i=0;
                    $session_arr=[];
                @endphp
                    @forelse ($sessions as $session)
                        @if ($session->batch->teacher->name==$data->name)
                            @php
                                $i=$i+1;
                                @endphp
                        @php
                            array_push($session_arr,$session->id);
                        @endphp
                        @endif
                        @empty
                        {{ 'No sessions for today' }}
                    @endforelse

                    <form action="{{ route('batch-list') }}" method="post" style="margin:0;" >
                        @csrf
                        <input type="hidden" name="session_arr" value="{{ implode("/", $session_arr) }}">
                        <input type="submit" value="{{ $i }}">
                        {{-- <a href="{{ route('batch-list') }}">{{ $i }}</a> --}}
                    </td>
                    <td class="text-center"><a href="{{ route('purchase-session', ['id'=>$session->batch??'null' ]) }}"><button class="btn btn-info">View Detail</button></td></a>
                </form>
            </tr>
            @php
                $j=$j+1;
            @endphp
        @endforeach
    </tbody>

</table>
</div>

@endsection

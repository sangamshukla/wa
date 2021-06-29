@extends('layouts.operation_dashboard');

@section('content')
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="https://resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link
      href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
<div style="margin-top: 110px;" class="container-fluid">

<<<<<<< HEAD
    <p>Date: <input type="datetime" id="datepicker" onchange="return getSession();"></p>
    <div id="datatable">

    </div>

</div>
<script>
    var $j = jQuery.noConflict();
    $j(document).ready(function () {
      $j( "#datepicker" ).datepicker().datepicker('setDate', new Date());
      selectedDate=$('#datepicker').val();
        $.ajax({
            type:"POST",
            url:"{{ route('get-session-list') }}",
            data:{
                '_token': '{{ csrf_token() }}',
                selectedDate:selectedDate,
            },
            success:function(response){
                $('#datatable').html(response);
            },
            error:function(error){
                $('#datatable').text("No session for selected day");
            }
        });
    });
</script>
<script>
    function getSession()
    {
        selectedDate=$('#datepicker').val();
        $.ajax({
            type:"POST",
            url:"{{ route('get-session-list') }}",
            data:{
                '_token': '{{ csrf_token() }}',
                selectedDate:selectedDate,
            },
            success:function(response){
                $('#datatable').html(response);
            },
            error:function(error){
                $('#datatable').text("No session for selected day");
            }
        });
    }
</script>
<script>
    function loadSession()
    {
        selectedDate="{{ \Carbon\Carbon::today() }}";
        console.log(selectedDate+"date");
        $.ajax({
            type:"POST",
            url:"{{ route('get-session-list') }}",
            data:{
                '_token': '{{ csrf_token() }}',
                selectedDate:selectedDate,
            },
            success:function(response){
                $('#datatable').html(response);
            },
            error:function(error){
                $('#datatable').text("No session for selected day");
            }
        });
    }
</script>
=======
    <p>Date: <input type="datetime" id="datepicker"></p><br>
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
            <tr>
                <td class="text-center">{{ $j }}</td>
                <td class="text-center">{{ $data->name }}</td>
                    @php
                    $i=0;
                    $session_arr=[];
                @endphp
                <td class="text-center">
                {{-- <td>{{ implode(',',$sessions->pluck("start_date_time")->toArray()) }}</td> --}}
                     @forelse ($sessions as $session)
                     
                      
                        @if ($session->batch->teacher->name==$data->name)
                            @php
                                $i=$i+1;
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
<script>
    var $j = jQuery.noConflict();
    $j( function() {
      $j( "#datepicker" ).datepicker();
    } );
    </script>
>>>>>>> a5deaa0baa4163f8a100c18882884ad734f93268
@endsection

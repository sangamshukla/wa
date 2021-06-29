@extends('layouts.operation_dashboard');
@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/js/standalone/selectize.js" integrity="sha512-pF+DNRwavWMukUv/LyzDyDMn8U2uvqYQdJN0Zvilr6DDo/56xPDZdDoyPDYZRSL4aOKO/FGKXTpzDyQJ8je8Qw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<div style="margin-top:100px;" class="container-fluid ">

  <h5 style="margin-top: 100px; color:#36b9cc; margin-left:100px;">{{'Class Name - ' . $batch->classSettings->name .'|' . 'Teacher Name - ' . $batch->assignteacher->name. '|' . 'Duration - ' . $batch->duration_per_session. '|'. 'Subject - ' . $batch->subject->name }}</h5>
 <div style="margin-top:40px;" class="row">
   <div class="col-4"></div>
  
   <div class="col-4">
    <label for="select-student">Select a Student</label>
     <select id="select-student" class="demo-default" placeholder="Select a student...">
        {{-- <option value="null">Select Student</option> --}}
        @foreach ($students as $student)
            <option value="{{ $student->id }}">{{ $student->name }}</option>
        @endforeach
      </select>
   </div>
   <script class="show">
    $("#select-student").selectize({
      create: true,
      sortField: "text",
    });
  </script>
   <div class="col-4"></div>
</div>
  {{-- <h5 style="margin-top: 50px; color:black; margin-left:100px;">{{'Class Name - ' . $batch->classSettings->name .'|' . 'Teacher Name - ' . $batch->assignteacher->name. '|' . 'Duration - ' . $batch->duration_per_session. '|'. 'Subject - ' . $batch->subject->name }}</h5> --}}

<div class="row">
    <table style="margin: 40px; " class="table table-bordered table-responsive w-100 d-block d-md-table">     
        <thead>
          <tr>
            <th scope="col" class="text-center">Sr. No.</th>
            <th scope="col" class="text-center" colspan="2">Session Name</th>
            <th scope="col" class="text-center">Available Seats</th>
            <th scope="col" class="text-center">Start Date & Time</th>
            <th scope="col" class="text-center">Select Session</th>
            <th scope="col" class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          {{-- <form action="{{ route('sell-session') }}" method="post"> --}}
            @php
                $i=1;
            @endphp
            @foreach ($sessions as $session)
            <tr>
              <th scope="row" colspan="1" class="text-center">{{ $i }}</th>
              <td class="text-center" colspan="2">{{ $session->name }}</td>
              <td class="text-center">
                  {{ $session->batch->no_of_seats }}/3
              </td>
              <td class="text-center" colspan="1">{{ $session->start_date_time}}</td>
              <td class="text-center">
                  <input type="checkbox" onchange="markChecked()" name="session[]" id="sessions" value="{{ $session->id }}">
              </td>
              {{-- <td>  <span id="pricec"></span></td> --}}
              <td class="text-center"  colspan="1">
                  <button data-toggle="modal" id="student-list" data-target="#exampleModalCenter" onclick="return getStudent({{ $session->id }});" class="btn btn-info">View Detail</button>
                </td>
            </tr>
            <input type="hidden" id="session_id" value="{{ $session->id }}">
            @php
                $i=$i+1;
            @endphp
            @endforeach
            <tr>
              <th scope="col" colspan="4" class="text-center">
                Total Amount
              </th>
               <th colspan="1" class="text-center">
                <span id="pricec"></span>
              </th>
            </tr>
            <tr>
              <th scope="col" colspan="4" class="text-center">
                Paid Amount
              </th>
               <th colspan="1" class="text-center">
               <input type="number" name="paid_amount" id="" class="form-control">
              </th>
            </tr>
               <tr>
                <td colspan="4" class="text-center">
                    <input type="submit" id="purchase_session" value="Submit" class="text-center btn btn-primary">
                </td>
              </tr>
            {{-- </form> --}}
            </tbody>
      </table>
      
      {{-- for operation student list  --}}

<!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Student Amount Details</h5>

              </div>
              <div class="modal-body" id="model-table">
              {{-- @include('operation.modal') --}}
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      {{-- for operation student list --}}
    </div>
@endsection
@section('scripts')
<script>
function markChecked()
{
    var checked = $("input[name='session[]']:checked").length;
    if(checked <= 0){
        $('#showErrorMessage').show();
    }else{
        $('#showErrorMessage').hide();
    }
    var p = {{ $batch->batch_price_per_session }}
    var price = p * checked;
    $('#pricec').html(price);
}
// price
</script>
<script>
      $(document).ready(function(){
            $('#showErrorMessage').hide();
            $("#purchase_session").click(function(){
                var checked = $("input[name='session[]']:checked").length;
                var paid_amount=$("input[name='paid_amount']").val();
                if(checked <= 0){
                    $('#showErrorMessage').show();
                }else{
                    $('#showErrorMessage').hide();
                    var checked = '';
                    $('input[name="session[]"]:checked').each(function() {
                    checked += ','+this.value;
                    });
                    var studentId = $('#select-student').val();
                    window.location.href = "/operation-add-to-cart/{{ $batch->id }}/?session_id="+checked+"&student_id="+studentId+"&paid_amount="+paid_amount
                }
            });

        });
    </script>
    <script>
        function getStudent(sessionId)
        {
                            $.ajax({
                                  type:"POST",
                                  url:'{{route("student-list")}}',
                                  data:{
                                      '_token': '{{ csrf_token() }}',
                                      sessionId:sessionId,
                                  },
                                   success: function (response) {
                                       $("#model-table").html(response)
                                   },
                                   error:function(error)
                                   {
                                       console.log("There is some problem. Please try again later. ");
                                   }
                              });
        }
    </script>
@endsection

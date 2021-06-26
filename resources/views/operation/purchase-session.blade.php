@extends('layouts.operation_dashboard');
@section('content')

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
<script>
//     $(document).ready(function () {
//       $('select').selectize({
//           sortField: 'text'
//       });
//   });
  </script>
<div style="margin-top:100px;" class="container-fluid ">
 <div class="row">
   <div class="col-4">

   </div>
   <div class="col-4">
    <select id="select-state" placeholder="Select a student...">
      <option value="">Select Student...</option>
      @foreach ($students as $student)

      <option value="{{ $student->id }}">{{ $student->name }}</option>
      @endforeach
    </select>
   </div>
   <div class="col-4"></div>
</div>
<div class="row">
    <table style="margin: 90px;" class="table table-bordered table-responsive w-100 d-block d-md-table">
        <thead>
          <tr>
            <th scope="col" class="text-center">Sr. No.</th>
            <th scope="col" class="text-center" colspan="2">Session Name</th>
            <th scope="col" class="text-center">Available Seats</th>
            <th scope="col" class="text-center">Select Session</th>
            {{-- <th scope="col">Total Amount</th> --}}
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
              <td class="text-center">
                  <input type="checkbox" onchange="markChecked()" name="session[]" id="sessions" value="{{ $session->id }}">
              </td>
              {{-- <td>  <span id="pricec"></span></td> --}}
            </tr>
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
                <td colspan="4" class="text-center">
                    <input type="submit" id="purchase_session" value="Submit" class="text-center btn btn-primary">
                </td>
              </tr>
            {{-- </form> --}}
            </tbody>
      </table>

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
                if(checked <= 0){
                    $('#showErrorMessage').show();
                }else{
                    $('#showErrorMessage').hide();
                    var checked = '';
                    $('input[name="session[]"]:checked').each(function() {
                    checked += ','+this.value;
                    });
                    var studentId = $('#select-state').val();
                    window.location.href = "/operation-add-to-cart/{{ $batch->id }}/?session_id="+checked+"&student_id="+studentId
                }
            });

        });
    </script>
@endsection

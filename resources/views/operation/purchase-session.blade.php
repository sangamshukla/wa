@extends('layouts.operation_dashboard');
@section('content')
<script>
    $(document).ready(function () {
      $('select').selectize({
          sortField: 'text'
      });
  });
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />

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
            <th scope="col">Sr. No.</th>
            <th scope="col">Session Name</th>
            <th scope="col">Select Session</th>
            <th scope="col">Available Seats</th>
          </tr>
        </thead>
        <tbody>
          <form action="{{ route('sell-session') }}" method="post">
            @php
                $i=1;
            @endphp
            @foreach ($sessions as $session)
            <tr>
              <th scope="row">{{ $i }}</th>
              <td>{{ $session->name }}</td>
              <td>
                  <input type="checkbox" name="session[]" id="sessions" value="{{ $session->id }}">
              </td>
              <td>
                  9/3
              </td>
            </tr>
            @php
                $i=$i+1;
            @endphp
            @endforeach
            <tr>
              <td colspan="3" class="text-center">
                Total Amount
              </td>
              <td colspan="3" class="text-center">
                30
              </td>
            </tr>
               <tr>
                <td colspan="4" class="text-center">
                    <input type="submit" value="Submit" class="text-center btn btn-primary">
                </td>
              </tr>
            </form>
            </tbody>
      </table>

    </div>

@endsection

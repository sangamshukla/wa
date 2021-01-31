@extends('layouts.app')
@section('content')
<!-- start page title -->
<div class="row">
  <div class="col-12">
      <div class="page-title-box">
          <div class="page-title-right">
              <ol class="breadcrumb m-0">
                  <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                  <li class="breadcrumb-item"><a href="javascript: void(0);">Classes</a></li>
                  <li class="breadcrumb-item active">Add Classes</li>
              </ol>
          </div>
          <h4 class="page-title">Add Classes</h4>
      </div>
  </div>
</div>     
<!-- end page title --> 

     <div class="content">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('class.store') }}" autocomplete="off" class="form-horizontal">
            @csrf
            <div class="card ">
              <div class="card-header card-header-success">
                <h4 class="card-title">Add New Classes</h4>
              </div>

              <div class="card-body ">
                @include('_form.success')


                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label for="inputState">Select Class</label>
                            <select name="class_settings_id" required id="inputState" class="form-control">
                              <option selected>... Select Class ...</option>
                              @foreach($classsettings as $classsetting)
                                <option value="{{ $classsetting->id }}">{{ $classsetting->name }}</option>
                              @endforeach
                            </select>
                        </div>
                       </div>

    
 
                     <div class="col">
                      @include('_form.input', ['title' => 'Class Price Per Session', 'name' => 'batch_price_per_session'])
                    </div> 

                    <div class="col">
                      @include('_form.input', ['title' => 'Class Start Date & Time', 'name' => 'batch_start_date', 'type' => 'datetime-local'])
                    </div>    
                  </div>
                  
                      <div class="row">
                      <div class="col">
                          <div class="form-group" id="select_form">
                            <label for="inputState">Assign Teacher</label>
                              <select name="name" required id="class_name" class="form-control">
                                 <option selected>... Select Teacher ...</option>
                                 @foreach($assignteachers as $assignteacher)
                                <option value="{{ $assignteacher->id }}">{{ $assignteacher->name }}</option>
                                 @endforeach 
                              </select>
                          </div>
                      </div> 

                     <div class="col">
                      @include('_form.input', ['title' => 'Teacher Available Status', 'name' => 'teacher_available_status',])
                    </div> 
      
    
                  
                <div class="col">
                    <div class="form-group">
                      <label for="inputState">Duration Per Session</label>
                        <select name="duration_per_sessions_id" required id="inputState" class="form-control">
                          <option selected>... Select Duration Per Session ...</option>
                           <option>30</option>
                          <option>60</option>
                          <option>90</option> 
                          {{-- @foreach($durationpersessions as $durationpersession)
                          <option value="{{ $durationpersession->id }}">{{ $subject->durationpersession }}</option>
                        @endforeach --}}
                         </select> 
                    </div> 
                </div> 

                {{-- <div class="row"> --}}
                 <div class="col">
                  <div class="form-group">
                    <label for="inputState">Select Year</label>
                      <select name="class_master_id" required id="inputState" class="form-control">
                        <option selected>... Select Year ...</option>
                        @foreach($classes as $class)
                          <option value="{{ $class->id }}">{{ $class->name }}</option>
                        @endforeach
                      </select>
                  </div>
                 </div>  
                  

                 <div class="col">
                  <div class="form-group">
                    <label for="inputState">Select Subject</label>
                      <select name="subject_id" required id="inputState" class="form-control">
                        <option selected>... Select Subject ...</option>
                        @foreach($subjects as $subject)
                        <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                      @endforeach
                      </select>
                  </div>
                </div>
                </div>

                {{-- <div class="row"> --}}
                <div class="col">
                  <div class="form-group">
                    <label for="inputState">Select Multiple Topic</label>
                      <select name="class_master_id" multiple required id="inputState" class="form-control js-example-basic-multiple">
                        <option value="1">General Discussion</option>
                        <option value="2">Principals Of Physics</option>
                        <option value="3">Electrostats</option>
                        <option value="4">Peirodic Table</option>
                      </select>
                  </div>
                </div>

                {{-- <div class="row"> --}}
                <div class="col">
                  <div class="form-group">
                    <button type="button" class="btn btn-primary" id="generate-session" style="margin-top:1.4rem; float:right;">Generate Session</button>
                  </div>
                </div>
              </div>

              {{-- card code for add session --}}
              <div class="row" style="display:none" id="append-row">
              </div>

              {{-- /card code for add session --}}
               <div class="card-footer ml-auto mr-auto">
                @include('_form.button',['title'=>'Save Classes'])
              </div>  

            </div>
          </form>
        </div>
      </div>
     </div>
@endsection
@section('scripts')
<script>

// $('.del').on('click', function(){
//     this.closest('div').remove();
// });

  $(document).ready(function() {
    $('.name-toggle').hide();
    $('.js-example-basic-multiple').select2();
});
$('#generate-session').on('click', function(){
  $('#append-row').show();
  var value_session = $("#append-row").find($("h6") ).length + 1;
  var value_session = "Session-"+value_session;
  var selectvalue = $('.js-example-basic-multiple').val();
  var selectvalue1 = $('.js-example-basic-multiple :selected').text();
  console.log(selectvalue);
  var list_text = '';
  $(".js-example-basic-multiple option:selected").each(function () {
   var $this = $(this);
   if ($this.length) {
    var selText = $this.text();
      list_text = list_text+'<br/>'+selText;
    }
  });
  var card='<div class="card mr-2" style="min-height: 200px; max-width:300px;"><h6 class="card-header"><input class="form-control" name="session_name[]" value="'+value_session+'"></input><button type="button" onclick="$(this).closest(\'div\').remove();" class="del btn btn-danger btn-xs">x</button></h6><div class="card-body"><input type="datetime-local" name="date_time_session[]" class="form-control"> '+list_text+'</div></div>';
  $('#append-row').append(card)
});
  //  <button type="button" class="btn del btn-danger btn-xs">x</button>


</script>
@endsection
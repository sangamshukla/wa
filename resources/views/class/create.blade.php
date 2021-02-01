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
                        <div class="form-group" id="select_class_master">
                          <label for="inputState">Select Class</label>
                            <select name="class_settings_id" required id="class_settings_id" class="form-control">
                              <option selected>... Select Class ...</option>
                              @foreach($classsettings as $classsetting)
                                <option value="{{ $classsetting->id }}">{{ $classsetting->name }}</option>
                              @endforeach
                            </select>
                        </div>
                        {{-- class_settings_id --}}
                        @include('_form.input', ['title' => 'Enter Class Name','class'=>'class_settings_id', 'name' => 'class_settings'])
                      </div>

                      <div class="col">
                        @include('_form.input', ['title' => 'Class Price Per Session', 'name' => 'batch_price_per_session','placeholder' => '&euro;', 'type' => 'number'])
                        {{-- @include('_form.input', ['title' => 'Class Price Per Session(&euro)', 'name' => 'batch_price_per_session']) --}}
                      </div> 

                      <div class="col">
                        @include('_form.input', ['title' => 'Class Start Date & Time', 'name' => 'batch_start_date', 'type' => 'datetime-local'])
                      </div>    
                  </div>
                  {{-- row 2 --}}
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
                  </div> 

                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <label for="select_year">Select Year</label>
                        <select name="class_master_id" required id="select_year" class="form-control">
                          <option selected>... Select Year ...</option>
                          @foreach($classes as $class)
                            <option value="{{ $class->id }}">{{ $class->name }}</option>
                          @endforeach
                        </select>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <label for="subject_id">Select Subject</label>
                        <select name="subject_id" required id="subject_id" class="form-control">
                          <option selected>... Select Subject ...</option>
                          @foreach($subjects as $subject)
                          <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                        @endforeach
                        </select>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <label for="topic_id">Select Multiple Topic</label>
                        <select name="topic_id" multiple required id="topic_id" class="form-control js-example-basic-multiple">
                        </select>
                    </div>
                  </div>
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
    $('.class_settings_id').hide();
    $('.js-example-basic-multiple').select2();
});
$('#generate-session').on('click', function(){
  $('#append-row').show();
  var value_session = $("#append-row").find($("h6") ).length + 1;
  var index_val = value_session;
  var value_session = "Session-"+value_session;
  var selectvalue = $('.js-example-basic-multiple').val();
  var selectvalue1 = $('.js-example-basic-multiple :selected').text();
  var list_text = '';
  $(".js-example-basic-multiple option:selected").each(function () {
   var $this = $(this);
   if ($this.length) {
    var selText = $this.text();
    var selVal = $this.val();
      list_text = list_text+'<input type="hidden" id="" name="topic_'+index_val+'[]" value="'+selVal+'"><br/>'+selText;
    }

  });
  var card='<div class="card mr-2" style="min-height: 200px; max-width:300px;"><h6 class="card-header"><input class="form-control" name="session_name['+index_val+'][]" value="'+value_session+'"></input><button type="button" onclick="$(this).closest(\'div\').remove();" class="del btn btn-danger btn-xs">x</button></h6><div class="card-body"><input type="datetime-local" name="date_time_session['+index_val+'][]" class="form-control"> '+list_text+' <br/></div><textarea class="form-control mt-2" placeholder="Enter Comment" name="comment['+index_val+'][]"></textarea></div>';
  $('#append-row').append(card)
});
  //  <button type="button" class="btn del btn-danger btn-xs">x</button>
$('#select_year').on('change', function(){
  var year_id_value = $('#select_year').val();
  $.get("/api/subjects/"+year_id_value, function(data, status){
    $('#subject_id').empty();
    $('#subject_id').append('<option value="">Choose Subject</option>');
    $.each(data,function(index,subcategory){
      $('#subject_id').append('<option value="'+subcategory.id+'">'+subcategory.name+'</option>');
    });
  });
});
$('#subject_id').on('change', function(){
  var subject_id_value = $('#subject_id').val();
  $.get("/api/topics/"+subject_id_value, function(data, status){
    $('#topic_id').empty();
    $.each(data,function(index,subcategory){
      $('#topic_id').append('<option value="'+subcategory.id+'">'+subcategory.name+'</option>');
    });
  });
});

$('#class_settings_id').on('change', function(){
  if($('#class_settings_id').val() == 5){
    $('#select_class_master').hide();
    $('.class_settings_id').show();
  }
});
</script>
@endsection
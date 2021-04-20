@extends('layouts.app')
@section('content')
@include('layouts._partials.breadcrumb', ['menuone'=> 'Home', 'menutwo' =>'Classes', 'menuthree' => 'Manage Classes','menutwourl' => '#','menuthreeurl'=>'/manage-classes', 'title' => 'Add Classes'])

<!-- end page title --> 
     <div class="content">
      <div class="row">
        <div class="col-md-12">
          <form method="post" id="ajexForm" onsubmit="return validateDateTime()" action="{{ route('class.store') }}" autocomplete="off" class="form-horizontal" >
            @csrf
            <div class="card ">
              <div class="card-header card-header-success">
                <h4 class="card-title">Add New Classes</h4>
              </div>
              
              <div class="card-body ">
                @include('_form.success')
                

                <div class="row mb-4">
                  <div class="col-md-1"><p style="margin-top: 48%;">Class Type</p></div>
                  {{-- <div class="col-md-1"><p style="margin-top: 1%;">Class Type</p></div> --}}
                  <div class="col-md-3">@include('_form.radio', ['value'=>1,'class' => 'info', 'id' => 'name', 'name' => 'status', 'title' => 'Online', 'style' => 'margin-top:11%'])</div>
                  <div class="col-md-3">@include('_form.radio', ['value'=>0,'class' => 'info', 'id' => 'name1', 'name' => 'status', 'title' => 'Offline', 'style' => 'margin-top:11%'])</div>                

                  {{-- Location --}}
                  <div class="col-md-4">
                    <div class="form-group" id="location_address">
                      <label for="simpleinput">Location</label>
                      <input type="text" class="form-control" value="{{ old('location') }}" id="location" name="location"  placeholder="Enter Your Location">
                    </div>
                  </div>
                </div> 
                
                {{-- select class/batch --}}
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
                        {{-- for other --}}
                        @include('_form.input', ['value'=>old('class_settings'),'title' =>'Enter Class Name','class'=>'class_settings_id', 'name' => 'class_settings', 'id' => 'class_settings'])
                      </div>

                      {{-- Class Price Per Session  --}}
                      <div class="col">
                        <div class="form-group">
                          <label for="simpleinput">(&pound;) Class Price Per Session</label>
                          <input type="number" value="{{ old('batch_price_per_session') }}" class="form-control" id="batch_price_per_session" name="batch_price_per_session" placeholder="&pound; Enter Class Price Per Session" >
                        </div>
                      </div> 
                  
                      
                      {{-- Class Start Date & Time --}}
                      <div class="col">
                        <div class="form-group">
                          <label for="class_date_time">Class Start Date & Time</label>
                          {{-- <input type="date" id="class_date_time" min="{{ Carbon\Carbon::today()->format('Y-m-d') }}" name="batch_start_date" class="form-control"> --}}
                          {{-- <input id="class_date_time" name="batch_start_date" min="{{ Carbon\Carbon::today() }}" width="234"/> --}}
                          <input  id="class_date_time" class="form-control" value="{{ old('batch_start_date')}}"name="batch_start_date" placeholder="Enter Start Date & Time">
                        </div>
                      </div>  
                  </div>

                  {{-- row 2 Assign Teacher --}}
                  <div class="row">
                     @if(auth()->user()->role == 'admin')
                      <div class="col">
                          <div class="form-group" id="select_form">
                            <label for="inputState">Assign Teacher</label>
                              <select name="name" required id="class_name" value="{{ old('name')}}"class="form-control">
                                 <option selected>... Select Teacher ...</option>
                                 @foreach($assignteachers as $assignteacher)
                                <option value="{{ $assignteacher->id }}">{{ $assignteacher->name }}</option>
                                 @endforeach 
                              </select>
                          </div>
                      </div> 
                      @endif

                      {{-- Teacher Available Status --}}
                      @if(auth()->user()->role == 'admin')
                      <div class="col">
                        <div class="form-group">
                          <label for="simpleinput">Teacher Available Status</label>
                          <input type="text" id="teacher_available_status" name="teacher_available_status" value="{{ old('teacher_available_status')}} "class="form-control">
                        </div>
                      </div> 
                      @endif

                      {{-- Duration Per Session --}}
                      <div class="col">
                        <div class="form-group">
                          <label for="inputState">Duration Per Session</label>
                            <select name="duration_per_sessions_id" required id="duration_per_sessions_id" value="{{ old('duration_per_sessions_id')}}"class="form-control">
                              <option selected>... Select Duration Per Session ...</option>
                              <option>30</option>
                              <option>60</option>
                              <option>90</option> 
                            </select> 
                        </div> 
                      </div>

                      {{-- No. of Seats --}}
                      <div class="col">
                        <div class="form-group">
                          <label for="simpleinput">No. of Seats</label>
                          <input type="text" class="form-control" id="no_of_seats" name="no_of_seats" value="{{ old('no_of_seats')}}" placeholder="No. Of. Seats" >
                        </div>
                      </div> 
                  </div> 
                  
                  {{-- Select Year--}}
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <label for="select_year">Select Year</label>
                        <select name="class_master_id" class="form-control" required id="class_master_id" >
                          <option selected>... Select Year ...</option>
                          @foreach($classes as $class)
                            <option value="{{ $class->id }}">{{ $class->name }}</option>
                          @endforeach
                        </select>
                    </div>
                  </div>

                  {{-- Select Subject --}}
                  <div class="col">
                    <div class="form-group">
                      <label for="subject_id">Select Subject</label>
                        <select name="subject_id" value="{{ old('subject_id')}}" class="form-control" id="subject_id" >
                          <option selected>... Select Subject ...</option>
                          @foreach($subjects as $subject)
                          <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                        @endforeach
                        </select>
                    </div>
                  </div>
                </div>

                {{-- Select Multiple Topic --}}
                {{-- <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <label for="topic_id">Select Multiple Topic</label>
                        <select name="topic_id" value="{{ old('topic_id') }}"class="form-control js-example-basic-multiple" multiple id="topic_id" placeholder="Select Multiple Topic" >
                        </select>
                    </div>
                  </div> --}}

                  {{-- Generate Session + --}}
                  <div class="col">
                    <div class="form-group">
                      <button type="button" class="btn btn-primary" id="generate-session" style="margin-top:1.4rem; float:right;">+</button>
                    </div>
                  </div>
                </div>

              {{-- card code for add session --}}
              <div class="row" id="append-row" style="display:none">
                <span id="row-list" style="width: 100%">

                </span>
                {{-- <button type="button" style="display:none; height:50px;" class="btn btn-primary generate-session" style="margin-top:1.4rem; float:right;">+</button> --}}
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
<script src="{{ asset('javascript/create_class.js') }}"></script>
{{-- 
<script type="text/javascript">

 $('#ajexForm').on('submit',function(event){
     event.preventDefault();

     let name = $('#name').val();
     let location = $('#location').val();
     let class_settings_id = $('#class_settings_id').val();
     let class_settings = $('#class_settings').val();
     let batch_price_per_session = $('#batch_price_per_session').val();
     let class_date_time = $('#class_date_time').val();
     let class_name= $('#class_name').val();
     let teacher_available_status= $('#teacher_available_status').val();
     let duration_per_sessions_id= $('#duration_per_sessions_id').val();
     let no_of_seats= $('#no_of_seats').val();
     let class_master_id = $('#class_master_id').val();
     let subject_id = $('#subject_id').val();
    //  let generate-session = $('#generate-session').val();

     $.ajax({
       url: "{{ route('class.store') }}",
       type:"POST",
       data:{
         "_token": "{{ csrf_token() }}",
         name:name,
         location:location,
         class_settings_id:class_settings_id,
         class_settings:class_settings,
         batch_price_per_session:batch_price_per_session,
         batch_start_date:class_date_time,
         class_name:class_name,
         teacher_available_status:teacher_available_status,
         duration_per_sessions_id:duration_per_sessions_id,
         no_of_seats:no_of_seats,
         class_master_id:class_master_id ,
         subject_id:subject_id
       },
       success:function(response){
         console.log(response);
       },
      });
     });
   </script> --}}
@endsection
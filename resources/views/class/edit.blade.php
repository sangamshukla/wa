@extends('layouts.app')
@section('content')
@include('layouts._partials.breadcrumb', ['menuone'=> 'Home', 'menutwo' =>'Classes', 'menuthree' => 'Manage Classes','menutwourl' => '#','menuthreeurl'=>'/manage-classes', 'title' => 'Add Classes'])

<!-- end page title -->
     <div class="content">
      <div class="row">
        <div class="col-md-12">
          <form method="post" id="ajexForm" onsubmit="return validateDateTime()" action="{{route('update-class', $class->id)}}"  autocomplete="off" class="form-horizontal" >
            @csrf
            <div class="card ">
              <div class="card-header card-header-success">
                <h4 class="card-title">Add New Classes</h4>
              </div>

              <div class="card-body ">
                @include('_form.success')


                <div class="row mb-4">
                  <div class="col-md-1"><p style="margin-top: 48%;">Class Type</p></div>
                  <div class="col-md-3">@include('_form.radio', ['value'=>1,  'class' => 'info', 'id' => 'name', 'name' => 'status', 'title' => 'Online', 'style' => 'margin-top:11%', 'selectedValue' => $class->status])</div>
                  <div class="col-md-3">@include('_form.radio', ['value'=>0, 'class' => 'info', 'id' => 'name1', 'name' => 'status', 'title' => 'Offline', 'style' => 'margin-top:11%', 'selectedValue' => $class->status])</div>                
 
                  {{-- Location --}}
                  <div class="col-md-4">
                    <div class="form-group" id="location_address">
                      <label for="simpleinput">Location</label>
                      <input type="text" class="form-control" id="location" name="location" value="{{ $class->location }}" placeholder="Enter Your Location">
                    </div>
                  </div>
                </div> 
                {{-- Do You Want To Sell Each Session --}}
                <input type="checkbox" @if($class->sell_each_session == 1) checked @endif value="1" name="sell_each_session" >
                <label for="vehicle1">Do You Want To Sell Each Session?</label><br>
                {{-- select class/batch --}}
                 <div class="row">
                      <div class="col">
                        <div class="form-group" id="select_class_master">
                          <label for="inputState">Select Class</label>
                            <select name="class_settings_id" required id="class_settings_id" class="form-control">
                              <option selected>... Select Class ...</option>
                               @foreach($classsettings as $classsetting)
                                <option @if($class->class_settings_id == $classsetting->id) selected @endif value="{{ $classsetting->id }}">{{ $classsetting->name }}</option>
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
                          <input type="number" value="{{ $class->batch_price_per_session }}" class="form-control" id="batch_price_per_session" name="batch_price_per_session" placeholder="&pound; Enter Class Price Per Session" >
                        </div>
                      </div> 
                      
                  
                      {{-- Class Start Date & Time --}}
                      <div class="col">
                        <div class="form-group">
                          <label for="class_date_time">Class Start Date & Time</label>
                          <input  id="class_date_time" class="form-control" value="{{ $class->batch_start_date }}" name="batch_start_date" placeholder="Enter Start Date & Time">
                        </div>
                      </div>  
                    {{-- Class End Date & Time --}}
                    {{-- <div class="row"> --}}
                    <div class="col">
                      <div class="form-group">
                        <label for="end_date_time">Class End Date & Time</label>
                        <input  id="end_date_time" class="form-control" value="{{ $class->batch_end_date }}" name="batch_end_date" placeholder="Enter End Date & Time">
                      </div>
                    </div>  
                </div>
              {{-- </div> --}}
              {{-- </div> --}}
               
                   
                  {{--row 2 Duration Per Session --}}
                  <div class="row">
                      <div class="col">
                          <div class="form-group" id="select_form">
                            <label for="inputState">Duration Per Session</label>
                            <select name="duration_per_sessions_id" required id="duration_per_sessions_id" value="{{ old('duration_per_sessions_id')}}"class="form-control">
                              <option selected>... Select Duration Per Session ...</option>
                              <option @if($class->duration_per_session == 30) selected @endif value="30">30m</option>
                              <option @if($class->duration_per_session == 60) selected @endif value="60">60m</option>
                              <option @if($class->duration_per_session == 90) selected @endif value="90">90m</option> 
                            </select> 
                          </div>
                      </div> 
                    </form> 

                      {{-- row 2 Assign Teacher --}}
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
                          <input type="text" id="teacher_available_status" name="teacher_available_status" value="{{ old('teacher_available_status')}} "class="form-control" readonly>
                           <span id="not_available"></span>
                        </div>
                      </div>
                      @endif

                     

                      {{-- No. of Seats --}}
                      <div class="col">
                        <div class="form-group">
                          <label for="simpleinput">No. of Seats</label>
                          <input type="text" class="form-control" id="no_of_seats" name="no_of_seats" value="{{ $class->no_of_seats }}" placeholder="No. Of. Seats" >
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
                           @foreach($classes as $cls)
                            <option @if($class->class_master_id == $cls->id) selected @endif value="{{ $cls->id }}">{{ $cls->name }}</option>
                            {{-- @if($class->class_settings_id == $classsetting->id) selected @endif --}}

                          {{-- <option @if($subjects->class_masters_id == $subject->id) selected @endif value="{{ $subject->id }}">{{ $subject->name }}</option> --}}
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
                          <option @if($class->subject_id == $subject->id) selected @endif value="{{ $subject->id }}">{{ $subject->name }}</option>

                          {{-- <option @if($class->class_settings_id == $classsetting->id) selected @endif value="{{ $classsetting->id }}">{{ $classsetting->name }}</option> --}}
                          
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
                @include('_form.button',['id'=>'saveForm', 'title'=>'Update Classes'])
              </div>  

            </div>
          </form>
        </div>
      </div>
     </div>
@endsection
@section('scripts')
<script src="{{ asset('javascript/create_class.js') }}"></script>
@endsection

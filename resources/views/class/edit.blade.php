@extends('layouts.class_dashboard')
@section('content')
<<<<<<< HEAD
<div
class="d-sm-flex align-items-center justify-content-between mb-4"
>
<h1 class="h3 mb-0 text-gray-800 session_heading">My Session</h1>
</div>
<!-- image block -->

<div class="row">
<div class="col-xl-12 col-lg-12">
  <div class="mt-5 bg_img">
    <ul class="nav nav-pills nav-fill navtop add_class_tab">
      <li class="nav-item">
        <a
          class="nav-link tab_title add_new_class active"
          href="#menu1"
          data-toggle="tab"
          >ADD NEW CLASS</a
        >
      </li>
      <li class="nav-item">
        <a
          class="nav-link tab_title add_new_class"
          href="#menu2"
          data-toggle="tab"
          >MANAGE CLASSES</a
        >
      </li>
    </ul>
        {{-- add class --}}
    <div class="tab-content">
      <div class="tab-pane active" role="tabpanel" id="menu1">
       
<!-- add class form -->


<div class="card shadow mt-3">
  <div class="card-body add_class_block">
  
      <!-- class type -->
      @include('_form.success')
      
      
      <div class="row">
          <div class="col-md-6">
              <label class="class_type">Class Type</label><br>
              <div class="form-check-inline">
            <label class="radio_container">Online
              <input id="name" class="info" type="radio" checked="checked" value="1" name="status">
              <span class="checkmark"></span>
            </label>&nbsp; &nbsp; &nbsp; &nbsp;
           <label class="radio_container">Offline
            <input id="name1" class="info" type="radio" value="0" checked="checked" name="status">
            <span class="checkmark"></span>
          </label>
         </div>
          </div>
          <div class="col-md-6">
               <!-- Location -->
         <div class="form-group" id="location_address">
          <label for="simpleinput">Location</label>
          <input type="text" class="form-control" value="{{ $class->location }}" id="location" name="location"  placeholder="Enter Your Location">
        </div>
          </div>
      </div>
       <div class="row">
            <div class="col-md-12 col-sm-4 col-xs-12 form-group">
          
        

         <div class="form-group">
          <label class="checkbox_container">Do you want to sell your each Session.
            <input type="checkbox"  name="sell_each_session" id="sell_each_session" value="1" checked="checked">
            <span class="checkmark"></span>
          </label>
        </div>
       </div>
   </div>
   <div class="row">
       <div class="col-md-3">
             <form class="form_block" method="post" id="ajexForm"  action="{{route('update-class', $class->id)}}" >
          @csrf
           <div class="form-group">
            <label class="col-md-12 control-label" for="class">Select Class</label>  
            <div class="col-md-12" id="select_class_master">
              <select  class="form-control middel_width js-example-basic-multiple" id="class_settings_id" required="true" name="class_settings_id">
                @foreach($classsettings as $classsetting)
                <option value="{{ $classsetting->id }}">{{ $classsetting->name }}</option>
                @endforeach
              </select>
            </div> 
            <div class="col-md-12">
              <input type="text" id="class_settings" class="form-control class_settings_id" value="{{ old('location') }}" id="location" name="location"  placeholder="Enter Class Name">
            </div>  
          </div>
       </div>
       <div class="col-md-3">
           <!-- Select Class -->
          <div class="form-group">
            <label class="col-md-12 control-label" for="class">Select Class</label>  
            <div class="col-md-12" id="select_class_master">
              <select  class="form-control middel_width js-example-basic-multiple" id="class_settings_id" required="true" name="class_settings_id">
                @foreach($classsettings as $classsetting)
                <option value="{{ $classsetting->id }}">{{ $classsetting->name }}</option>
                @endforeach
              </select>
            </div> 
            <div class="col-md-12">
              <input type="text" id="class_settings" class="form-control class_settings_id" value="{{ old('location') }}" id="location" name="location"  placeholder="Enter Class Name">
            </div>  
          </div>
       </div>
       <div class="col-md-3">
              <!-- {{-- Class Price Per Session  --}} -->
          <div class="form-group">
            <label class="col-md-12 control-label" for="name">&pound; Class Price Per Session</label>  
            <div class="col-md-12">
            <input id="batch_price_per_session" value="{{ $class->batch_price_per_session }}" name="batch_price_per_session" type="text" placeholder="&pound; Enter Class Price Per Session" class="form-control input-md middel_width">
            </div>
          </div>
       </div>
       <div class="col-md-3">
            <!-- Class Start Date  and Time -->
          <div class="form-group">
            <label class="col-md-12 control-label" for="class_date_time"> Class Start Date  and Time</label>  
            <div class="col-md-12">
            <input id="class_date_time" name="batch_start_date" value="{{ $class->batch_start_date }}"  placeholder="Enter Start Date & Time" class="form-control input-md hasDatepicker">
            </div>
          </div> 
       </div>
    </div>
     </form>
    <div class="row">
     
    
     <div class="col-md-4">
         <!-- Class End Date  and Time -->
         <div class="form-group">
            <label class="col-md-12 control-label" for="end_date_time"> Class End Date  and Time</label>  
            <div class="col-md-12">
            <input id="end_date_time" name="batch_start_date" value="{{ $class->batch_end_date }}" placeholder="Enter Start Date & Time" class="form-control input-md hasDatepicker">
            </div>
          </div> 
     </div>  
     <div class="col-md-4">
          <!-- Class Price Per Session -->
       <div class="form-group">
        <label class="col-md-12 control-label" for="name">No. of seats</label>  
        <div class="col-md-12">
        <input id="no_of_seats" name="no_of_seats"value="{{ $class->no_of_seats }}" type="text" placeholder="No. of Seats" class="form-control input-md middel_width">
        </div>
      </div> 
     </div>  
     <div class="col-md-4">
         <form class="form_block">
              <!-- No of sheats -->
          <div class="form-group">
            <label class="col-md-12 control-label" for="class">Duration Per Session</label>  
            <div class="col-md-12">
              <select  class="form-control small_width" name="duration_per_sessions_id"  id="duration_per_sessions_id" value="{{ old('duration_per_sessions_id')}}">
                <option selected>... Select Duration Per Session ...</option>
                <option value="30">30m</option>
                <option value="60">60m</option>
                <option value="90">90m</option> 
              </select> 
            </div>
          </div>
     </div>  

          
    </div>
      
       <div>
        <div class="row">
            <div class="col-md-6">
                
          <!-- Assign Teacher -->
=======
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
                    @if(auth()->user()->role == 'admin' || auth()->user()->role == 'operation' )
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
>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9

          @if(auth()->user()->role == 'admin' || auth()->user()->role == 'operation' )
          <div class="form-group">
            <label class="col-md-12 control-label" for="class">Assign Teacher</label>  
            <div class="col-md-12">
              <select name="name" required id="class_name" value="{{ old('name')}}" class="form-control small_width">
                <option selected>... Select Teacher ...</option>
                @foreach($assignteachers as $assignteacher)
               <option value="{{ $assignteacher->id }}">{{ $assignteacher->name }}</option>
                @endforeach 
             </select>
            </div>
          </div>
          @endif
            </div>
            <div class="col-md-6">
                  <!-- Teacher Available Status -->
          @if(auth()->user()->role == 'admin' || auth()->user()->role == 'operation')
          <div class="col">
            <div class="form-group">
              <label for="simpleinput">Teacher Available Status</label>
              <input type="text" id="teacher_available_status" name="teacher_available_status" value="{{ old('teacher_available_status')}} "class="form-control" readonly>
                <span id="not_available"></span>
            </div>
          </div>
          @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"> 
            <!-- Select Year -->
          <div class="form-group">
            <label class="col-md-12 control-label" for="class">Select Year</label>  
            <div class="col-md-12">
              <select name="class_master_id" class="form-control small_width" required id="class_master_id" >
                <option selected>... Select Year ...</option>
                @foreach($classes as $class)
                  <option value="{{ $class->id }}">{{ $class->name }}</option>
                @endforeach
              </select>
            </div>
          </div></div>
            <div class="col-md-4">
                 <!-- Select Subject -->
         <div class="form-group">           
          <label class="col-md-12 control-label" for="name">Select Subject</label>  
          <div class="col-md-12">
            <select name="subject_id" value="{{ old('subject_id')}}" class="form-control small_width" id="subject_id" >
              <option selected>... Select Subject ...</option>
              @foreach($subjects as $subject)
              <option value="{{ $subject->id }}">{{ $subject->name }}</option>
            @endforeach
            </select>
          </div>
        </div>
            </div>
            <div class="col-md-4"></div>
        </div>
            <div class="col-md-4">
          
            </div>
        </div>
         

        
          
         
        </form>
      </div>
     </div>
<<<<<<< HEAD
   </div>
  </div>
</div>
<!-- Add Class + -->
<div class="row">
  <div class="col-md-12 col-lg-12">
   <button id="generate-session" class="add_class_plus">Add Class +</button>
  </div>
</div>

<div id="row-list">
  
</div>
<!-- submit -->
<div class="row">
<div class="col-md-12 text-center">
  <input type="submit" id="saveForm" class="add_class_plus" style="margin:0px; !important" value="update">
</div>
</div>



<!-- /add class form -->
      </div> 
      {{-- end Add Class --}}
      <div class="tab-pane" role="tabpanel" id="menu2">
          <!-- datepicker start -->
          @include('class.manage_class_list')
      </div>
    </div>
  </div>
</div>
</div>
=======
>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9
@endsection
@section('scripts')
<script src="{{ asset('javascript/create_class.js') }}"></script>
@endsection
<<<<<<< HEAD


=======
>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9

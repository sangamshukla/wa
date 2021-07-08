@extends('layouts.class_dashboard')
@section('content')
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
          class="nav-link tab_title add_new_class"
          href="{{route('class.store')}}"
          data-toggle="tab"
          >ADD NEW CLASS</a
        >
      </li>
      <li class="nav-item">
        <a
          class="nav-link tab_title add_new_class active"
          href="#menu2"
          data-toggle="tab"
          >MANAGE CLASSES</a
        >
      </li>
    </ul>
  
    <div class="tab-content">
      <div class="tab-pane" role="tabpanel" id="menu1">
        <div class="card shadow mt-3">
          <div
            class="card-body card_left_border border_left_color1"
          >
            <div class="subject_edit subject_flex">
              <div class="subject_practis">
                <p class="subject">Math Practice</p>
                <p class="time_pera">
                  <span>23 Jan,</span
                  ><span>04:00pm - 05:00pm</span>
                </p>
              </div>
              <div class="starttime_block">
                <p class="sub_subject">Starts in</p>
                <p class="green_text">00:08:55</p>
              </div>
              <div class="class_block">
                <p class="sub_subject">Class</p>
                <p class="blue_text">10th</p>
              </div>
              <div class="class_block">
                <p class="sub_subject">Subject</p>
                <p class="blue_text">Maths</p>
              </div>
              <div class="class_block">
                <p class="sub_subject">Time</p>
                <p class="blue_text">30 Min</p>
              </div>
              <div class="class_mb">
                <p class="sub_subject">Students</p>
                <p class="blue_text">30</p>
              </div>
              <div class="delite_icon">
                <img
                  src="{{asset('wa/admindashboard/img/delete.svg')}}"
                  width="20"
                  height="20"
                />
              </div>
              <div class="edit_icon">
                <img src="{{asset('wa/admindashboard/img/edit.svg')}}" width="20" height="20" />
              </div>
            </div>
          </div>
        </div>
        <div class="card shadow mt-3">
        
          <div
            class="card-body card_left_border border_left_color2"
          >
            <div class="subject_edit">
              <div class="subject_practis">
                <p class="subject">Math Practice</p>
                <p class="time_pera">
                  <span>23 Jan,</span
                  ><span>04:00pm - 05:00pm</span>
                </p>
              </div>
              <div class="starttime_block">
                <p class="sub_subject">Starts in</p>
                <p class="green_text">00:08:55</p>
              </div>
              <div class="class_block">
                <p class="sub_subject">Class</p>
                <p class="blue_text">10th</p>
              </div>
              <div class="class_block">
                <p class="sub_subject">Subject</p>
                <p class="blue_text">Maths</p>
              </div>
              <div class="class_block">
                <p class="sub_subject">Time</p>
                <p class="blue_text">30 Min</p>
              </div>
              <div class="class_mb">
                <p class="sub_subject">Students</p>
                <p class="blue_text">30</p>
              </div>
              <div class="delite_icon">
                <img
                  src="{{asset('wa/admindashboard/img/delete.svg')}}"
                  width="20"
                  height="20"
                />
              </div>
              <div class="edit_icon">
                <img src="{{asset('wa/admindashboard/img/edit.svg')}}" width="20" height="20" />
              </div>
            </div>
          </div>
        </div>
        <div class="card shadow mt-3">
          <div
            class="card-body card_left_border border_left_color3"
          >
            <div class="subject_edit">
              <div class="subject_practis">
                <p class="subject">Math Practice</p>
                <p class="time_pera">
                  <span>23 Jan,</span
                  ><span>04:00pm - 05:00pm</span>
                </p>
              </div>
              <div class="starttime_block">
                <p class="sub_subject">Starts in</p>
                <p class="green_text">00:08:55</p>
              </div>
              <div class="class_block">
                <p class="sub_subject">Class</p>
                <p class="blue_text">10th</p>
              </div>
              <div class="class_block">
                <p class="sub_subject">Subject</p>
                <p class="blue_text">Maths</p>
              </div>
              <div class="class_block">
                <p class="sub_subject">Time</p>
                <p class="blue_text">30 Min</p>
              </div>
              <div class="class_mb">
                <p class="sub_subject">Students</p>
                <p class="blue_text">30</p>
              </div>
              <div class="delite_icon">
                <img
                  src="{{asset('wa/admindashboard/img/delete.svg')}}"
                  width="20"
                  height="20"
                />
              </div>
              <div class="edit_icon">
                <img src="{{asset('wa/admindashboard/img/edit.svg')}}" width="20" height="20" />
              </div>
            </div>
          </div>
        </div>
        <div class="card shadow mt-3">
          <div
            class="card-body card_left_border border_left_color4"
          >
            <div class="subject_edit">
              <div class="subject_practis">
                <p class="subject">Math Practice</p>
                <p class="time_pera">
                  <span>23 Jan,</span
                  ><span>04:00pm - 05:00pm</span>
                </p>
              </div>
              <div class="starttime_block">
                <p class="sub_subject">Starts in</p>
                <p class="green_text">00:08:55</p>
              </div>
              <div class="class_block">
                <p class="sub_subject">Class</p>
                <p class="blue_text">10th</p>
              </div>
              <div class="class_block">
                <p class="sub_subject">Subject</p>
                <p class="blue_text">Maths</p>
              </div>
              <div class="class_block">
                <p class="sub_subject">Time</p>
                <p class="blue_text">30 Min</p>
              </div>
              <div class="class_mb">
                <p class="sub_subject">Students</p>
                <p class="blue_text">30</p>
              </div>
              <div class="delite_icon">
                <img
                  src="{{asset('wa/admindashboard/img/delete.svg')}}"
                  width="20"
                  height="20"
                />
              </div>
              <div class="edit_icon">
                <img src="{{asset('wa/admindashboard/img/edit.svg')}}" width="20" height="20" />
              </div>
            </div>
          </div>
        </div>
      </div>
    
      <div class="tab-pane active" role="tabpanel" id="menu2">
        <!-- datepicker start -->
        
        <div class="calander d-flex mt-5">
            
          <div class="calander_div">
              <p class="sellect_pera">Select entry From </p>
            <p class="sellect_pera"> <input type="text" id="datepicker" /></p>
            <div><p class="sellect_pera">To</p></div>
            <p><input type="text" id="datepicker" /></p>
          </div>
          
         
          <div class="filter_div">
              <p class="sellect_pera filter">Filter By</p>
              <div class="filter_select select">
                <select name="slct" id="slct">
                  <option selected disabled>Choose an option</option>
                  <option value="1">Date</option>
                  <option value="2">Year</option>
                  <option value="3">Teacher</option>
                </select>
              </div>
          </div>
        </div>
        <!-- datepicker end -->
       {{-- Start card manage classes --}}
       @include('_form.success')
        <div class="row">
          @php $i = 1 @endphp 
          @foreach($batches as $batch)
          
          <div class="col-md-3">
                    
            <div class="card shadow border_block card_bg{{$i}} mt-3">
              <div class="card-body">
                <div class="subject_edit subject_flex">
                  <div class="test_title_div">
                    <p class="test_title">
                      {{ $batch->classSettings->name }}
                    </p>
                  </div>
                   
                  <div class="live-info">
                    <span class="online">
                      {{ $batch->status == 1 ? 'Online' : 'Offline' }}
                    </span>
                    <span class="dot {{ $batch->status == 1 ? 'prime' : '' }}"></span>
                  </div> 
                 
                  
                </div>
                <div class="border_bottom1"></div>
                <div class="subject_edit subject_flex">
                  <div><p class="sub_pera">Subject</p></div>
                  <div><p class="sub_title">{{$batch->subject->name}}</p></div>
                </div>
                <div class="subject_edit subject_flex">
                  @if(auth()->user()->role == 'admin')
                  <div><p class="sub_pera">Assigned to</p></div>
                  
                  <div><p class="sub_title">{{  $batch->assignteacher->name }}</p></div>
                  @endif
                </div>
                <div class="subject_edit subject_flex">
                  <div class="border_line">
                      <p class="sub_pera">Price Per Session</p>
                      <p class="price_no">{{ $batch->batchSession->count() * $batch->batch_price_per_session }}</p>
                  </div>
                  <!-- <div class="border-right"></div> -->
                  <div>
                      <p class="sub_pera">Total Price</p>
                      <p class="price_no">{{ $batch->batchSession->count() }}</p>
                  </div>
                </div>
                <div class="subject_edit subject_flex">
                  <div >
                      <p class="sub_pera">Total seats</p>
                      <p class="price_no">{{ $batch->no_of_seats }}</p>
                  </div>
                  <!-- <div class="border-right"></div> -->
                  <div>
                      <p class="sub_pera">Location</p>
                      <p class="book_sheet font-color1"> {{ $batch->location }}</p>
                  </div>
              </div>
              </div>
              <div class="subject_edit subject_flex view_block view_block_bg{{$i}}">
                  <div>
                     <a class="view_details" href="{{ url('show-classes', $batch->id) }}">View Details</a>
                  </div>
                  <div class="subject_edit subject_flex">
                      <div class="delite_icon space_img">
                        <a href="{{ url('destroy-classes', $batch->id) }}" onclick = "return confirm('Are You Sure For Delete ?')">
                          <img
                            src="{{asset('wa/admindashboard/img/delete.svg')}}"
                            width="20"
                            height="20"
                          /></a>
                        </div>
                        <div class="edit_icon space_img">
                          <a href="{{ url('edit-classes', $batch->id) }}"><img src="{{asset('wa/admindashboard/img/edit.svg')}}" width="20" height="20" /></a>
                        </div>
                  </div>
                </div>
            </div>
          
          </div>
          @php $i++ @endphp
        @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection

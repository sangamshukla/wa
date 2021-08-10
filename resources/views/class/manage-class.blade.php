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
          href="#menu1"
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
        {{-- add class --}}
    <div class="tab-content">
<<<<<<< HEAD
      <div class="tab-pane" role="tabpanel" id="menu1">
        @include('class.create-add-class')
      </div> 
      {{-- end Add Class --}}
      <div class="tab-pane active" role="tabpanel" id="menu2">
          <!-- datepicker start -->
         @include('class.manage_class_list')
=======

      <div class="tab-pane active" role="tabpanel" id="menu1">
        <div class="card shadow mt-3">
          <div class="card-body add_class_block">
            <div class="row">
              <div class="col-md-12 class_type">Class Type</div>
              <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                  <div class="form-check-inline">
                    <label class="radio_container">One
                      <input type="radio" checked="checked" name="radio">
                      <span class="checkmark"></span>
                    </label>&nbsp; &nbsp; &nbsp; &nbsp;
                   <label class="radio_container">One
                    <input type="radio" checked="checked" name="radio">
                    <span class="checkmark"></span>
                  </label>
                 </div>
                 <div class="form-group">
                  <label class="checkbox_container">Do you want to sell your each Session.
                    <input type="checkbox" name="sell_each_session" value="1" checked="checked">
                    <span class="checkmark"></span>
                  </label>
                </div>
               </div>
           </div>
           <div class="row">
             <div class="col-lg-12 col-md-12">
               <div>
                 <form class="form_block">
                  <div class="form-group">
                    <label class="col-md-12 control-label" for="class">Select Class</label>  
                    <div class="col-md-12">
                      <select class="form-control middel_width" id="class" required="true" name="class">
                        <option value="AF">Afghanistan</option>
                        <option value="AX">Åland Islands</option>
                        <option value="AL">Albania</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-12 control-label" for="name">Class Price Per Session</label>  
                    <div class="col-md-12">
                    <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md middel_width" required="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-12 control-label" for="name">Class Start Date  and Time</label>  
                    <div class="col-md-12">
                    <input id="datepicker" name="name" type="text" placeholder="Name" class="form-control input-md large_width hasDatepicker" required="">
                    </div>
                  </div>
                 </form>
               </div>
               <div>
                <form class="form_block">
                  <div class="form-group">
                    <label class="col-md-12 control-label" for="class">Duration Per Session</label>  
                    <div class="col-md-12">
                      <select class="form-control small_width" id="class" required="true" name="class">
                        <option value="AF">Afghanistan</option>
                        <option value="AX">Åland Islands</option>
                        <option value="AL">Albania</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-12 control-label" for="class">No Of Seats</label>  
                    <div class="col-md-12">
                      <select class="form-control small_width" id="class" required="true" name="class">
                        <option value="AF">Afghanistan</option>
                        <option value="AX">Åland Islands</option>
                        <option value="AL">Albania</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-12 control-label" for="class">Select Year</label>  
                    <div class="col-md-12">
                      <select class="form-control small_width" id="class" required="true" name="class">
                        <option value="AF">Afghanistan</option>
                        <option value="AX">Åland Islands</option>
                        <option value="AL">Albania</option>
                      </select>
                    </div>
                  </div>
                 <div class="form-group">
                  <label class="col-md-12 control-label" for="name">Select Subject</label>  
                  <div class="col-md-12">
                  <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md small_width" required="">
                  </div>
                </div>
                </form>
              </div>
             </div>
           </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-lg-12">
           <button class="add_class_plus">Add Class +</button>
          </div>
        </div>
        <div>
          <div class="cross_img"><img src="{{asset('wa/admindashboard/img/cross-img.svg')}}"></div>
        <div class="card-body add_class_block add_sectionbox">
          <form class="form_block">
            <div class="form-group">
              <label class="col-md-12 control-label" for="class">Select Class</label>  
              <div class="col-md-12">
                <select class="form-control small_width" id="class" required="true" name="class">
                  <option value="AF">Afghanistan</option>
                  <option value="AX">Åland Islands</option>
                  <option value="AL">Albania</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-12 control-label" for="class">Select Class</label>  
              <div class="col-md-12">
                <select class="form-control small_width" id="class" required="true" name="class">
                  <option value="AF">Afghanistan</option>
                  <option value="AX">Åland Islands</option>
                  <option value="AL">Albania</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-12 control-label" for="class">Select Class</label>  
              <div class="col-md-12">
                <select class="form-control small_width" id="class" required="true" name="class">
                  <option value="AF">Afghanistan</option>
                  <option value="AX">Åland Islands</option>
                  <option value="AL">Albania</option>
                </select>
              </div>
            </div>
           <div class="form-group">
            <label class="col-md-12 control-label" for="name">Name</label>  
            <div class="col-md-12">
            <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md small_width" required="">
            </div>
          </div>
          </form>
        </div>
        </div>
        <div>
          <div class="cross_img"><img src="{{asset('wa/admindashboard/img/cross-img.svg')}}"></div>
        <div class="card-body add_class_block add_sectionbox">
          <form class="form_block">
            <div class="form-group">
              <label class="col-md-12 control-label" for="class">Select Class</label>  
              <div class="col-md-12">
                <select class="form-control small_width" id="class" required="true" name="class">
                  <option value="AF">Afghanistan</option>
                  <option value="AX">Åland Islands</option>
                  <option value="AL">Albania</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-12 control-label" for="class">Select Class</label>  
              <div class="col-md-12">
                <select class="form-control small_width" id="class" required="true" name="class">
                  <option value="AF">Afghanistan</option>
                  <option value="AX">Åland Islands</option>
                  <option value="AL">Albania</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-12 control-label" for="class">Select Class</label>  
              <div class="col-md-12">
                <select class="form-control small_width" id="class" required="true" name="class">
                  <option value="AF">Afghanistan</option>
                  <option value="AX">Åland Islands</option>
                  <option value="AL">Albania</option>
                </select>
              </div>
            </div>
           <div class="form-group">
            <label class="col-md-12 control-label" for="name">Name</label>  
            <div class="col-md-12">
            <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md small_width" required="">
            </div>
          </div>
          </form>
        </div>
        </div>
        <!-- <p><input type="text" id="datepicker"></p></p> -->
      </div> 
      {{-- end Add Class --}}
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
>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9
      </div>
    </div>
  </div>
</div>
</div>
@endsection
<<<<<<< HEAD
@section('scripts')
<script src="{{ asset('javascript/create_class.js') }}"></script>
@endsection
=======
>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9

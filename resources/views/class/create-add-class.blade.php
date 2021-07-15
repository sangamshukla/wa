@extends('layouts.class_dashboard')
@section('content')

<div style="margin-top:100px;" class="tab-pane active" role="tabpanel" id="menu1">
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
                <input type="checkbox" checked="checked">
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

@endsection

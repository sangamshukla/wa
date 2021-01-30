@extends('layouts.app')

@section('content')
<!-- start page title -->
<div class="row">
  <div class="col-12">
      <div class="page-title-box">
          <div class="page-title-right">
              <ol class="breadcrumb m-0">
                  <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                  <li class="breadcrumb-item"><a href="javascript: void(0);">Teacher</a></li>
                  <li class="breadcrumb-item active">Add Teacher</li>
              </ol>
          </div>
          <h4 class="page-title">Add Teacher / Add Member</h4>
      </div>
  </div>
</div>     
<!-- end page title --> 

     <div class="content">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('add-teacher') }}" autocomplete="off" class="form-horizontal">
            @csrf
            <div class="card ">
              <div class="card-header card-header-success">
                <h4 class="card-title">Add New Teacher</h4>
                <p class="card-category">Fill the required fields</p>
              </div>

              <div class="card-body ">
                @include('_form.success')

                {{-- <form> --}}
                  <div class="row">
                    <div class="col">
                      @include('_form.input', ['title' => 'Name', 'name' => 'name', 'placeholder' => 'name'])
                    </div>
                    <div class="col">
                     @include('_form.input', ['title' => 'Email', 'name' => 'email'])
                    </div>
                  </div>

                  <div class="row">
                    <div class="col">
                      @include('_form.input', ['title' => 'Contact', 'name' => 'contact_number', 'placeholder' => 'name'])
                    </div>

                    <div class="col">
                     <label for="inputState">Select Year</label>
                     <select name="class_master_id" required id="inputState" class="form-control">
                       <option selected>...Select Year...</option>
                       <option value="1">Year 1</option>
                       <option value="2">Year 2</option>
                       <option value="3">Year 3</option>
                       <option value="4">Year 4</option>
                     </select>
                    </div>
                  </div>
{{-- 
                  <div class="row">
                    <div class="col-md-6">
                      <label for="inputState">User Type &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>

                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="user_type" id="inlineRadio2" value="teacher">
                        <label class="form-check-label" for="inlineRadio2">Teacher</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="user_type" id="inlineRadio3" value="operation">
                        <label class="form-check-label" for="inlineRadio3">Operation</label>
                      </div>
                    </div>  --}}

                    <div class="row">
                      <div class="col-md-6">
                        <label for="inputState">User Type &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <div class="form-check-inline">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="Teacher" name="user_type">Teacher
                      </label>
                    </div>
                    <div class="form-check-inline">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="Operation" name="user_type">Opration
                      </label>
                    </div>
                    
                  </div>
                {{-- </form> --}}
                
          </div>
        
              <div class="card-footer ml-auto mr-auto">
                @include('_form.button',['title'=>'Save Teacher'])
              </div>
            </div>
          </form>
        </div>
      </div>
     </div>
@endsection
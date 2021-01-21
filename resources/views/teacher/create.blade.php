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
                      @include('_form.input', ['title' => 'Contact', 'name' => 'Contact', 'placeholder' => 'name'])
                    </div>

                    <div class="col">
                     {{-- @include('_form.input', ['title' => 'User Type', 'name' => 'user_type']) --}}
                     <label for="inputState">Class</label>
                     <select id="inputState" class="form-control">
                       <option selected>Choose...</option>
                       <option>Year 1</option>
                       <option>Year 2</option>
                       <option>Year 3</option>
                       <option>Year 4</option>
                       <option>Year 5th</option>
                       <option>Year 6th</option>
                       <option>Year 7th</option>
                       <option>Year 8th</option>
                       <option>Year 9th</option>
                       <option>Year 10th</option>
                       <option>Year 11th</option>
                       <option>Year 12th</option>
                     </select>
                    </div>
                  </div>

                  {{-- <div class="row">
                    <div class="col">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                          <input type="radio" aria-label="Radio button for following text input">
                          </div>
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with radio button">
                      </div>                                        
                    </div>
                    
                  </div> --}}

                  <label for="inputState">User Type</label>

                  <div class="row">
                    <div class="col">
                     {{-- <label for="inputState">Teacher</label> --}}
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                          <input type="radio" aria-label="Radio button for following text input">
                          </div>
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with radio button" placeholder="Teacher">
                      </div>
                    </div>

                    <div class="col">
                     {{-- <label for="inputState">Opration</label> --}}

                     <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                        <input type="radio" aria-label="Radio button for following text input">
                        </div>
                      </div>
                      <input type="text" class="form-control" aria-label="Text input with radio button" placeholder="Opration">
                    </div>
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
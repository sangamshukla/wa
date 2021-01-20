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
          <h4 class="page-title">Add Teacher</h4>
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
                @include('_form.input', ['title' => 'Name', 'name' => 'name', 'col' => true])
                
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
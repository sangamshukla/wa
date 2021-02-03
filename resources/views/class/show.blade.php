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
          <h4 class="page-title">List Of Class</h4>
      </div>
  </div>
</div>     
<!-- end page title --> 

     <div class="content">
      <div class="row">
        <div class="col-md-12">
            <div class="card ">
              {{-- <div class="card-header card-header-success">
                <h4 class="card-title">Add New Teacher</h4>
                <p class="card-category">Fill the required fields</p>
              </div> --}}

              <div class="card-body ">
                @include('_form.success')

                {{-- <form> --}}
                    <table id="myTable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                {{-- <th>S.No</th> --}}
                                <th>Class Name</th>
                                <th>Assign Teacher</th>
                                <th>(&euro; ) Price Per Session</th>
                                <th>(&euro; ) Total Price</th>
                                {{-- <th>Class Price</th> --}}
                                <th>Nubmer Of Sessions</th>
                                <th>Class Start Date & Time</th>
                                <th>Class</th>
                                <th>Subject</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    
                        <tbody>
                        @foreach($batches as $batch)
                            <tr>
                                {{-- <td>{{ $batch->id }}</td> --}}
                                <td>{{ $batch->classSettings->name }}</td>
                                <td>{{ $batch->assignteacher->name }}</td>
                                <td>{{ $batch->batch_price_per_session }}</td>
                                <td>{{ $batch->batchSession->count() * $batch->batch_price_per_session }}</td>
                                <td>{{ $batch->batchSession->count() }}</td>
                                {{-- <td>{{ $totalprice }}</td>   --}}
                                
                                {{-- <td>{{ $totals }}</td> --}}
                                <td>{{ $batch->batch_start_date }}</td>
                                <td>{{ $batch->classmaster->name }}</td>
                                <td>{{ $batch->subject->name }}</td>
                                <td>
                                  <a href=""><i class="fa fa-edit"></i>edit</a>
                                  <a href=""><i class="fa fa-eye"></i>delete</a>
                                  <a href="{{ url('show-classes', $batch->id)}}">show</a>

                                </td> 
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    
                {{-- </form> --}}
                
          </div>
            </div>
        </div>
      </div>
     </div>
@endsection

@section('scripts')
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>

@endsection
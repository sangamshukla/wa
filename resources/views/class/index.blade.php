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
          <h4 class="page-title" style="color:#A6C439">Manage Classes</h4>
      </div>
  </div>
</div>     
<!-- end page title --> 

     <div class="content">
      <div class="row">
        <div class="col-md-12">
            <div class="card ">
              <div class="card-body ">
                @include('_form.success')

                {{-- <form> --}}
                        <table id="myTable" class="table table-bordered">
                        <thead style="background-color:#7DC234;color:#fff;">
                            <tr>
                                <th>S.No</th>
                                <th>Class Name</th>
                                <th>Assign Teacher</th>
                                <th> Price Per Session(&euro;)</th>
                                <th>Total Price</th>
                                <th>Nubmer Of Sessions</th>
                                <th>Class Start Date & Time</th>
                                <th>Year</th>
                                <th>Subject</th>
                                <th>status</th>
                                <th style="width:73.6979px;">Action</th>
                            </tr>
                        </thead>
                    
                        <tbody>
                        @foreach($batches as $batch)
                            <tr>
                                
                                <td>{{ $batch->id }}</td>
                                <td>{{ $batch->classSettings->name }}</td>
                                <td>{{ $batch->assignteacher->name }}</td>
                                <td>{{ $batch->batch_price_per_session }}</td>
                                <td>{{ $batch->batchSession->count() * $batch->batch_price_per_session }}</td>
                                <td>{{ $batch->batchSession->count() }}</td>
                                <td>{{ $batch->batch_start_date }}</td>
                                <td>{{ $batch->classmaster->name }}</td>
                                <td>{{ $batch->subject->name }}</td>
                                <td></td>

                                <td>
                                  <a href="{{ url('edit-classes', $batch->id) }}" class="action-icon"> <i style="color:#A6C439"class="mdi mdi-pencil"></i></a>
                                  <a href="{{ url('destroy-classes', $batch->id) }}" onclick = "return confirm('Are You Sure For Delete ?')" class="action-icon"> <i style="color:red" class="mdi mdi-delete"></i></a>
                                  <a href="{{ url('show-classes', $batch->id) }}" class="action-icon"> <i style="color:#2b58ace8" width="500" height="200"class="mdi mdi-eye"></i></a>


                                  {{-- <a style="color:#2b58ace8" href=""><i class="fa fa-edit"></i>edit</a> --}}
                                  {{-- <a style="color:#2b58ace8"  href=""><i class="fa fa-eye"></i>delete</a> --}}
                                  {{-- <a style="color:#2b58ace8" href="{{ url('show-classes', $batch->id)}}"><i class="fa fa-edit"></i>view</a> --}}
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
        // $('#myTable').DataTable( {"scrollX": true} );
    } );
</script>

@endsection

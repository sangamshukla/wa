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
          <h4 class="page-title" style="color:#A6C439">Manage Teacher</h4>
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
                        <table id="myTable" class="table table-bordered table-responsive w-100 d-block d-md-table">
                        <thead style="background-color:#7DC234;color:#fff;">

                            <tr>
                                <th>S.No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact Number</th>
                                <th>Year</th>
                                <th>User Type</th>
                                <th style="width:73.6979px;">Action</th>
                            </tr>
                        </thead>
                    
                        <tbody>
                         @foreach($teachers as $teacher)
                            <tr>
                                
                                <td>{{ $teacher->id }}</td>
                                <td>{{ $teacher->user->name }}</td>
                                <td>{{ $teacher->user->email }}</td>
                                <td>{{ $teacher->user->contact_number }}</td>
                                <td></td>
                                {{-- <td>{{ $teacher->classmaster->name }}</td> --}}
                                <td>{{ $teacher->user_type }}</td>
                                

                                <td>
                                  <a href="{{ url('edit-teacher', $teacher->id) }}" class="action-icon"> <i style="color:#A6C439"class="mdi mdi-pencil"></i></a>
                                  <a href="{{ url('destroy-teacher', $teacher->id) }}" onclick = "return confirm('Are You Sure For Delete ?')" class="action-icon"> <i style="color:red" class="mdi mdi-delete"></i></a>
                                  <a href="{{ url('show-teacher', $teacher->id) }}" class="action-icon"> <i style="color:#2b58ace8" width="500" height="200"class="mdi mdi-eye"></i></a>
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

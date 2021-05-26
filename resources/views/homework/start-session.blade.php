@extends('layouts.session')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div
      class="d-sm-flex align-items-center justify-content-between mb-4"
    >
      <h1 class="h3 mb-0 text-gray-800 session_heading">My Session</h1>
    </div>
    <!-- image block -->
    <div class="row">
      <div class="col-xl-12 col-lg-12">
        <div class="container-fluid mt-5">
         
          <a class="direction_nav" href="#">
            <span class="arrow-right"
              ><i class="fa fa-angle-left" aria-hidden="true"></i></span
            ><span>{{ $session->batch->classSettings->name }}</span>
          </a>
          <div class="row">
            <div class="col-lg-4">
              <div class="">
                <ul class="nav nav-pills nav-fill navtop side_tab">
                  {{-- Start Session Option --}}
                  <li class="nav-item">
                    <a
                      class="
                        nav-link
                        tab_title
                        side_nav
                        tab_sidebar tab_sidebar1
                        active
                      "
                      href="#menu1"
                      data-toggle="tab"
                      >Start Session</a
                    >
                  </li>
                  {{-- Assign Homework Option --}}
                  <li class="nav-item">
                    <a
                      class="
                        nav-link
                        tab_title
                        side_nav
                        tab_sidebar tab_sidebar2
                      "
                      href="#menu2"
                      data-toggle="tab"
                      >Assign Homework</a
                    >
                  </li>
                  {{-- Archieve Option --}}
                  <li class="nav-item">
                    <a
                      class="
                        nav-link
                        tab_title
                        side_nav
                        tab_sidebar tab_sidebar3
                      "
                      href="#menu3"
                      data-toggle="tab"
                      >Archive</a
                    >
                  </li>
                  {{-- Feedback Option --}}
                  <li class="nav-item">
                    <a
                      class="
                        nav-link
                        tab_title
                        side_nav
                        tab_sidebar tab_sidebar4
                      "
                      href="#menu4"
                      data-toggle="tab"
                      >Feedback</a
                    >
                  </li>
                 
                </ul>
              </div>
            </div>
            
            <div class="col-lg-8 border_block_box">
              <div class="tab-content">
                <div class="d-flex justify-content-between mt-4"></div>
                @include('homework._start_session')
                @include('homework._assign_homework')
                @include('homework._archieve')
                @include('homework._feedback')
              </div>
            </div>
           
          </div>
        </div>
      </div>
    </div>
    <!-- Content Row -->
    <!-- subject card Row -->
    <!-- subject card Row -->
  </div>

@endsection

{{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> --}}
@section('scripts')

<script type="text/javascript">
// share homework
$('#saveAsssignHomework').on('click', function(){
     
      $.ajax({
          "_token": "{{ csrf_token() }}",
          type:'POST',
          url: "{{ url('assign-homework') }}",
          data: JSON.stringify({
            comment: $('#message').val(),
            session_id: "{{ $session->id }}",
            points: $('#points').val(),
            type_of_homework:"",
            assigned_content: $('#pdf').val()
          }),
          contentType: false,
          processData: false,
          success: (xhr, response) => {
             alert("Homework Assigned Successfully");
          },
          error: (xhr, status, error)=>{
             alert("Please Choose PDF File");
          }
      });
});

// upload PDF
  var fileList = [];
  $('#upload_pdf').submit(function(e) {
      e.preventDefault();
      let formData = new FormData(this);
      $('#image-input-error').text('');
      $('#profile_pic_loader').show();
      $('upload_btn').attr("disabled", true);
      $.ajax({
          "_token": "{{ csrf_token() }}",
          type:'POST',
          url: "{{url('upload-pdf')}}/{{$session->id}}",
          data: formData,
          contentType: false,
          processData: false,
          success: (xhr, response) => {
              $('#profile_pic_loader').hide();
              if (response) {
              fileList.push(xhr.filename);
              $("#listOfFiles").html("");
              var list="";
              for(let z=0; z < fileList.length; z++)
              {
                list += "<div style='background:#BCFFEE; width:30%;'><p>"+fileList[z]+"</p></div>";
              }
              $("#listOfFiles").html(list);
              this.reset();
                //  $('#image-input-success').text("Uploaded Succcessfully");
              }
          },
          error: (xhr, status, error)=>{
              if(error){
                $('#profile_pic_loader').hide();
              this.reset();
              var err=JSON.parse(xhr.responseText);
                  $('#image-input-error').text(err.message + err.errors.profile_photo_input[0]);
              }
          }
      });
  });
</script>
@endsection

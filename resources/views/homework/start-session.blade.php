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
            
            <div class="col-lg-8 border_block_box" style="padding-bottom: 15px;">
              <div class="tab-content">
                <div class="d-flex justify-content-between mt-4"></div>
                @include('homework._start_session')
                @include('homework._assign_homework')
                @include('homework._archieve')
                @include('homework._feedback')
                <p class="text-danger" id="already_assigned"></p>
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
{{-- popup --}}
<div
  class="modal fade"
  id="demoModal"
  tabindex="-1"
  role="dialog"
  aria-labelledby="demoModalLabel"
  aria-hidden="true"
>
  <div
    class="modal-dialog"
    role="document"
  >
    <div class="modal-content">
      <div
        class="
          modal-body
          table_modal_body
        "
      >
      <div class="text-center">
        <div class="ol-img"><img src="{{ asset('wa/teacherdashboard/img/Ok Icon1.svg')}}" width="40" height="40"></div>
        <div><p class="title_modal_header">Homework Assigned Successful</p></div>
        <div><p class="title_modal_pera" id="success_message_div">Homework for session 2 has been Assigned Successfully.</p></div>
        <button type="btn" class="btn share_cta" style="width:120px;" onclick="$('#demoModal').modal('hide');" > Ok, Got It!</button>
      </div>
      </div>
    
    </div>
  </div>
</div>
{{-- /popup --}}
@endsection

{{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> --}}
@section('scripts')

<script type="text/javascript">
// share homework By Choosing The File
$('#saveAsssignHomework').on('click', function(){
      $("#saveAsssignHomework").html("Assigning...");
      var choosePdf = $("input[name='choosePDFS']:checked").val();;
      if(!choosePdf)
      {
       $('#choose_pdf_tree').html("Please Select PDF First.")
       $("#saveAsssignHomework").html("Share");
      }else{
        var chosenChoosePDF = $('#message').val();
        if(!chosenChoosePDF){
          $('#comment_pdf_tree').html("Comment is required.")
          $("#saveAsssignHomework").html("Share");
        }else {
          $.ajax({
          "_token": "{{ csrf_token() }}",
          type:'POST',
          url: "{{ url('assign-homework') }}",
          data: JSON.stringify({
            comment: $('#message').val(),
            session_id: "{{ $session->id }}",
            points: $('#points').val(),
            type_of_homework:"CHOOSE_PDF",
            assigned_content: $('#pdf').val()
          }),
          contentType: false,
          processData: false,
          success: (xhr, response) => {
            //  alert("Homework Assigned Successfully");
            $("#success_message_div").html("Homework for {{ $session->name }} has been assigned successfully.");
             $('#demoModal').modal('show');
             $("#saveAsssignHomework").html("Share");
             $('#message').val("");
             $('#points').val("")
          },
          error: (xhr, status, error)=>{
            //  alert("Please Choose PDF File");
             $("#already_assigned").html(xhr.responseJSON.data);
             $("#saveAsssignHomework").html("Share");
          }
      });
        }
      }
      
});

// upload PDF
  var fileList = [];
  var fileIDs = [];
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
              fileIDs.push(xhr.fileId);
              $("#listOfFiles").html("");
              var list="";
              for(let z=0; z < fileList.length; z++)
              {
                list += "<div style='background: #BCFFEE;width: 30%;border-radius: 7px;padding-left: 19px;'><p>"+fileList[z]+" <span onClick='removeOne()' style='float:right; margin-right:-10%; '><i class='fa fa-times'></i><span></p></div>";
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
                $('#image-input-error').text("Please Upload PDF File Only");
              }
          }
      });
  });

  function removeOne()
  {
    fileList.pop();
    list="";
    for(let z=0; z < fileList.length; z++)
    {
      list += "<div style='background: #BCFFEE;width: 30%;border-radius: 7px;padding-left: 19px;'><p>"+fileList[z]+" <span onClick='removeOne()' style='float:right; margin-right:-10%; '><i class='fa fa-times'></i><span></p></div>";
    }
    $("#listOfFiles").html(list);
  }


// saveUploadPDFHomeWork

$('#saveUploadPDFHomeWork').on('click', function(){
  $("#saveUploadPDFHomeWork").html("Assigning...");
     $.ajax({
         "_token": "{{ csrf_token() }}",
         type:'POST',
         url: "{{ url('assign-homework') }}",
         data: JSON.stringify({
           comment: $('#pdfMessage').val(),
           session_id: "{{ $session->id }}",
           points: $('#pointsPDF').val(),
           type_of_homework:"UPLOAD_PDF",
           assigned_content: fileIDs
         }),
         contentType: false,
         processData: false,
         success: (xhr, response) => {
           //  alert("Homework Assigned Successfully");
           $("#success_message_div").html("Homework for {{ $session->name }} has been assigned successfully.");
            $('#demoModal').modal('show');
            $("#saveUploadPDFHomeWork").html("Share");
            $('#pdfMessage').val("");
            $('#pointsPDF').val("");
            fileList = [];
            removeOne();
         },
         error: (xhr, status, error)=>{
            // console.log(xhr);
            $("#already_assigned").html(xhr.responseJSON.data);
            $("#saveUploadPDFHomeWork").html("Share");
         }
     });
});
</script>
@endsection

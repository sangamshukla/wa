@extends('layouts.operation_dashboard')
@section('content')
<<<<<<< HEAD
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
<div style="margin-top: 90px;" class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1  class="h3 mb-0 text-gray-800 session_heading">Batch List</h1>
  </div>
=======
{{-- <table id="example" class="table table-striped table-bordered" style="width:100%; margin-top:90px;">
    <thead>
        <tr>
            <th>Sr.No</th>
            <th>Teacher Name</th>
            <th>Total Session Count</th>
            <th>Action</th>          
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Director</td>
            <td>90</td>
            <td>View Details</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Support Engineer</td>
            <td></td>
            <td></td>
        </tr>      
    </tbody>
</table> --}}
<div class="col-lg-8 border_block_box" style="padding-bottom: 15px;">
    <div class="tab-content">
      <div class="d-flex justify-content-between mt-4"></div>
      <div class="tab-pane active" role="tabpanel" id="menu1">
<div class="card">
<div class="session_data_block">
<div class="d-flex justify-content-between">
<div>
  <p class="session_title">Session Date</p>
  <p class="session_date">23/06/2021</p>
</div>
<div>
  <p class="session_title">Session Time</p>
  <p class="session_date">02:00 AM - 02:30 AM</p>
</div>
<div>
  <p class="session_title">Teachers Name</p>
  <p class="session_date">Mike Canery singh</p>
</div>
<div>
  <p class="session_title">Class</p>
  <p class="session_date">Year 1</p>
</div>
</div>
</div>
<div class="card-body">
<div class="d-flex justify-content-between">
<div><p class="session_no">Session-1</p></div>
<div class="d-flex justify-content-between">
  <div class="pr-5">
    <p class="seat_pera">Total Seats</p>
    <p class="seat_no">3</p>
  </div>
  <div>
    <p class="start_date">Starts in</p>
    <a id="43">Session Time Over</a>
  <script>
      window.onload = (event) => {
  
          // alert("here");
          function timer() {
              setInterval(function() {
                  let difference = new Date("2021-06-23 02:00:00") - new Date();
                  let remaining = "Join Now";
                  let starttime = new Date("2021-06-23 02:00:00");
                  let endTime = new Date("2021-06-23 02:30:00");
                  let currentTime = new Date();
                  if (difference > 0) {
                      const parts = {
                          d: Math.floor(difference / (1000 * 60 * 60 * 24)),
                          h: Math.floor((difference / (1000 * 60 * 60)) % 24),
                          m: Math.floor((difference / 1000 / 60) % 60),
                          s: Math.floor((difference / 1000) % 60),
                      };
                      remaining = Object.keys(parts).map(part => {
                            return `${parts[part]} ${part}`;
                      }).join(" ");
                     document.getElementById("43").innerHTML = remaining;
                  } else if (endTime > currentTime) {
                    document.getElementById("43").href = "https://us04web.zoom.us/j/75639455467?pwd=TmJtWmFGUXBTdjlaR1JqSmtZYVlmUT09";
                  }else {
                      document.getElementById("43").innerHTML = "Session Time Over";
                  }
                  
                  
                  
              }, 1000);
          }
          timer();
      };
  </script>
    
  </div>
</div>
</div>
<div><p class="batch_name">Physics Evening Class</p></div>
<hr>
<div class="title_session">Students</div>
      
<hr>

<div>


</div>
</div>
</div>
</div>                <div class="tab-pane" role="tabpanel" id="menu2">
<div class="session_data_block">
<div class="d-flex justify-content-between">
<div>
<p class="session_title">Session Date</p>
<p class="session_date">23/06/2021</p>
</div>
<div>
<p class="session_title">Session Time</p>
<p class="session_date">02:00 AM - 02:30 AM</p>
</div>
<div>
<p class="session_title">Teachers Name</p>
<p class="session_date">Mike Canery singh</p>
</div>
<div>
<p class="session_title">Class</p>
<p class="session_date">Year 1</p>
</div>
</div>
</div>
<div class="mt-5">
<div class="d-flex justify-content-between">
<div>
<p class="session_no">Assign Homework</p>
</div>

<div>
<!-- Button trigger modal -->
<p class="joined" data-toggle="modal" data-target="#exampleModal">
0 Joined
</p>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">
      Student List for the session
    </h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
  </div>
  <div class="
      modal-body
      table_modal_body
    ">
    <!-- DataTales Example -->
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Student Name</th>
          <th scope="col">year</th>
          <th scope="col">Session Name</th>
        </tr>
      </thead>
      <tbody>
                                          </tbody>
    </table>
  </div>
  
</div>
</div>
</div>
</div>

</div>
<div class="d-flex justify-content-between">
<div>
<ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
  <a class="
      nav-link
      tab_title
      side_nav
      inner_nav
      active
    " data-toggle="tab" href="#tabhome1">PDF</a>
</li>
          <li class="nav-item">
  <a class="
      nav-link
      tab_title
      side_nav
      inner_nav
    " data-toggle="tab" href="#tabhome2">Upload File</a>
</li>

<li class="nav-item">
  <a class="
      nav-link
      tab_title
      side_nav
      inner_nav
    " data-toggle="tab" href="#tabhome3">Add Question</a>
</li>
</ul>
</div>


</div>
<hr>
<!-- Tab panes -->
<div class="tab-content">
<div id="tabhome1" class="container tab-pane active">
<br>

<div>
<div class="row">
  <div class="col-md-12">
    <div id="accordion">
      <div class="">
        <div class="">
          <a class="card-link text-dark collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="false"><span class="float-left tab_arrow"></span>
            <img class="folder_icon" src="http://pariharz.com/testing/public/folder.png" width="30" height="30">
            <h6 class="folder_title">
              Tense
            </h6>
          </a>
        </div>
        <div id="collapseOne" class="collapse" data-parent="#accordion" style="">
          <div class="card-body">
            <ul class="list_pdf">
                                      <li>
                <span class="pdf_list_no">
                  <input type="radio" id="pdf" name="choosePDFS" value="73" class="radio_cta">
                </span>
                <span>Types Of Tenses</span>
                  <span class="pdf_block">
                    <a target="_blank" href="http://pariharz.com/testing/public/uploads/public/pdfs/TVSInBkFewEROXxELLYSxaA0qsBOBfFSYZxSOXHs.pdf"><img src="http://pariharz.com/testing/public/wa/dashboard/homework/img/pdf.svg"></a>
                  </span>
              </li>
                                    </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<p id="" class="text-danger"></p>
<hr>
<div class="card">
  <p class="tile_card_comment">Comment</p>
  <div class="card-body">
    <div class="form-group">
      <label class="sr-only" for="message">post</label>
      <textarea class="form-control" id="message" rows="3" placeholder="Add your comment"></textarea>
    </div>
      
  </div>
  
</div>

<div class="row mt-2">
<div style="color:#1D6771;" class="form-group col-md-6">           
  <span>Points</span>
<input type="number" style="width:78%;" class="form-control" id="points" placeholder="Points">  
</div>

 
<div style="color:#1D6771;" class="form-group col-md-6">           
  <span style="float: left; margin-left: 22%;">Due Date:</span>
  <input type="text" style="width:78%; float: right" class="form-control" name="due_date" id="dueDatePdf" placeholder="Due Date">
</div>
</div>


<hr>
<div>
  <div class="share_block">
    <label data-toggle="modal" data-target="#exampleModal" class="container">
      <input type="checkbox">
      <span class="checkmark"></span>
      <span class="add_text">Assign To All Students</span>
    </label>
    <label data-toggle="modal" data-target="#exampleModal" class="container">
      <input type="checkbox">
      <span class="checkmark"></span>
      <span class="add_text">Assign To Selected Students</span>
    </label>
  </div>
  <div>
    <button class="btn share_cta" id="saveAsssignHomework">
      Share
    </button>
  </div>
</div>
</div>        
</div>
<div id="tabhome2" class="container tab-pane fade">
<div class="file_upload" style="padding-left:0px;">



<div class="">
<form enctype="multipart/form-data" id="upload_pdf">
<input type="hidden" name="_token" value="9NHhZgqGAxrfFsIwmmrhTcgpNOIRPzLfMgyGSs3H">          <label>
    <input class="btn btn-primary" style="background-color: #1D6771 !important" type="file" onchange="$(this).closest('form').submit();" accept="application/pdf" name="pdf" id="profile_upload">
</label>
<span class="text-muted"><p>(You can upload *pdf files only, maximum file size is 10MB).</p></span>
<br>

<span class="text-danger" id="image-input-error"></span>
<span class="text-primary" id="image-input-success"></span>

<div style="display: none;" id="profile_pic_loader">
<img src="http://pariharz.com/testing/public/wa/assets/img/ajax-loader.gif" alt="">
<p><b>Please wait...</b></p>
</div>
   <p class="text-danger" id="show_error_meessage_for_file"></p>
</form>
</div>

</div>

<div>
<ul class="list_pdf">

<div id="listOfFiles"></div>

</ul>
<hr>
<div class="card" style="width: 100%;">
<p class="tile_card_comment">Comment</p>
<div class="card-body">
<div class="form-group">
<label class="sr-only" for="message">post</label>
<textarea class="form-control" id="pdfMessage" rows="3" placeholder="Add your comment"></textarea>
</div>
</div>
</div>
<div class="row mt-2">
<div style="color:#1D6771;" class="form-group col-md-6">           
<span>Points</span>
<input type="number" style="width:38%;" class="form-control" id="pointsPDF" placeholder="Points">  
</div> 
<div style="color:#1D6771;" class="form-group col-md-6">           
<span style="float: left; margin-left: 22%;">Due Date:</span>
<input type="text" class="form-control" style="width:78%; float: right" name="due_date" id="dueDateUploadFile" placeholder="Due Date">
</div>
</div>

<hr>
<div>
<div class="share_block">
<label class="container" data-toggle="modal" data-target="#exampleModal">
<input type="checkbox">
<span class="checkmark"></span>
<span class="add_text">Assign To All Students</span>
</label>
<label class="container" data-toggle="modal" data-target="#exampleModal">
<input type="checkbox">
<span class="checkmark"></span>
<span class="add_text">Assign To Selected Students</span>
</label>
</div>
<div>
<button class="btn share_cta" id="saveUploadPDFHomeWork">
Share
</button>
</div>          </div>
</div>
</div>

<div id="tabhome3" class="container tab-pane fade">
<br>
<h3></h3>
<textarea name="editor_add_question" id="editor_add_question" style="visibility: hidden; display: none;"></textarea><div id="cke_editor_add_question" class="cke_1 cke cke_reset cke_chrome cke_editor_editor_add_question cke_ltr cke_browser_webkit" dir="ltr" lang="en" role="application" aria-labelledby="cke_editor_add_question_arialbl"><span id="cke_editor_add_question_arialbl" class="cke_voice_label">Rich Text Editor, editor_add_question</span><div class="cke_inner cke_reset" role="presentation"><span id="cke_1_top" class="cke_top cke_reset_all" role="presentation" style="height: auto; user-select: none;"><span id="cke_6" class="cke_voice_label">Editor toolbars</span><span id="cke_1_toolbox" class="cke_toolbox" role="group" aria-labelledby="cke_6" onmousedown="return false;"><span id="cke_7" class="cke_toolbar" aria-labelledby="cke_7_label" role="toolbar"><span id="cke_7_label" class="cke_voice_label">Basic Styles</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_8" class="cke_button cke_button__bold cke_button_off" href="javascript:void('Bold')" title="Bold (⌘+B)" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_8_label" aria-describedby="cke_8_description" aria-haspopup="false" aria-disabled="false" onkeydown="return CKEDITOR.tools.callFunction(0,event);" onfocus="return CKEDITOR.tools.callFunction(1,event);" onclick="CKEDITOR.tools.callFunction(2,this);return false;"><span class="cke_button_icon cke_button__bold_icon" style="background-image:url('http://cdn.ckeditor.com/4.16.1/basic/plugins/icons.png?t=L4KA');background-position:0 -24px;background-size:auto;">&nbsp;</span><span id="cke_8_label" class="cke_button_label cke_button__bold_label" aria-hidden="false">Bold</span><span id="cke_8_description" class="cke_button_label" aria-hidden="false">&nbsp;Keyboard shortcut Command+B</span></a><a id="cke_9" class="cke_button cke_button__italic cke_button_off" href="javascript:void('Italic')" title="Italic (⌘+I)" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_9_label" aria-describedby="cke_9_description" aria-haspopup="false" aria-disabled="false" onkeydown="return CKEDITOR.tools.callFunction(3,event);" onfocus="return CKEDITOR.tools.callFunction(4,event);" onclick="CKEDITOR.tools.callFunction(5,this);return false;"><span class="cke_button_icon cke_button__italic_icon" style="background-image:url('http://cdn.ckeditor.com/4.16.1/basic/plugins/icons.png?t=L4KA');background-position:0 -48px;background-size:auto;">&nbsp;</span><span id="cke_9_label" class="cke_button_label cke_button__italic_label" aria-hidden="false">Italic</span><span id="cke_9_description" class="cke_button_label" aria-hidden="false">&nbsp;Keyboard shortcut Command+I</span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_10" class="cke_toolbar" aria-labelledby="cke_10_label" role="toolbar"><span id="cke_10_label" class="cke_voice_label">Paragraph</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_11" class="cke_button cke_button__numberedlist cke_button_off" href="javascript:void('Insert/Remove Numbered List')" title="Insert/Remove Numbered List" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_11_label" aria-describedby="cke_11_description" aria-haspopup="false" aria-disabled="false" onkeydown="return CKEDITOR.tools.callFunction(6,event);" onfocus="return CKEDITOR.tools.callFunction(7,event);" onclick="CKEDITOR.tools.callFunction(8,this);return false;"><span class="cke_button_icon cke_button__numberedlist_icon" style="background-image:url('http://cdn.ckeditor.com/4.16.1/basic/plugins/icons.png?t=L4KA');background-position:0 -576px;background-size:auto;">&nbsp;</span><span id="cke_11_label" class="cke_button_label cke_button__numberedlist_label" aria-hidden="false">Insert/Remove Numbered List</span><span id="cke_11_description" class="cke_button_label" aria-hidden="false"></span></a><a id="cke_12" class="cke_button cke_button__bulletedlist cke_button_off" href="javascript:void('Insert/Remove Bulleted List')" title="Insert/Remove Bulleted List" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_12_label" aria-describedby="cke_12_description" aria-haspopup="false" aria-disabled="false" onkeydown="return CKEDITOR.tools.callFunction(9,event);" onfocus="return CKEDITOR.tools.callFunction(10,event);" onclick="CKEDITOR.tools.callFunction(11,this);return false;"><span class="cke_button_icon cke_button__bulletedlist_icon" style="background-image:url('http://cdn.ckeditor.com/4.16.1/basic/plugins/icons.png?t=L4KA');background-position:0 -528px;background-size:auto;">&nbsp;</span><span id="cke_12_label" class="cke_button_label cke_button__bulletedlist_label" aria-hidden="false">Insert/Remove Bulleted List</span><span id="cke_12_description" class="cke_button_label" aria-hidden="false"></span></a><span class="cke_toolbar_separator" role="separator"></span><a id="cke_13" class="cke_button cke_button__outdent cke_button_disabled " href="javascript:void('Decrease Indent')" title="Decrease Indent" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_13_label" aria-describedby="cke_13_description" aria-haspopup="false" aria-disabled="true" onkeydown="return CKEDITOR.tools.callFunction(12,event);" onfocus="return CKEDITOR.tools.callFunction(13,event);" onclick="CKEDITOR.tools.callFunction(14,this);return false;"><span class="cke_button_icon cke_button__outdent_icon" style="background-image:url('http://cdn.ckeditor.com/4.16.1/basic/plugins/icons.png?t=L4KA');background-position:0 -384px;background-size:auto;">&nbsp;</span><span id="cke_13_label" class="cke_button_label cke_button__outdent_label" aria-hidden="false">Decrease Indent</span><span id="cke_13_description" class="cke_button_label" aria-hidden="false"></span></a><a id="cke_14" class="cke_button cke_button__indent cke_button_off" href="javascript:void('Increase Indent')" title="Increase Indent" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_14_label" aria-describedby="cke_14_description" aria-haspopup="false" aria-disabled="false" onkeydown="return CKEDITOR.tools.callFunction(15,event);" onfocus="return CKEDITOR.tools.callFunction(16,event);" onclick="CKEDITOR.tools.callFunction(17,this);return false;"><span class="cke_button_icon cke_button__indent_icon" style="background-image:url('http://cdn.ckeditor.com/4.16.1/basic/plugins/icons.png?t=L4KA');background-position:0 -336px;background-size:auto;">&nbsp;</span><span id="cke_14_label" class="cke_button_label cke_button__indent_label" aria-hidden="false">Increase Indent</span><span id="cke_14_description" class="cke_button_label" aria-hidden="false"></span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_15" class="cke_toolbar" aria-labelledby="cke_15_label" role="toolbar"><span id="cke_15_label" class="cke_voice_label">Links</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_16" class="cke_button cke_button__link cke_button_off" href="javascript:void('Link')" title="Link (⌘+K)" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_16_label" aria-describedby="cke_16_description" aria-haspopup="false" aria-disabled="false" onkeydown="return CKEDITOR.tools.callFunction(18,event);" onfocus="return CKEDITOR.tools.callFunction(19,event);" onclick="CKEDITOR.tools.callFunction(20,this);return false;"><span class="cke_button_icon cke_button__link_icon" style="background-image:url('http://cdn.ckeditor.com/4.16.1/basic/plugins/icons.png?t=L4KA');background-position:0 -456px;background-size:auto;">&nbsp;</span><span id="cke_16_label" class="cke_button_label cke_button__link_label" aria-hidden="false">Link</span><span id="cke_16_description" class="cke_button_label" aria-hidden="false">&nbsp;Keyboard shortcut Command+K</span></a><a id="cke_17" class="cke_button cke_button__unlink cke_button_disabled " href="javascript:void('Unlink')" title="Unlink" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_17_label" aria-describedby="cke_17_description" aria-haspopup="false" aria-disabled="true" onkeydown="return CKEDITOR.tools.callFunction(21,event);" onfocus="return CKEDITOR.tools.callFunction(22,event);" onclick="CKEDITOR.tools.callFunction(23,this);return false;"><span class="cke_button_icon cke_button__unlink_icon" style="background-image:url('http://cdn.ckeditor.com/4.16.1/basic/plugins/icons.png?t=L4KA');background-position:0 -480px;background-size:auto;">&nbsp;</span><span id="cke_17_label" class="cke_button_label cke_button__unlink_label" aria-hidden="false">Unlink</span><span id="cke_17_description" class="cke_button_label" aria-hidden="false"></span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_18" class="cke_toolbar cke_toolbar_last" aria-labelledby="cke_18_label" role="toolbar"><span id="cke_18_label" class="cke_voice_label">about</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_19" class="cke_button cke_button__about cke_button_off" href="javascript:void('About CKEditor 4')" title="About CKEditor 4" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_19_label" aria-describedby="cke_19_description" aria-haspopup="false" aria-disabled="false" onkeydown="return CKEDITOR.tools.callFunction(24,event);" onfocus="return CKEDITOR.tools.callFunction(25,event);" onclick="CKEDITOR.tools.callFunction(26,this);return false;"><span class="cke_button_icon cke_button__about_icon" style="background-image:url('http://cdn.ckeditor.com/4.16.1/basic/plugins/icons.png?t=L4KA');background-position:0 0px;background-size:auto;">&nbsp;</span><span id="cke_19_label" class="cke_button_label cke_button__about_label" aria-hidden="false">About CKEditor 4</span><span id="cke_19_description" class="cke_button_label" aria-hidden="false"></span></a></span><span class="cke_toolbar_end"></span></span></span></span><div id="cke_1_contents" class="cke_contents cke_reset" role="presentation" style="height: 200px;"><iframe src="" frameborder="0" class="cke_wysiwyg_frame cke_reset" title="Rich Text Editor, editor_add_question" tabindex="0" allowtransparency="true" style="width: 100%; height: 100%;"></iframe></div></div></div>
<div>
<ul class="list_pdf">
  
  <div id="listOfFiles"></div>
  
</ul>
<hr>
<div class="card" style="width: 100%;">
  <p class="tile_card_comment">Comment</p>
  <div class="card-body">
    <div class="form-group">
      <label class="sr-only" for="message">post</label>
      <textarea class="form-control" id="messageAddQuestion" rows="3" placeholder="Add your comment"></textarea>
    </div>
  </div>
</div>
<div class="row mt-2">
  <div style="color:#1D6771;" class="form-group col-md-6">           
    <span>Points</span>
<input type="number" style="width:78%;" class="form-control" id="pointsAddQuestion" placeholder="Points">  
</div> 
<div style="color:#1D6771;" class="form-group col-md-6">           
  <span style="float: left; margin-left: 22%;">Due Date:</span>
  <input type="text" style="width:78%; float: right" class="form-control" name="due_date" id="dueDateAddQuestion" placeholder="Due Date">
</div>
</div>

<hr>
<div>
  <div class="share_block">
    <label class="container" data-toggle="modal" data-target="#exampleModal">
      <input type="checkbox">
      <span class="checkmark"></span>
      <span class="add_text">Assign To All Students</span>
    </label>
    <label class="container" data-toggle="modal" data-target="#exampleModal">
      <input type="checkbox">
      <span class="checkmark"></span>
      <span class="add_text">Assign To Selected Students</span>
    </label>
  </div>
  <div>
  <button class="btn share_cta" id="saveAddQuestionHomeWork">
    Share
  </button>
  </div> 
 </div>
  </div>

</div>
</div>
</div>
</div>                <div class="tab-pane" role="tabpanel" id="menu3">
<div class="card shadow mt-3">

<div class="card">
<div class="session_data_block archive">
<div class=" archiv_block">
<div>
<p class="session_title">Session Date</p>
<p class="session_date">23/06/21</p>
</div>
<div>
<p class="session_title">Session Time</p>
<p class="session_date">
02:00:AM
</p>
</div>
<div>
<p class="session_title">Teachers Name</p>
<p class="session_date">Mike Canery singh</p>
</div>
<div>
<p class="session_title">Class</p>
<p class="session_date">Year 1</p>
</div>
</div>
</div>
<div class="card-body">
<div class="d-flex justify-content-between">
<div>
<p class="session_no">Archive</p>
</div>

</div>
<ul class="nav nav-tabs" role="tablist">
<li class="nav-item">
<a class="nav-link home_work_tab active" data-toggle="tab" href="#homework">Assigned
homework</a>
</li>
<li class="nav-item">
<a class="nav-link home_work_tab" data-toggle="tab" href="#quiz">Assigned Quiz</a>
</li>
</ul>

<!-- Tab panes -->
<div class="tab-content">

<div id="homework" class="tab-pane active">
<br>
<section class="">
<div class="">
<div class="row">
  <div class="col-md-12">
    <div id="accordion">
      
         
    
      <div class="card mb-3">
        <div class="card-header">
          <a class="card-link text-dark collapsed" data-toggle="collapse" href="#collapse99" aria-expanded="false"><span class="float-right"></span>
            <!-- <h6>Collapsible Group Item #1</h6> -->
            <div class="accordian_card_display">
              <div>1.</div>
              <div>Session-1</div>
              <div>23/06/21</div>
              <div>Year 1</div>
              <div>0 Students</div>
              <div>0 Submission</div>
            </div>
          </a>
        </div>
        <div id="collapse99" class="collapse" data-parent="#accordion" style="">
          <div class="card-body">
            
                                  <!--<div class="alert alert-warning"><a href="#">View Homework Details</a></div>-->
          </div>
        </div>
      </div>
      
         
    
      <div class="card mb-3">
        <div class="card-header">
          <a class="card-link text-dark" data-toggle="collapse" href="#collapse100" aria-expanded="true"><span class="float-right"></span>
            <!-- <h6>Collapsible Group Item #1</h6> -->
            <div class="accordian_card_display">
              <div>2.</div>
              <div>Session-2</div>
              <div>23/06/21</div>
              <div>Year 1</div>
              <div>0 Students</div>
              <div>0 Submission</div>
            </div>
          </a>
        </div>
        <div id="collapse100" class="hide collapse show" data-parent="#accordion" style="">
          <div class="card-body">
            
                                  <!--<div class="alert alert-warning"><a href="#">View Homework Details</a></div>-->
          </div>
        </div>
      </div>
      
         
    
      <div class="card mb-3">
        <div class="card-header">
          <a class="card-link text-dark" data-toggle="collapse" href="#collapse101"><span class="float-right"></span>
            <!-- <h6>Collapsible Group Item #1</h6> -->
            <div class="accordian_card_display">
              <div>3.</div>
              <div>Session-3</div>
              <div>23/06/21</div>
              <div>Year 1</div>
              <div>0 Students</div>
              <div>0 Submission</div>
            </div>
          </a>
        </div>
        <div id="collapse101" class="collapse hide" data-parent="#accordion">
          <div class="card-body">
            
                                  <!--<div class="alert alert-warning"><a href="#">View Homework Details</a></div>-->
          </div>
        </div>
      </div>
      
                    </div>
  </div>
</div>
</div>
</section>
</div>
<div id="quiz" class="container tab-pane fade">
<br>
<h3>Menu 1</h3>
<p>
Ut enim ad minim veniam, quis nostrud
exercitation ullamco laboris nisi ut
aliquip ex ea commodo consequat.
</p>
</div>
</div>

</div>
</div>

</div>
</div>
      <div class="tab-pane" role="tabpanel" id="menu4">
<div class="card shadow mt-3">
<div class="
card-body card_left_border
border_left_color4
">
<div class="subject_edit">
<div class="subject_practis">
  <p class="subject">Math Practice gggggg</p>
  <p class="time_pera">
    <span>23 Jan,</span><span>04:00pm - 05:00pm</span>
  </p>
</div>
<div class="starttime_block">
  <p class="sub_subject">Starts in</p>
  <p class="green_text">00:08:55</p>
</div>
<div class="class_block">
  <p class="sub_subject">Class</p>
  <p class="blue_text">10th</p>
</div>
<div class="class_block">
  <p class="sub_subject">Subject</p>
  <p class="blue_text">Maths</p>
</div>
<div class="class_block">
  <p class="sub_subject">Time</p>
  <p class="blue_text">30 Min</p>
</div>
<div class="class_mb">
  <p class="sub_subject">Students</p>
  <p class="blue_text">30</p>
</div>
<div class="delite_icon">
  <img src="http://pariharz.com/testing/public/wa/dashboard/homework/img/delete.svg" width="20" height="20">
</div>
<div class="edit_icon">
  <img src="http://pariharz.com/testing/public/wa/dashboard/homework/img/edit.svg" width="20" height="20">
</div>
</div>
</div>
</div>
</div>                

      <p class="text-danger" id="already_assigned"></p>
    </div>
  </div>
{{-- datatable js --}}
>>>>>>> 52a3a33ff2f4a3912d28d9fab98ef477b29c7a17

  <section class="card_package">
      {{-- <div class="container-fulid"> --}}
              {{-- <div class="card-body"> --}}
                  {{-- <div class="row mt-4"> --}}
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                                <td>$170,750</td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td>$86,000</td>
                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2012/03/29</td>
                                <td>$433,060</td>
                            </tr>
                            <tr>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2008/11/28</td>
                                <td>$162,700</td>
                            </tr>
                            <tr>
                                <td>Brielle Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2012/12/02</td>
                                <td>$372,000</td>
                            </tr>
                            <tr>
                                <td>Herrod Chandler</td>
                                <td>Sales Assistant</td>
                                <td>San Francisco</td>
                                <td>59</td>
                                <td>2012/08/06</td>
                                <td>$137,500</td>
                            </tr>
                            <tr>
                                <td>Rhona Davidson</td>
                                <td>Integration Specialist</td>
                                <td>Tokyo</td>
                                <td>55</td>
                                <td>2010/10/14</td>
                                <td>$327,900</td>
                            </tr>
                            <tr>
                                <td>Colleen Hurst</td>
                                <td>Javascript Developer</td>
                                <td>San Francisco</td>
                                <td>39</td>
                                <td>2009/09/15</td>
                                <td>$205,500</td>
                            </tr>
                            <tr>
                                <td>Sonya Frost</td>
                                <td>Software Engineer</td>
                                <td>Edinburgh</td>
                                <td>23</td>
                                <td>2008/12/13</td>
                                <td>$103,600</td>
                            </tr>
                            <tr>
                                <td>Jena Gaines</td>
                                <td>Office Manager</td>
                                <td>London</td>
                                <td>30</td>
                                <td>2008/12/19</td>
                                <td>$90,560</td>
                            </tr>
                            <tr>
                                <td>Quinn Flynn</td>
                                <td>Support Lead</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2013/03/03</td>
                                <td>$342,000</td>
                            </tr>
                            <tr>
                                <td>Charde Marshall</td>
                                <td>Regional Director</td>
                                <td>San Francisco</td>
                                <td>36</td>
                                <td>2008/10/16</td>
                                <td>$470,600</td>
                            </tr>
                            <tr>
                                <td>Haley Kennedy</td>
                                <td>Senior Marketing Designer</td>
                                <td>London</td>
                                <td>43</td>
                                <td>2012/12/18</td>
                                <td>$313,500</td>
                            </tr>
                            <tr>
                                <td>Tatyana Fitzpatrick</td>
                                <td>Regional Director</td>
                                <td>London</td>
                                <td>19</td>
                                <td>2010/03/17</td>
                                <td>$385,750</td>
                            </tr>
                            <tr>
                                <td>Michael Silva</td>
                                <td>Marketing Designer</td>
                                <td>London</td>
                                <td>66</td>
                                <td>2012/11/27</td>
                                <td>$198,500</td>
                            </tr>
                            <tr>
                                <td>Paul Byrd</td>
                                <td>Chief Financial Officer (CFO)</td>
                                <td>New York</td>
                                <td>64</td>
                                <td>2010/06/09</td>
                                <td>$725,000</td>
                            </tr>
                            <tr>
                                <td>Gloria Little</td>
                                <td>Systems Administrator</td>
                                <td>New York</td>
                                <td>59</td>
                                <td>2009/04/10</td>
                                <td>$237,500</td>
                            </tr>
                            <tr>
                                <td>Bradley Greer</td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>41</td>
                                <td>2012/10/13</td>
                                <td>$132,000</td>
                            </tr>
                            <tr>
                                <td>Dai Rios</td>
                                <td>Personnel Lead</td>
                                <td>Edinburgh</td>
                                <td>35</td>
                                <td>2012/09/26</td>
                                <td>$217,500</td>
                            </tr>
                            <tr>
                                <td>Jenette Caldwell</td>
                                <td>Development Lead</td>
                                <td>New York</td>
                                <td>30</td>
                                <td>2011/09/03</td>
                                <td>$345,000</td>
                            </tr>
                            <tr>
                                <td>Yuri Berry</td>
                                <td>Chief Marketing Officer (CMO)</td>
                                <td>New York</td>
                                <td>40</td>
                                <td>2009/06/25</td>
                                <td>$675,000</td>
                            </tr>
                            <tr>
                                <td>Caesar Vance</td>
                                <td>Pre-Sales Support</td>
                                <td>New York</td>
                                <td>21</td>
                                <td>2011/12/12</td>
                                <td>$106,450</td>
                            </tr>
                            <tr>
                                <td>Doris Wilder</td>
                                <td>Sales Assistant</td>
                                <td>Sydney</td>
                                <td>23</td>
                                <td>2010/09/20</td>
                                <td>$85,600</td>
                            </tr>
                            <tr>
                                <td>Angelica Ramos</td>
                                <td>Chief Executive Officer (CEO)</td>
                                <td>London</td>
                                <td>47</td>
                                <td>2009/10/09</td>
                                <td>$1,200,000</td>
                            </tr>
                            <tr>
                                <td>Gavin Joyce</td>
                                <td>Developer</td>
                                <td>Edinburgh</td>
                                <td>42</td>
                                <td>2010/12/22</td>
                                <td>$92,575</td>
                            </tr>
                            <tr>
                                <td>Jennifer Chang</td>
                                <td>Regional Director</td>
                                <td>Singapore</td>
                                <td>28</td>
                                <td>2010/11/14</td>
                                <td>$357,650</td>
                            </tr>
                            <tr>
                                <td>Brenden Wagner</td>
                                <td>Software Engineer</td>
                                <td>San Francisco</td>
                                <td>28</td>
                                <td>2011/06/07</td>
                                <td>$206,850</td>
                            </tr>
                            <tr>
                                <td>Fiona Green</td>
                                <td>Chief Operating Officer (COO)</td>
                                <td>San Francisco</td>
                                <td>48</td>
                                <td>2010/03/11</td>
                                <td>$850,000</td>
                            </tr>
                            <tr>
                                <td>Shou Itou</td>
                                <td>Regional Marketing</td>
                                <td>Tokyo</td>
                                <td>20</td>
                                <td>2011/08/14</td>
                                <td>$163,000</td>
                            </tr>
                            <tr>
                                <td>Michelle House</td>
                                <td>Integration Specialist</td>
                                <td>Sydney</td>
                                <td>37</td>
                                <td>2011/06/02</td>
                                <td>$95,400</td>
                            </tr>
                            <tr>
                                <td>Suki Burks</td>
                                <td>Developer</td>
                                <td>London</td>
                                <td>53</td>
                                <td>2009/10/22</td>
                                <td>$114,500</td>
                            </tr>
                            <tr>
                                <td>Prescott Bartlett</td>
                                <td>Technical Author</td>
                                <td>London</td>
                                <td>27</td>
                                <td>2011/05/07</td>
                                <td>$145,000</td>
                            </tr>
                            <tr>
                                <td>Gavin Cortez</td>
                                <td>Team Leader</td>
                                <td>San Francisco</td>
                                <td>22</td>
                                <td>2008/10/26</td>
                                <td>$235,500</td>
                            </tr>
                            <tr>
                                <td>Martena Mccray</td>
                                <td>Post-Sales support</td>
                                <td>Edinburgh</td>
                                <td>46</td>
                                <td>2011/03/09</td>
                                <td>$324,050</td>
                            </tr>
                            <tr>
                                <td>Unity Butler</td>
                                <td>Marketing Designer</td>
                                <td>San Francisco</td>
                                <td>47</td>
                                <td>2009/12/09</td>
                                <td>$85,675</td>
                            </tr>
                            <tr>
                                <td>Howard Hatfield</td>
                                <td>Office Manager</td>
                                <td>San Francisco</td>
                                <td>51</td>
                                <td>2008/12/16</td>
                                <td>$164,500</td>
                            </tr>
                            <tr>
                                <td>Hope Fuentes</td>
                                <td>Secretary</td>
                                <td>San Francisco</td>
                                <td>41</td>
                                <td>2010/02/12</td>
                                <td>$109,850</td>
                            </tr>
                            <tr>
                                <td>Vivian Harrell</td>
                                <td>Financial Controller</td>
                                <td>San Francisco</td>
                                <td>62</td>
                                <td>2009/02/14</td>
                                <td>$452,500</td>
                            </tr>
                            <tr>
                                <td>Timothy Mooney</td>
                                <td>Office Manager</td>
                                <td>London</td>
                                <td>37</td>
                                <td>2008/12/11</td>
                                <td>$136,200</td>
                            </tr>
                            <tr>
                                <td>Jackson Bradshaw</td>
                                <td>Director</td>
                                <td>New York</td>
                                <td>65</td>
                                <td>2008/09/26</td>
                                <td>$645,750</td>
                            </tr>
                            <tr>
                                <td>Olivia Liang</td>
                                <td>Support Engineer</td>
                                <td>Singapore</td>
                                <td>64</td>
                                <td>2011/02/03</td>
                                <td>$234,500</td>
                            </tr>
                            <tr>
                                <td>Bruno Nash</td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>38</td>
                                <td>2011/05/03</td>
                                <td>$163,500</td>
                            </tr>
                            <tr>
                                <td>Sakura Yamamoto</td>
                                <td>Support Engineer</td>
                                <td>Tokyo</td>
                                <td>37</td>
                                <td>2009/08/19</td>
                                <td>$139,575</td>
                            </tr>
                            <tr>
                                <td>Thor Walton</td>
                                <td>Developer</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2013/08/11</td>
                                <td>$98,540</td>
                            </tr>
                            <tr>
                                <td>Finn Camacho</td>
                                <td>Support Engineer</td>
                                <td>San Francisco</td>
                                <td>47</td>
                                <td>2009/07/07</td>
                                <td>$87,500</td>
                            </tr>
                            <tr>
                                <td>Serge Baldwin</td>
                                <td>Data Coordinator</td>
                                <td>Singapore</td>
                                <td>64</td>
                                <td>2012/04/09</td>
                                <td>$138,575</td>
                            </tr>
                            <tr>
                                <td>Zenaida Frank</td>
                                <td>Software Engineer</td>
                                <td>New York</td>
                                <td>63</td>
                                <td>2010/01/04</td>
                                <td>$125,250</td>
                            </tr>
                            <tr>
                                <td>Zorita Serrano</td>
                                <td>Software Engineer</td>
                                <td>San Francisco</td>
                                <td>56</td>
                                <td>2012/06/01</td>
                                <td>$115,000</td>
                            </tr>
                            <tr>
                                <td>Jennifer Acosta</td>
                                <td>Junior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>43</td>
                                <td>2013/02/01</td>
                                <td>$75,650</td>
                            </tr>
                            <tr>
                                <td>Cara Stevens</td>
                                <td>Sales Assistant</td>
                                <td>New York</td>
                                <td>46</td>
                                <td>2011/12/06</td>
                                <td>$145,600</td>
                            </tr>
                            <tr>
                                <td>Hermione Butler</td>
                                <td>Regional Director</td>
                                <td>London</td>
                                <td>47</td>
                                <td>2011/03/21</td>
                                <td>$356,250</td>
                            </tr>
                            <tr>
                                <td>Lael Greer</td>
                                <td>Systems Administrator</td>
                                <td>London</td>
                                <td>21</td>
                                <td>2009/02/27</td>
                                <td>$103,500</td>
                            </tr>
                            <tr>
                                <td>Jonas Alexander</td>
                                <td>Developer</td>
                                <td>San Francisco</td>
                                <td>30</td>
                                <td>2010/07/14</td>
                                <td>$86,500</td>
                            </tr>
                            <tr>
                                <td>Shad Decker</td>
                                <td>Regional Director</td>
                                <td>Edinburgh</td>
                                <td>51</td>
                                <td>2008/11/13</td>
                                <td>$183,000</td>
                            </tr>
                            <tr>
                                <td>Michael Bruce</td>
                                <td>Javascript Developer</td>
                                <td>Singapore</td>
                                <td>29</td>
                                <td>2011/06/27</td>
                                <td>$183,000</td>
                            </tr>
                            <tr>
                                <td>Donna Snider</td>
                                <td>Customer Support</td>
                                <td>New York</td>
                                <td>27</td>
                                <td>2011/01/25</td>
                                <td>$112,000</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </tfoot>
                    </table>
                  {{-- </div> --}}
              {{-- </div> --}}
      {{-- </div> --}}

  </section>
  <script>

      $(document).ready(function() {
        $('#example').DataTable( {
            "paging": true
        } );
    } );
  </script>

@endsection

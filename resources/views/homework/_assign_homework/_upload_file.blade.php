<div class="file_upload" style="padding-left:0px;">
    {{-- file upload --}}
    {{-- <label class="file">
      <input
        type="file"
        id="file"
        aria-label="example.pdf"
      />
      <span class="file-custom" name="pdf_path"></span>
    </label> --}}

    <div class="">
      <form enctype="multipart/form-data" id="upload_pdf">
          @csrf
          <label>
              <input type="file" onChange="$(this).closest('form').submit();" 
                accept="application/pdf"  
                name="pdf" id="profile_upload" style="cursor: pointer;">
          </label>
          <span class="text-muted"><p style="color: red;" (You can upload *pdf files only, maximum file size is 10MB).></p></span>
        <br/>
          {{-- <div>
              <button class="upload_btn" type="submit">Upload</button>
          </div> --}}
          <span class="text-danger" id="image-input-error"></span>
          <span class="text-primary" id="image-input-success"></span>
          {{-- <p>Upload Image</p> --}}
          <div style="display: none;" id="profile_pic_loader">
          <img src="{{asset('wa/assets/img/ajax-loader.gif')}}" alt="">
          <p><b>Please wait...</b></p>
          </div>
      </form>
  </div>
    {{-- /file upload --}}
  </div>

  <div>
    <ul class="list_pdf">
      {{-- pdfsss --}}
      <div id="listOfFiles"></div>
      
    </ul>
    <hr />
    <div class="card">
      <p class="tile_card_comment">Comment</p>
      <div class="card-body">
        <div class="form-group">
          <label class="sr-only" for="message"
            >post</label
          >
          <textarea
            class="form-control"
            id="pdfMessage"
            rows="3"
            placeholder="Add your comment"
          ></textarea>
        </div>
      </div>
    </div>
    <div style="color:#1D6771;"class="form-group">           
      <th >Points</th>
    <input type="number" style="width:38%;" class="form-control"  id="points" placeholder="Points"/>  
   </div> 
    <hr />
    <div>
      <div class="share_block">
        <label class="container">
          <input
            type="checkbox"
            checked="checked"
          />
          <span class="checkmark"></span>
          <span class="add_text"
            >Select to All</span
          >
        </label>
        <label class="container">
          <input
            type="checkbox"
            checked="checked"
          />
          <span
            class="checkmark"
            data-toggle="modal"
          ></span>
          <span class="add_text"
            >Selected Students</span
          >
        </label>
      </div>
      <div>
      <button class="btn share_cta" id="saveUploadPDFHomeWork">
        Share
      </button>
      </div>
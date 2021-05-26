<div class="tab-pane" role="tabpanel" id="menu2">
    <div class="session_data_block">
      <div class="d-flex justify-content-between">
        <div>
          <p class="session_title">Session Date</p>
          <p class="session_date">{{ $session->start_date_time->format('d/m/Y') }}</p>
        </div>
        <div>
          <p class="session_title">Session Time</p>
          <p class="session_date">{{ $session->start_date_time->format('h:i A') }} - {{ $session->start_date_time->addMinutes($session->batch->duration_per_session)->format('h:i A') }}</p>
        </div>
        <div>
          <p class="session_title">Teachers Name</p>
          <p class="session_date">{{ $session->batch->assignteacher->name }}</p>
        </div>
        <div>
          <p class="session_title">Class</p>
          <p class="session_date">{{ $session->batch->classmaster->name }}</p>
        </div>
      </div>
    </div>
    <div class="mt-5">
      <div class="d-flex justify-content-between">
        <div>
          <p class="session_no">Assign Homework</p>
        </div>
        <div><p class="joined">08 Joined</p></div>
      </div>
      <div class="d-flex justify-content-between">
        <div>
          <ul class="nav nav-tabs" role="tablist">
            @php $i=1; @endphp
            <li class="nav-item">
              <a
                class="
                  nav-link
                  tab_title
                  side_nav
                  inner_nav
                  active
                "
                data-toggle="tab"
                href="#tabhome{{$i}}"
                >PDF</a
              >
            </li>
            @php $i++; @endphp
            <li class="nav-item">
              <a
                class="
                  nav-link
                  tab_title
                  side_nav
                  inner_nav
                "
                data-toggle="tab"
                href="#tabhome2"
                >Upload File</a
              >
            </li>
            
            <li class="nav-item">
              <a
                class="
                  nav-link
                  tab_title
                  side_nav
                  inner_nav
                "
                data-toggle="tab"
                href="#tabhome3"
                >Add Question</a
              >
            </li>
          </ul>
        </div>
        <div class="d-flex justify-content-between">
          <div class="filter_text"><p>Filter By</p></div>
          <div>
            <select class="form-control">
              <optgroup label="Swedish Cars">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
              </optgroup>
              <optgroup label="German Cars">
                <option value="mercedes">Mercedes</option>
                <option value="audi">Audi</option>
              </optgroup>
            </select>
          </div>
        </div>
      </div>
      <hr />
      <!-- Tab panes -->
      <div class="tab-content">
        <div
          id="tabhome1"
          class="container tab-pane active"
        >
          <br />

          <div>
            <ul class="list_pdf">
              @foreach ($pdfFilesAll as $pdf)
              <li>
                {{-- <span class="pdf_list_no">{{ $i }}.</span> --}}
                <span><i class="fas fa-folder-open"></i> {{ $pdf->topic->name }}</span>
                <br/>
                @php $i=1; @endphp
                @foreach($pdf->topic->subtopics as $sub)
                <span style="margin-left:30px;">
                       <input type="radio" id="pdf" name="choosePDFS" value="{{ $pdf->id }}"  />

                      <span style="width:300px;" >{{$i}} {{ $sub->sub_topic_name }}</span>
                         <a href="{{ url('uploads/'.$pdf->pdf_path) }}"><img src="{{ asset('wa/dashboard/homework/img/pdf.svg')}}" />
                       <br/>
                    
                </span></a>
                @php $i++; @endphp
                @endforeach
              </li>
             
              @endforeach
            </ul>
            <p id="choose_pdf_tree" class="text-danger"></p>
          
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
                    id="message"
                    rows="3"
                    placeholder="Add your comment"
                  ></textarea>
                </div>
                <p id="comment_pdf_tree" class="text-danger"></p>
                <div class="form-group">
                    <input type="number" value="10" style="width:30%" class="form-control"  id="points" placeholder="Points"/>
                </div>
              </div>
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
                  <span class="checkmark"></span>
                  <span class="add_text"
                    >Selected Students</span
                  >
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
        <div
          id="tabhome2"
          class="container tab-pane fade"
        >
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
                  <span class="text-muted">(You can upload *pdf files only, maximum file size is 10MB.)</span>
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
                <div class="form-group">
                  <input type="number" style="width:30%" class="form-control" id="pointsPDF" placeholder="Points"/>
              </div>
              </div>
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
                <!-- Button trigger modal -->
                <button
                  type="button"
                  class="btn btn-primary"
                  data-toggle="modal"
                  data-target="#exampleModal"
                >
                 Students List
                </button>

                <!-- Modal -->
                <div
                  class="modal fade"
                  id="exampleModal"
                  tabindex="-1"
                  role="dialog"
                  aria-labelledby="exampleModalLabel"
                  aria-hidden="true"
                >
                  <div
                    class="modal-dialog"
                    role="document"
                  >
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5
                          class="modal-title"
                          id="exampleModalLabel"
                        >
                          Student List for the session
                        </h5>
                        <button
                          type="button"
                          class="close"
                          data-dismiss="modal"
                          aria-label="Close"
                        >
                          <span aria-hidden="true"
                            >&times;</span
                          >
                        </button>
                      </div>
                      <div
                        class="
                          modal-body
                          table_modal_body
                        "
                      >
                        <!-- DataTales Example -->
                        <table
                          class="table table-bordered"
                        >
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Student Name</th>
                              <th scope="col">year</th>
                              <th scope="col">Session Name</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($students as $student)
                            <tr>
                              <th scope="row">
                                <label class="container">
                                  <input
                                    type="checkbox"
                                    checked="checked"
                                  />
                                  <span
                                    class="checkmark"
                                  ></span>
                                </label>
                              </th>
                              <td>{{ $student->name }}</td>
                              <td>{{  $session->batch->classmaster->name }}</td>
                              <td>{{ $session->name }}</td>
                            </tr>
                           @php $i++; @endphp
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                      <div class="modal-footer">
                        <button
                          class="btn btn-secondary"
                          data-dismiss="modal"
                        >
                          Close
                        </button>
                        <button
                          type="button"
                          class="btn share_cta" style="width:120px;"
                        >
                          Save
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                  <button class="btn share_cta" id="saveUploadPDFHomeWork">
                    Share
                  </button>  
                 {{-- <button class="btn share_cta" id="saveAsssignHomework">
                  Share
                </button>  --}}
              </div>
            </div>
          </div>
        </div>
        <div
          id="tabhome3"
          class="container tab-pane fade"
        >
          <br />
          <h3>Menu 2</h3>
          <p>
            Sed ut perspiciatis unde omnis iste natus
            error sit voluptatem accusantium doloremque
            laudantium, totam rem aperiam.
          </p>
        </div>
      </div>
    </div>
  </div>
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
            <sapn class="arrow-right"
              ><i class="fa fa-angle-left" aria-hidden="true"></i></sapn
            ><span>{{ $session->batch->classSettings->name }}</span>
          </a>
          

          <div class="row">
            <div class="col-lg-4">
              <div class="">
                <ul class="nav nav-pills nav-fill navtop side_tab">
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
              <form method="POST" action="">
                @csrf
              <div class="tab-content">
                <div class="d-flex justify-content-between mt-4"></div>
                <div class="tab-pane active" role="tabpanel" id="menu1">
                  <div class="card">
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
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div><p class="session_no">{{ $session->name }}</p></div>
                        <div class="d-flex justify-content-between">
                          <div class="pr-5">
                            <p class="seat_pera">Total Seats</p>
                            <p class="seat_no">{{ $session->batch->no_of_seats }}</p>
                          </div>
                          <div>
                            <p class="start_date">Starts in</p>
                            <p class="start_timer">00:08:55</p>
                          </div>
                        </div>
                      </div>
                      <div><p class="batch_name">{{ $session->batch->classSettings->name }}</p></div>
                      <hr />
                      <div class="title_session">Students</div>
                      @php $i=1; @endphp
                      @foreach ($students as $student)
                      <div
                      class="
                        border
                        card_tab
                        d-flex
                        justify-content-between
                        pt-2
                        mb-3
                      "
                    >
                      <div><p class="sr_no">{{ $i }}.</p></div>
                      <div>
                        <p class="card_pera">{{ $student->name }}</p>
                      </div>
                      <div><p class="card_pera">{{  $session->batch->classmaster->name }}</p></div>
                      {{-- <div>
                        <p class="dot_block">
                          <span class="dot"></span>
                        </p>
                      </div> --}}
                    </div>

                     @php $i++; @endphp
                      @endforeach

                      <hr />
                      {{-- <div class="card">
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
                              name="comment"
                            ></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex mt-4">
                        <div class="slt_point">Select Points</div>
                        <div class="slt_dropdown">
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
                          <input class="form-control" type="number" name="points">
                        </div>
                      </div>
                      <hr /> --}}
                      <div>
                        <div class="share_block">
                          <label class="container">
                            <input type="checkbox" checked="checked" />
                            <span class="checkmark"></span>
                            <span class="add_text">Select to All</span>
                          </label>
                          <label class="container">
                            <input type="checkbox" checked="checked" />
                            <span class="checkmark"></span>
                            <span class="add_text"
                              >Selected Students</span
                            >
                          </label>
                        </div>
                        <div>
                          <button class="btn share_cta">Share</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
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
                              href="#tabhome1"
                              >PDF</a
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
                            @include('homework._pdf_list')
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
                                  id="message"
                                  rows="3"
                                  placeholder="Add your comment"
                                ></textarea>
                              </div>
                            </div>
                          </div>
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
                              <button class="btn share_cta">
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
                        <div class="file_upload">
                          <label class="file">
                            <input
                              type="file"
                              id="file"
                              aria-label="example.pdf"
                            />
                            <span class="file-custom"></span>
                          </label>
                        </div>

                        <div>
                          <ul class="list_pdf">
                            <li>
                              <span class="pdf_list_no">1.</span>
                              <span>Lorem ipsum dolor sit amet-</span>
                              <span><img src="{{ asset('wa/dashboard/homework/img/pdf.svg')}}" /></span>
                            </li>
                            <li>
                              <span class="pdf_list_no">1.</span>
                              <span>Lorem ipsum dolor sit amet-</span>
                              <span><img src="{{ asset('wa/dashboard/homework/img/pdf.svg')}}" /></span>
                            </li>
                            <li>
                              <span class="pdf_list_no">1.</span>
                              <span>Lorem ipsum dolor sit amet-</span>
                              <span><img src="{{ asset('wa/dashboard/homework/img/pdf.svg')}}" /></span>
                            </li>
                            <li>
                              <span class="pdf_list_no">1.</span>
                              <span>Lorem ipsum dolor sit amet-</span>
                              <span><img src="{{ asset('wa/dashboard/homework/img/pdf.svg')}}" /></span>
                            </li>
                            <li>
                              <span class="pdf_list_no">1.</span>
                              <span>Lorem ipsum dolor sit amet-</span>
                              <span><img src="{{ asset('wa/dashboard/homework/img/pdf.svg')}}" /></span>
                            </li>
                            <li>
                              <span class="pdf_list_no">1.</span>
                              <span>Lorem ipsum dolor sit amet-</span>
                              <span><img src="{{ asset('wa/dashboard/homework/img/pdf.svg')}}" /></span>
                            </li>
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
                                  id="message"
                                  rows="3"
                                  placeholder="Add your comment"
                                ></textarea>
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
                                Launch demo modal
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
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Handle</th>
                                          </tr>
                                        </thead>
                                        <tbody>
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
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                          </tr>
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
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                          </tr>
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
                                            <td colspan="2">
                                              Larry the Bird
                                            </td>
                                            <td>@twitter</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                    <div class="modal-footer">
                                      <button
                                        class="save_btn"
                                        data-dismiss="modal"
                                      >
                                        Close
                                      </button>
                                      <button
                                        type="button"
                                        class="save_change_btn"
                                      >
                                        Save changes
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <button class="btn share_cta">
                                Share
                              </button>
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
                <div class="tab-pane" role="tabpanel" id="menu3">
                  <div class="card shadow mt-3">
                    <div
                      class="
                        card-body card_left_border
                        border_left_color4
                      "
                    >
                      <div class="subject_edit">
                        <div class="subject_practis">
                          <p class="subject">Math Practice ssssss</p>
                          <p class="time_pera">
                            <span>23 Jan,</span
                            ><span>04:00pm - 05:00pm</span>
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
                          <img
                            src="{{ asset('wa/dashboard/homework/img/delete.svg')}}"
                            width="20"
                            height="20"
                          />
                        </div>
                        <div class="edit_icon">
                          <img
                            src="{{ asset('wa/dashboard/homework/img/edit.svg')}}"
                            width="20"
                            height="20"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" role="tabpanel" id="menu4">
                  <div class="card shadow mt-3">
                    <div
                      class="
                        card-body card_left_border
                        border_left_color4
                      "
                    >
                      <div class="subject_edit">
                        <div class="subject_practis">
                          <p class="subject">Math Practice gggggg</p>
                          <p class="time_pera">
                            <span>23 Jan,</span
                            ><span>04:00pm - 05:00pm</span>
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
                          <img
                            src="{{ asset('wa/dashboard/homework/img/delete.svg')}}"
                            width="20"
                            height="20"
                          />
                        </div>
                        <div class="edit_icon">
                          <img
                            src="{{ asset('wa/dashboard/homework/img/edit.svg')}}"
                            width="20"
                            height="20"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" role="tabpanel" id="menu5">
                  <div class="card shadow mt-3">
                    <div
                      class="
                        card-body card_left_border
                        border_left_color4
                      "
                    >
                      <div class="subject_edit">
                        <div class="subject_practis">
                          <p class="subject">Math Practice gggggg</p>
                          <p class="time_pera">
                            <span>23 Jan,</span
                            ><span>04:00pm - 05:00pm</span>
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
                          <img
                            src="{{ asset('wa/dashboard/homework/img/delete.svg')}}"
                            width="20"
                            height="20"
                          />
                        </div>
                        <div class="edit_icon">
                          <img
                            src="{{ asset('wa/dashboard/homework/img/edit.svg')}}"
                            width="20"
                            height="20"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
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

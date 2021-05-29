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
     {{-- model for all student join --}}
     <div>
      <!-- Button trigger modal -->
      <p class="joined" data-toggle="modal" data-target="#exampleModal">
        {{ $students->count() }} Joined
      </p>
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
                  @php $i=1; @endphp
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
            {{-- <div class="modal-footer">
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
            </div> --}}
          </div>
        </div>
      </div>
    </div>
     {{-- end model for all student join  --}}
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
      {{-- for filter --}}
      {{-- <div class="d-flex justify-content-between">
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
      </div> --}}
    </div>
    <hr />
    <!-- Tab panes -->
    <div class="tab-content">
      <div
        id="tabhome1"
        class="container tab-pane active"
      >
        <br />
        {{-- choose pdf --}}
        @include('homework._assign_homework._choose_pdf')
        {{-- /choose pdf --}}
      </div>
      <div
        id="tabhome2"
        class="container tab-pane fade"
      >
        @include('homework._assign_homework._upload_file')
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
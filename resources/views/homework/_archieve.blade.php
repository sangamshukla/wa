<div class="tab-pane" role="tabpanel" id="menu3">
  <div class="card shadow mt-3">
{{--  --}}
<div class="card">
<div class="session_data_block archive">
  <div class=" archiv_block">
    <div>
      <p class="session_title">Session Date</p>
      <p class="session_date">{{ $session->start_date_time->format('d/m/y')}}</p>
    </div>
    <div>
      <p class="session_title">Session Time</p>
      <p class="session_date">
        {{ $session->start_date_time->format('h:i:A')}}
      </p>
    </div>
    <div>
      <p class="session_title">Teachers Name</p>
      <p class="session_date">{{$session->batch->assignteacher->name}}</p>
    </div>
    <div>
      <p class="session_title">Class</p>
      <p class="session_date">{{$session->batch->classmaster->name}}</p>
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
                {{-- for loop for all sessions in current batch --}}
                @foreach ($allSessions as $session )   
                <div class="card mb-3">
                  <div class="card-header">
                    <a class="card-link text-dark" data-toggle="collapse" href="#collapse{{ $session->id }}"><span class="float-right"></span>
                      <!-- <h6>Collapsible Group Item #1</h6> -->
                      <div class="accordian_card_display">
                        <div>1.</div>
                        <div>{{ $session->name }}</div>
                        <div>{{ $session->start_date_time->format('d/m/y')}}</div>
                        <div>{{ $session->batch->classmaster->name}}</div>
                        <div>{{ $session->students->count() }} Students</div>
                        <div>02 Submission</div>
                      </div>
                    </a>
                  </div>
                  <div id="collapse{{$session->id}}" class="collapse {{ $loop->index == 0 ? 'show' : 'hide' }}" data-parent="#accordion">
                    <div class="card-body">
                      {{-- session -> students --}}
                      @foreach($session->students as $student)
                      <div class="accordian_card_inner_block">
                        <div class="inner_nameblock">{{ $student->name}} </div>
                        <div class="inner_check_block"><img src="{{ asset('wa/teacherdashboard/img/inactive-check.svg')}}"></div>
                        <div class="inner_reminder_block"><a href="#">Send Reminder</a></div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                </div>
                {{-- for loop for all sessions in current batch --}}
                @endforeach
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
{{--  --}}
    </div>
  </div>

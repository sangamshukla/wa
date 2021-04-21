
                          <div class="subject_edit">
                            <div class="subject_practis">
                              <p class="sub_subject">Class Name</p>
                              
                              <p class="subject">{{ $batch->classSettings->name }}</p>
                              <p class="sub_subject">Session & topic</p>

                              @foreach($batch->batchSession as $session)
                                @foreach($session->topics as $t)

                                  {{ $session->name.'-'.$t->topic->name.',' }}   
                                @endforeach                                    
                                    @endforeach
                              <p class="time_pera">
                                {{-- <span>{{ $batch->batch_start_date->format('Y-m-d')}},</span --}}
                                {{-- ><span>04:00pm - 05:00pm</span> --}}
                              </p>
                            </div>
                            <div class="starttime_block">
                              <p class="sub_subject">Start</p>
                              <p class="green_text">
                                <a target="_blank" href="{{ $batch->zoom->meeting_start_url ?? '' }}" class="green_text">Start Sessions</a>
                              </p>
                            </div>
                            <div class="class_block">
                              <p class="sub_subject">Teacher</p>
                              <p class="blue_text">{{ $batch->assignteacher->name }}</p>
                            </div>
                            {{-- <div class="class_block">
                              <p class="sub_subject">Subject</p>
                              <p class="blue_text">Maths</p>
                            </div> --}}
                            <div class="class_block">
                              <p class="sub_subject">Time</p>
                              <p class="blue_text">{{ $batch->batch_start_date->format('Y-m-d')}}</p>
                            </div>
                            {{-- <div class="class_mb">
                              <p class="sub_subject">Students</p>
                              <p class="blue_text">30</p>
                            </div> --}}
                            {{-- <div class="delite_icon">
                              <img
                                src="{{asset('wa/teacherdashboard/img/delete.svg')}}"
                                width="20"
                                height="20"
                              />
                            </div> --}}
                            {{-- <div class="edit_icon">
                              <img src="{{asset('wa/teacherdashboard/img/edit.svg')}}" width="20" height="20" />
                            </div> --}}
                          </div>

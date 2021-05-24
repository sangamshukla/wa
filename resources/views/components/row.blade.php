
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
                            <div class="class_block">
                              <p class="sub_subject">Time</p>
                              <p class="blue_text">{{ $batch->batch_start_date->format('Y-m-d')}}</p>
                            </div>
                          </div>

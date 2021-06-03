              <link href="{{asset('wa/dashboard/css/contentpage.css')}}" rel="stylesheet" />
              <div class="container-fluid" style="margin-top: 90px;">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800 session_heading">My Session</h1>

                    </div>
                    <!-- image block -->
                    <div class="row">
                        <div class="col-xl-8 col-lg-7 text-center">
                            <img src="{{asset('wa/dashboard/img/banner.svg')}}" class="session_img mt-4">
                            <p class="mt-5 session_buy_subheading">There are no Sessions available</p>
                            <p class="session_buy_pera"> You have to buy a cource to start the activity here</p>
                            <div>
                                <button class="btn session_buycta ">Buy now</button>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5">
                            <div class="profile_details card py-4 px-4 text-center">
                               <div class="profile">
                                <div class="profile_icon"><img src="{{asset('wa/dashboard/img/user.png')}}"></div>
                                <p class="name mb-1 p-3">{{ auth()->user()->name }}</p>
                                <p class="class_section"><span>class:</span><span>{{ auth()->user()->student->classmaster->name }}</span></p>
                                <a href="#" class="profile"><span>view Profile</span></a>
                               </div>
                               <div class="border_bottom_dotted"></div>
                            </div>
                             <!-- Announcements -->
                            <div class="card shadow mb-4">
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold announce">Announcements</h6>
                                    <a href="#" class=" close close_card"><span>X</span></a>

                                </div>
                                <div class="card-body">

                                    <div class="mt-4">
                                        <p class="mr-2 list_announce">
                                            <span>https://www.w3schools.com/cssref</span>
                                            <span>go</span>
                                        </p>
                                        <p class="mr-2 list_announce">
                                            <span>https://www.w3schools.com/cssref</span>
                                            <span>go</span>
                                        </p>
                                        <p class="mr-2 list_announce">
                                            <span>https://www.w3schools.com/cssref</span>
                                            <span>go</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Content Row -->

                    <!-- subject card Row -->
                    <section style="background:#fff; padding: 20px;">
                        <div class="row">
                            <div class="col-lg-12 mb-4">
                                <div class="card mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold cource_class_tile">Other Available Cources for Class <span>9</span>th</span></h6>
                                    </div>
                                </div>
                                <div class="row">
                                    @forelse ($batches as $batch)
                                        <div class="col-lg-3 mb-4" style="cursor:pointer;" onClick="(function(){
                        window.location.href = '/student-details/{{ $batch->id }}';
                    })();return false;" class="col-md-3 filter_box filter {{ $batch->classmaster->name == 'Year 1' ? 'class9' : ($batch->classmaster->name == 'Year 2' ? 'class10' : 'class11') }}">
                                         <div class="card subject1">
                                            <div class="subject_img_block">
                                                @switch($batch->subject->name)
                                                    @case("English")
                                                        <img style="width:100%; border-radius:10px;" src="{{ asset('frontend/assets/English/English.jpg') }}" alt=" " class="subject_img">
                                                        @break
                                                    @case("Maths")
                                                        <img  style="width:100%; border-radius:10px;" src="{{ asset('frontend/assets/Maths/Math.jpg') }}" alt="" class="subject_img">
                                                        @break
                                                    @case("Physics")
                                                        <img  style="width:100% border-radius:10px;;" src="{{ asset('frontend/assets/Physics/Physics.jpg') }}" alt="" class="subject_img">
                                                        @break
                                                        @case('Chemistry')
                                                        <img src="{{asset('wa/dashboard/img/card-cover.png')}}" class="subject_img">

                                                    @break
                                                    @default
                                                    <img src="{{asset('wa/dashboard/img/card-cover.png')}}" class="subject_img">
                                                @endswitch
                                            </div>
                                            <div class="card-body">
                                                <div class="subject_name">
                                                    <p>{{$batch->classSettings->name}}</p>
                                                        <p>{{$batch->subject->name}}</p>
                                                </div>
                                                <div class="card_details d-flex justify-content-center">
                                                    <div class="seat_block pr-3">
                                                        <p>No Of Seats</p>
                                                        <p>{{$batch->no_of_seats}}</p>
                                                    </div>
                                                    <div class="border_div pl-3 "></div>
                                                    <div class="date_block">
                                                        <p>Sessions</p>
                                                        <p>{{count($batch->batchSession)}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="view_detail_block d-flex justify-content-between pb-3">
                                                <a href="#" class="view_detail pl-3">
                                                    View details
                                                </a>
                                                <p class="price_card price_bg1">
                                                    <strong>£</strong> {{$batch->batch_price_per_session}}*
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    @empty
                                        <p>No sessions for you</p>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

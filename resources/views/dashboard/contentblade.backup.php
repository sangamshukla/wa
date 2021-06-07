<div class="container-fluid" style="margin-top: 90px">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 my_session">My Session</h1>
    </div>
    <link rel="stylesheet" href="{{ asset('wa/welcome.css') }}">
    <!-- image block -->
    <div class="row">
        @include('_form.success')
        <div class="col-xl-8 col-lg-7 text-center">
            <img src="{{asset('wa/dashboard/img/banner.svg')}}" class="session_img mt-4">
            <p class="mt-5 session_buy_subheading">There are no Sessions available</p>
            <p class="session_buy_pera"> You have to buy a course to start the activity here</p>
            <div>

                {{-- <button class="btn session_buycta ">Buy now</button> --}}
                {{-- <button class="btn session_buycta btn btn_block text-capitalize my-2 my-sm-0"> --}}
                <a href="{{route('packages.details')}}" class="btn btn_block bg-primary text-white text-capitalize px-3 py-2 my-2 my-sm-0">Buy now</a>
                {{-- </button> --}}
            </div>
        </div>
        <div class="col-xl-4 col-lg-5">
            <div class="profile_details card py-4 px-4 text-center">
                <div class="profile">
                    <div class="profile_icon"><img src="{{asset('wa/dashboard/img/user.png')}}"></div>
                    <p class="name mb-1">{{ auth()->user()->name }}</p>
                    <p class="class_section"><span>class:</span><span>{{ auth()->user()->student->classmaster->name }}</span></p>
                    <a href="#" class="profile"><span>view Profile</span></a>
                </div>
                {{-- <div class="border_bottom_dotted"></div> --}}
                <div class="row">
                    {{-- <div class="col-md-6 col-xs-16">
                <p class="wallet_heading">Wallet balance</p>
                   <a href="#" class="balance"><p><span>+</span><span>Add Balance</span></p></a>
               </div>
               <div class="col-md-6 col-xs-16">

                <p class="wallet_balance"><span>Wallet balance:</span><strong>&nbsp;£ 1500</strong></p>
                </div> --}}
                </div>
            </div>
            <!-- Announcements -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
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
    <section class="card_package">
        <div class="container-fulid">
            <div class="">
                <div class="card-body">
                    <table>
                        <div class="row mt-4">
                            @php $i=1 @endphp
                            @foreach($batches as $batch)
                            <div style="cursor:pointer;" onClick="(function(){
                        window.location.href = '/student-details/{{ $batch->id }}';
                    })();return false;" class="col-md-3 filter_box filter {{ $batch->classmaster->name == 'Year 1' ? 'class9' : ($batch->classmaster->name == 'Year 2' ? 'class10' : 'class11') }}">
                                <div class="single-district card{{ $i }}">
                                    <div class="card_img mb-3">
                                        @if($batch->subject->name == 'English')
                                        <img style="width:100%; border-radius:10px;" src="{{ asset('frontend/assets/English/English.jpg') }}" alt="">
                                        @endif
                                        @if($batch->subject->name == 'Maths')
                                        <img style="width:100%; border-radius:10px;" src="{{ asset('frontend/assets/Maths/Math.jpg') }}" alt="">
                                        @endif
                                        @if($batch->subject->name == 'Physics')
                                        <img style="width:100%; border-radius:10px;" src="{{ asset('frontend/assets/card-cover.png') }}" alt="">
                                        @endif
                                        @if($batch->subject->name == 'Chemistry')
                                        <img style="width:100%; border-radius:10px;" src="{{ asset('frontend/assets/card-cover.png') }}" alt="">
                                        @endif
                                        {{-- <img src="{{ asset('wa/assets/img/card-cover.png') }}"> --}}
                                    </div>
                                    <div class="card_block_info pl-3 pr-3">
                                        <div class="card_info">
                                            <p>{{ $batch->classSettings->name }}</p>
                                            <p>{{ $batch->subject->name }}</p>
                                        </div>
                                        <div class="card_details">
                                            <div class="seat_block pr-3">
                                                <p>No Of Seats</p>
                                                <p>{{ $batch->no_of_seats }}</p>
                                            </div>
                                            {{-- <div class="border_div pl-3 "></div>
                                    <div class="date_block">
                                        <p>No Of Seats</p>
                                        <p>32</p>
                                    </div> --}}
                                        </div>
                                        <div class="class_section">
                                            <div class="class_type">class type</div>
                                            <div>
                                                <span class="online">
                                                    {{ $batch->status == 1 ? 'Online' : 'Offline' }}
                                                </span>
                                                <span class="dot{{ $batch->status == 1 ? '' : '-prime' }}">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="view_detail_block pb-3">
                                        <a href="{{ url('/student-details', $batch->id)}}" class="view_detail">
                                            View details
                                        </a>
                                        {{-- @php $i = 1 @endphp --}}
                                        <a href="{{ url('/student-details', $batch->id)}}" class="price_card price_bg{{ $i }}">
                                            &pound; {{ $batch->batch_price_per_session }}
                                        </a>
                                        {{-- @php i++ @endphp --}}
                                    </div>
                                </div>
                                {{-- <a> --}}

                            </div>
                            @php $i++ @endphp
                            @endforeach
                            <td colspan="3"></td>
                    </table>
                    <div class="row">
                        <div class="col-md-12">
                            <div style="margin-top: 2rem; float:right;  border-color: coral;">{{ $batches->links() }}</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
</div>
</div>
</section>
</div>

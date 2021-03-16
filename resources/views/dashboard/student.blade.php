@extends('layouts.student')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">My Session</h1>
</div>
<!-- image block -->
<div class="row">
    <div class="col-xl-8 col-lg-7 text-center">
        <img src="/wa/dashboard/img/banner.svg" class="session_img mt-4">
        <p class="mt-5 session_buy_subheading">There are no Sessions available</p>
        <p class="session_buy_pera"> You have to buy a cource to start the activity here</p>
        <div>
            <button class="btn session_buycta ">Buy now</button>
        </div>
    </div>
    <div class="col-xl-4 col-lg-5">
        <div class="profile_details card py-4 px-4 text-center">
           <div class="profile">
            <div class="profile_icon"><img src="/wa/dashboard/img/user.png"></div>
            <p class="name mb-1">John Paul</p>
            <p class="class_section"><span>class:</span><span>XI</span></p>
            <a href="#" class="profile"><span>view Profile</span></a>
           </div>
           <div class="border_bottom_dotted"></div>
           <div class="row">
               <div class="col-md-6 col-xs-16">
                <p class="wallet_heading">Wallet balance</p>
                   <a href="#" class="balance"><p><span>+</span><span>Add Balance</span></p></a>
               </div>
               <div class="col-md-6 col-xs-16">
               
                <p class="wallet_balance"><span>Wallet balance:</span><strong>&nbsp;£ 1500</strong></p>
                </div>
           </div>
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
                @foreach($students as $student)
                <div class="col-lg-3 mb-4">
                    <div class="card subject1">
                        <div class="subject_img_block">
                            {{-- <img src="/wa/dashboard/img/card-cover.png" class="subject_img"> --}}
                            @if($student->subject->name == 'English')
                            <img src="{{ asset('frontend/assets/English/English.jpg') }}" alt="">
                          @endif
                          @if($student->subject->name == 'Maths')
                                    {{-- <img src="{{ asset('frontend/assets/Maths/Maths.jpg') }}" alt=""> --}}
                                    <img src="{{ asset('frontend/assets/Maths/Math.jpg') }}" alt="">
                                @endif
                                @if($student->subject->name == 'Physics')
                                    <img src="{{ asset('frontend/assets/Physics/Physics.jpg') }}" alt="">
                                @endif
                                @if($student->subject->name == 'Chemistry')
                                    <img src="{{ asset('frontend/assets/card-cover.png') }}" alt="">
                                @endif
                        </div>
                        <div class="card-body">
                            <div class="subject_name">
                                <p>{{ $student->classSettings->name }} </p>
                                <p>{{ $student->subject->name }}</p>
                            </div>
                            <div class="card_details d-flex justify-content-center">
                                <div class="seat_block pr-3">
                                    <p>No Of Seats</p>
                                    <p>{{ $student->no_of_seats }}</p>
                                </div>
                                {{-- <div class="border_div pl-3 "></div> --}}
                                {{-- <div class="date_block">
                                    <p>No Of Seats</p>
                                    <p>32</p>
                                </div> --}}
                            </div>
                        </div>
                        <div class="view_detail_block d-flex justify-content-between pb-3">
                            <a href="#" class="view_detail pl-3">
                                View details
                            </a>
                            <p class="price_card price_bg1">
                                <strong>£</strong> {{ $student->batch_price_per_session }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</section> 
@endsection

@extends('layouts.operation_dashboard')
@section('content')
{{-- <link href="{{asset('wa/operationdashboard/css/session.css')}}" rel="stylesheet" /> --}}

            <div style="margin-top: 90px;" class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1  class="h3 mb-0 text-gray-800 session_heading">Batch List</h1>
            </div>

            <section class="card_package">
                <div class="container-fulid">
                    {{-- <div class="cource_heading">Batch List</div> --}}
                        <div class="card-body">
                            <div class="row mt-4">
                                <div class="col-md-3 filter_box filter class9">
                                    <div class="single-district card1">
                                        <div class="card_img mb-3">
                                            <img src="{{ asset('wa/operationdashboard/img/card-cover.png')}}">
                                        </div>
                                        <div class="card_block_info pl-3 pr-3">
                                            <div class="card_info">
                                                <p>Joahna Paul</p>
                                                <p>GCSC final Math Booster</p>
                                            </div>
                                            <div class="card_details">
                                                <div class="seat_block pr-3">
                                                    <p>No Of Seats</p>
                                                    <p>32</p>
                                                </div>
                                                <div class="border_div pl-3 "></div>
                                                <div class="date_block">
                                                    <p>No Of Seats</p>
                                                    <p>32</p>
                                                </div>
                                            </div>
                                            <div class="class_section">
                                                <div class="class_type">class type</div>
                                                <div><span class="online">online</span><span class="dot"></span></div>

                                            </div>
                                        </div>
                                        <div class="view_detail_block pb-3">
                                            <a href="#" class="view_detail">
                                                View details
                                            </a>
                                            <a href="viewdetail.html" class="price_card price_bg1">
                                                £ 150*
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 filter_box filter class9">
                                    <div class="single-district card2">
                                        <div class="card_img mb-3">
                                            <img src="{{ asset('wa/operationdashboard/img/card-cover.png')}}">
                                        </div>
                                        <div class="card_block_info pl-3 pr-3">
                                            <div class="card_info">
                                                <p>Joahna Paul</p>
                                                <p>GCSC final Math Booster</p>
                                            </div>
                                            <div class="card_details">
                                                <div class="seat_block pr-3">
                                                    <p>No Of Seats</p>
                                                    <p>32</p>
                                                </div>
                                                <div class="border_div pl-3 "></div>
                                                <div class="date_block">
                                                    <p>No Of Seats</p>
                                                    <p>32</p>
                                                </div>
                                            </div>
                                            <div class="class_section">
                                                <div class="class_type">class type</div>
                                                <div><span class="online">online</span><span class="dot"></span></div>

                                            </div>
                                        </div>
                                        <div class="view_detail_block pb-3">
                                            <a href="#" class="view_detail">
                                                View details
                                            </a>
                                            <a href="viewdetail.html" class="price_card price_bg2">
                                                £ 150*
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 filter_box filter class10">
                                    <div class="single-district card3">
                                        <div class="card_img mb-3">
                                            <img src="{{ asset('wa/operationdashboard/img/card-cover.png')}}">
                                        </div>
                                        <div class="card_block_info pl-3 pr-3">
                                            <div class="card_info">
                                                <p>Joahna Paul</p>
                                                <p>GCSC final Math Booster</p>
                                            </div>
                                            <div class="card_details">
                                                <div class="seat_block pr-3">
                                                    <p>No Of Seats</p>
                                                    <p>32</p>
                                                </div>
                                                <div class="border_div pl-3 "></div>
                                                <div class="date_block">
                                                    <p>No Of Seats</p>
                                                    <p>32</p>
                                                </div>
                                            </div>
                                            <div class="class_section">
                                                <div class="class_type">class type</div>
                                                <div><span class="online">online</span><span class="dot"></span></div>

                                            </div>
                                        </div>
                                        <div class="view_detail_block pb-3">
                                            <a href="#" class="view_detail">
                                                View details
                                            </a>
                                            <a href="viewdetail.html" class="price_card price_bg3">
                                                £ 150*
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 filter_box filter class10">
                                    <div class="single-district card4">
                                        <div class="card_img mb-3">
                                            <img src="{{ asset('wa/operationdashboard/img/card-cover.png')}}">
                                        </div>
                                        <div class="card_block_info pl-3 pr-3">
                                            <div class="card_info">
                                                <p>Joahna Paul</p>
                                                <p>GCSC final Math Booster</p>
                                            </div>
                                            <div class="card_details">
                                                <div class="seat_block pr-3">
                                                    <p>No Of Seats</p>
                                                    <p>32</p>
                                                </div>
                                                <div class="border_div pl-3 "></div>
                                                <div class="date_block">
                                                    <p>No Of Seats</p>
                                                    <p>32</p>
                                                </div>
                                            </div>
                                            <div class="class_section">
                                                <div class="class_type">class type</div>
                                                <div><span class="online">online</span><span class="dot"></span></div>

                                            </div>
                                        </div>
                                        <div class="view_detail_block pb-3">
                                            <a href="#" class="view_detail">
                                                View details
                                            </a>
                                            <a href="viewdetail.html" class="price_card price_bg4">
                                                £ 150*
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 filter_box filter class11">
                                    <div class="single-district card5">
                                        <div class="card_img mb-3">
                                            <img src="{{ asset('wa/operationdashboard/img/card-cover.png')}}">
                                        </div>
                                        <div class="card_block_info pl-3 pr-3">
                                            <div class="card_info">
                                                <p>Joahna Paul</p>
                                                <p>GCSC final Math Booster</p>
                                            </div>
                                            <div class="card_details">
                                                <div class="seat_block pr-3">
                                                    <p>No Of Seats</p>
                                                    <p>32</p>
                                                </div>
                                                <div class="border_div pl-3 "></div>
                                                <div class="date_block">
                                                    <p>No Of Seats</p>
                                                    <p>32</p>
                                                </div>
                                            </div>
                                            <div class="class_section">
                                                <div class="class_type">class type</div>
                                                <div><span class="online">online</span><span class="dot"></span></div>

                                            </div>
                                        </div>
                                        <div class="view_detail_block pb-3">
                                            <a href="#" class="view_detail">
                                                View details
                                            </a>
                                            <a href="viewdetail.html" class="price_card price_bg5">
                                                £ 150*
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 filter_box filter class11">
                                    <div class="single-district card8">
                                        <div class="card_img mb-3">
                                            <img src="{{ asset('wa/operationdashboard/img/card-cover.png')}}">
                                        </div>
                                        <div class="card_block_info pl-3 pr-3">
                                            <div class="card_info">
                                                <p>Joahna Paul</p>
                                                <p>GCSC final Math Booster</p>
                                            </div>
                                            <div class="card_details">
                                                <div class="seat_block pr-3">
                                                    <p>No Of Seats</p>
                                                    <p>32</p>
                                                </div>
                                                <div class="border_div pl-3 "></div>
                                                <div class="date_block">
                                                    <p>No Of Seats</p>
                                                    <p>32</p>
                                                </div>
                                            </div>
                                            <div class="class_section">
                                                <div class="class_type">class type</div>
                                                <div><span class="online">online</span><span class="dot"></span></div>

                                            </div>
                                        </div>
                                        <div class="view_detail_block pb-3">
                                            <a href="#" class="view_detail">
                                                View details
                                            </a>
                                            <a href="viewdetail.html" class="price_card price_bg6">
                                                £ 150*
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 filter_box filter class11">
                                    <div class="single-district card6">
                                        <div class="card_img mb-3">
                                            <img src="{{ asset('wa/operationdashboard/img/card-cover.png')}}">
                                        </div>
                                        <div class="card_block_info pl-3 pr-3">
                                            <div class="card_info">
                                                <p>Joahna Paul</p>
                                                <p>GCSC final Math Booster</p>
                                            </div>
                                            <div class="card_details">
                                                <div class="seat_block pr-3">
                                                    <p>No Of Seats</p>
                                                    <p>32</p>
                                                </div>
                                                <div class="border_div pl-3 "></div>
                                                <div class="date_block">
                                                    <p>No Of Seats</p>
                                                    <p>32</p>
                                                </div>
                                            </div>
                                            <div class="class_section">
                                                <div class="class_type">class type</div>
                                                <div><span class="online">online</span><span class="dot"></span></div>

                                            </div>
                                        </div>
                                        <div class="view_detail_block pb-3">
                                            <a href="#" class="view_detail">
                                                View details
                                            </a>
                                            <a href="viewdetail.html" class="price_card price_bg7">
                                                £ 150*
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 filter_box filter class11">
                                    <div class="single-district card7">
                                        <div class="card_img mb-3">
                                            <img src="{{ asset('wa/operationdashboard/img/card-cover.png')}}">
                                        </div>
                                        <div class="card_block_info pl-3 pr-3">
                                            <div class="card_info">
                                                <p>Joahna Paul</p>
                                                <p>GCSC final Math Booster</p>
                                            </div>
                                            <div class="card_details">
                                                <div class="seat_block pr-3">
                                                    <p>No Of Seats</p>
                                                    <p>32</p>
                                                </div>
                                                <div class="border_div pl-3 "></div>
                                                <div class="date_block">
                                                    <p>No Of Seats</p>
                                                    <p>32</p>
                                                </div>
                                            </div>
                                            <div class="class_section">
                                                <div class="class_type">class type</div>
                                                <div><span class="online">online</span><span class="dot"></span></div>

                                            </div>
                                        </div>
                                        <div class="view_detail_block pb-3">
                                            <a href="#" class="view_detail">
                                                View details
                                            </a>
                                            <a href="viewdetail.html" class="price_card price_bg8">
                                                £ 150*
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        {{-- </div> --}}
                    {{-- </div> --}}
            </section>
@endsection

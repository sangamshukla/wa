{{-- local --}}
@include('common.header')
@include('common.nav')


    <!-- subject cartsection -->
    <section class="math_booster">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="subject_heading mt-5">{{ Str::ucfirst($batch->classSettings->name) . ''  }}</div>
                    <div class="math_csc d-flex flex-sm-row flex-column justify-content-between mt-5">
                        <div class="subject_card">
                            <img src="{{ asset('wa/assets/img/card-cover.png') }}">
                        </div>
                        <div class="left_block">
                            {{-- <p class="sub_title mt-4">{{ Str::ucfirst($batch->classSettings->name) . '' .  Str::substr($batch->batch_start_date,0,-3) }}</p> --}}
                            <p class="name_section">{{ Str::ucfirst($batch->assignteacher->name) }}</p>
                           
                            <div class="card_details">
                                <div class="subject_detail pr-3">
                                    <p>No Of Seats</p>
                                    <p class="blue_cr">{{ $batch->no_of_seats }}</p>
                                </div>
                                <div class="border_left pl-3 "></div>
                                <div class="subject_detail pr-3">
                                    <p>No Of Sessions</p>
                                    <p class="blue_cr">{{ $batch->batchSession->count() }}</p>
                                </div>
                                <div class="border_left pl-3 "></div>
                                <div class="subject_detail pr-3">
                                    <p>Starts date</p>
                                    <p class="color_og">{{ $batch->batch_start_date->format('d M, Y') }}</p>
                                </div>
                            </div>
                           <div class="d-flex flex-sm-row flex-column mt-3"><p class="doler_text">£ {{ $batch->batch_price_per_session }}*</p><div class="buy_cta m-3">
                                <button class="btn btn_block text-capitalize add_cart_section my-2 my-sm-0" type="button">Add to Cart</button>
                                {{-- <form method="POST" action="{{ route('book.now') }}"> --}}
                                    {{-- @csrf --}}
                                    {{-- <input type="hidden"  name="batch_id" value="{{ $batch->id }}"> --}}
                                    <button class="btn btn_block text-capitalize buy_now_cta my-2 my-sm-0" type="submit">Book Now</button>
                                {{-- </form> --}}
                            </div></div>
                            <div class=" share_sectiond-flex flex-sm-row mt-5">
                                 <span class="share ml-3">Share</span>
                                    <span class="ml-3"><a href="#"><img src="{{ asset('wa/assets/img/sharefb.svg') }}"></a></span>
                                    <span class="ml-3"><a href="#"><img src="{{ asset('wa/assets/img/shareml.svg') }}"></a></span>
                                    <span class="ml-3"><a href="#"><img src="{{ asset('wa/assets/img/sharewh.svg') }}"></a></span>
                                    <span class="ml-3"><a href="#"><img src="{{ asset('wa/assets/img/sharetr.svg') }}"></a></span>
                            </div>
                           
                        </div>
                    </div>
                    <div class="session_section d-flex flex-sm-row flex-column justify-content-between">
                        <div class="left_section">
                            <div class="card_header">
                                <div class="card_heading">Sessions</div>
                                <div class="card_date">Year</div>
                                <div class="card_date">Date</div>
                                <div class="card_time">Time</div>
                                <!-- <div class="blank_div"></div> -->
                            </div>
                            @foreach($batch->batchSession as $session)
                                <div class="session_card">
                                    <div class="session_no">{{ $session->name }}</div>
                                    <div class="session_no">{{ $batch->classmaster->name }}</div>
                                    <div class="session_date">{{ $session->start_date_time->format('d M, Y') }}</div>
                                    <div class="session_time">{{ $session->start_date_time->format('h:i A') }}</div>
                                    <!-- <div class="blank_div"></div> -->
                                </div>
                            @endforeach

                        </div>
                        <div class="right_section mt-5">
                            <p class="learn_heading">What You Will Learn</p>
                           <div class="card-link-block">
                               Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's. Ipsum has been the industry's. 
                            </div>
                            <div class="card-link-block">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's. Ipsum has been the industry's. 
                             </div>
                             <div class="card-link-block">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's. Ipsum has been the industry's. 
                             </div>
                             <div class="card-link-block">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's. Ipsum has been the industry's. 
                             </div>
                             <div class="card-link-block">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's. Ipsum has been the industry's. 
                             </div>
                             <div class="card-link-block">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's. Ipsum has been the industry's. 
                             </div>

                        </div>
                    </div>
                    <div class="card_slider">
                        <div class="cource_title mt-3 mb-3">Courses you would like to buy</div>
                        <div class="swiper-container subject_card_block" id="swipercard">
                            <div class="swiper-wrapper">
                              <div class="swiper-slide card">
                                <div class="single-district card1 slid_card">
                                    <div class="card_img mb-3">
                                        <img src="{{ asset('wa/assets/img/card-cover.png') }}">
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
                                            <div><span class="online">online</span><span class="dot-prime"></span></div>
                                            
                                        </div>
                                    </div>
                                    <div class="view_detail_block pb-3">
                                        <a href="#" class="view_detail">
                                            View details
                                        </a>
                                        <a href="#" class="price_card">
                                            £ 150*
                                        </a>
                                    </div>
                                </div>
                              </div>
                              <div class="swiper-slide card">
                                <div class="single-district card1 slid_card">
                                    <div class="card_img mb-3">
                                        <img src="{{ asset('wa/assets/img/card-cover.png') }}">
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
                                            <div><span class="online">online</span><span class="dot-prime"></span></div>
                                            
                                        </div>
                                    </div>
                                    <div class="view_detail_block pb-3">
                                        <a href="#" class="view_detail">
                                            View details
                                        </a>
                                        <a href="#" class="price_card">
                                            £ 150*
                                        </a>
                                    </div>
                                </div>
                              </div>
                              <div class="swiper-slide card">
                                <div class="single-district card1 slid_card">
                                    <div class="card_img mb-3">
                                        <img src="{{ asset('wa/assets/img/card-cover.png') }}">
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
                                            <div><span class="online">online</span><span class="dot-prime"></span></div>
                                            
                                        </div>
                                    </div>
                                    <div class="view_detail_block pb-3">
                                        <a href="#" class="view_detail">
                                            View details
                                        </a>
                                        <a href="#" class="price_card">
                                            £ 150*
                                        </a>
                                    </div>
                                </div>
                              </div>
                              <div class="swiper-slide card">
                                <div class="single-district card1 slid_card">
                                    <div class="card_img mb-3">
                                        <img src="{{ asset('wa/assets/img/card-cover.png') }}">
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
                                            <div><span class="online">online</span><span class="dot-prime"></span></div>
                                            
                                        </div>
                                    </div>
                                    <div class="view_detail_block pb-3">
                                        <a href="#" class="view_detail">
                                            View details
                                        </a>
                                        <a href="#" class="price_card">
                                            £ 150*
                                        </a>
                                    </div>
                                </div>
                              </div>
                              <div class="swiper-slide card">
                                  <div class="single-district card1 slid_card">
                                <div class="card_img mb-3">
                                    <img src="{{ asset('wa/assets/img/card-cover.png') }}">
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
                                        <div><span class="online">online</span><span class="dot-prime"></span></div>
                                        
                                    </div>
                                </div>
                                <div class="view_detail_block pb-3">
                                    <a href="#" class="view_detail">
                                        View details
                                    </a>
                                    <a href="#" class="price_card">
                                        £ 150*
                                    </a>
                                </div>
                            </div></div>
                              <div class="swiper-slide card">
                                <div class="single-district card1 slid_card">
                                    <div class="card_img mb-3">
                                        <img src="{{ asset('wa/assets/img/card-cover.png') }}">
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
                                            <div><span class="online">online</span><span class="dot-prime"></span></div>
                                            
                                        </div>
                                    </div>
                                    <div class="view_detail_block pb-3">
                                        <a href="#" class="view_detail">
                                            View details
                                        </a>
                                        <a href="#" class="price_card">
                                            £ 150*
                                        </a>
                                    </div>
                                </div>
                              </div>
                              <div class="swiper-slide card">
                                <div class="single-district card1 slid_card">
                                    <div class="card_img mb-3">
                                        <img src="{{ asset('wa/assets/img/card-cover.png') }}">
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
                                            <div><span class="online">online</span><span class="dot-prime"></span></div>
                                            
                                        </div>
                                    </div>
                                    <div class="view_detail_block pb-3">
                                        <a href="#" class="view_detail">
                                            View details
                                        </a>
                                        <a href="#" class="price_card">
                                            £ 150*
                                        </a>
                                    </div>
                                </div>
                              </div>
                              <div class="swiper-slide card">
                                <div class="single-district card1 slid_card">
                                    <div class="card_img mb-3">
                                        <img src="{{ asset('wa/assets/img/card-cover.png') }}">
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
                                            <div><span class="online">online</span><span class="dot-prime"></span></div>
                                            
                                        </div>
                                    </div>
                                    <div class="view_detail_block pb-3">
                                        <a href="#" class="view_detail">
                                            View details
                                        </a>
                                        <a href="#" class="price_card">
                                            £ 150*
                                        </a>
                                    </div>
                                </div>
                              </div>
                              
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-next"></div>
                             <div class="swiper-button-prev"></div>
                          </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </section>

	@include('common.main_footer')
 <script>
        $(document).ready(function () {
  $(".navbar-light .dmenu").hover(
    function () {
      $(this).find(".sm-menu").first().stop(true, true).slideDown(150);
    },
    function () {
      $(this).find(".sm-menu").first().stop(true, true).slideUp(105);
    }
  );
  $(window).scroll(function () {
    var sticky = $(".navbar"),
      scroll = $(window).scrollTop();

    if (scroll >= 300) {
      sticky.addClass("fix_header");
    } else sticky.removeClass("fix_header");
  });
});
$(document).ready(function () {
  $(".filter-button").click(function () {
    var value = $(this).attr("data-filter");

    if (value == "all") {
      //$('.filter').removeClass('hidden');
      $(".filter").show("1000");
    } else {
      //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
      //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
      $(".filter")
        .not("." + value)
        .hide("3000");
      $(".filter")
        .filter("." + value)
        .show("3000");
    }
    $(".filter-button").removeClass("filter_tab_active");
    $(this).addClass("filter_tab_active");
  });
});

var galleryThumbs = new Swiper(".gallery-thumbs", {
  spaceBetween: 3,
  slidesPerView: 3,
  freeMode: true,

  watchSlidesVisibility: true,
  watchSlidesProgress: true,
  breakpoints: {
    // when window width is >= 499px
    499: {
      slidesPerView: 4,
      spaceBetweenSlides: 50,
    },
    // when window width is >= 999px
    999: {
      slidesPerView: 5,
      spaceBetweenSlides: 40,
    },
  },
});
var galleryTop = new Swiper(".gallery-top", {
  spaceBetween: 10,
  autoplay: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  thumbs: {
    swiper: galleryThumbs,
  },
});
var swiper = new Swiper(".subject_card_block", {
  slidesPerView: 1,
  spaceBetween: 50,
  watchSlidesVisibility: true,
  watchSlidesProgress: true,
  breakpoints: {
    // when window width is >= 499px
    499: {
      slidesPerView: 1,
      spaceBetweenSlides: 50,
    },
    // when window width is >= 999px
    999: {
      slidesPerView: 4,
      spaceBetweenSlides: 20,
    },
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
 </script> 
      

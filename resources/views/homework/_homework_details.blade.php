@extends('layouts.session')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800 session_heading">My Session</h1>
    </div>
    <!-- image block -->
    <div class="row">
      <div class="col-xl-12 col-lg-12">
        <div class=" mt-5">
          <a class="direction_nav" href="#">
            <sapn class="arrow-right"><i class="fa fa-angle-left" aria-hidden="true"></i></sapn><span>Math Practice</span>
          </a>
          <section>
            <div class="">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card mt-5 yellow_border">
                    <div class="session_homework">
                      <p>Session 1 (Homework)</p>
                      <span>Andrew Semon</span>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="border-section">
                            <!-- slider -->
                            <div style="
                                --swiper-navigation-color: #fff;
                                --swiper-pagination-color: #fff;
                              " class="swiper-container mySwiper2 swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                              <div class="swiper-wrapper wide" id="swiper-wrapper-3a6d7925d786a9ae" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                                <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 4" style="width: 844px; margin-right: 30px;">
                                  {{-- <img src="{{asset('wa/teacherdashboard/img/math-aa.png')}}" class=""> --}}
                                  <object data="{{ asset("uploads/".$assignedHomework->assigned_content) }}" type="application/pdf" width="600" height="400">
                                    alt : <a href="pdf_file_name.pdf">PDF TITLE</a>
                                 </object>
                                </div>
                                {{-- <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 4" style="width: 844px; margin-right: 30px;">
                                  <img src="{{asset('wa/teacherdashboard/img/math-aa.png')}}" class="">
                                </div>
                                <div class="swiper-slide" role="group" aria-label="3 / 4" style="width: 844px; margin-right: 30px;">
                                  <img src="{{asset('wa/teacherdashboard/img/math-aa.png')}}" class="">
                                </div>
                                <div class="swiper-slide" role="group" aria-label="4 / 4" style="width: 844px; margin-right: 30px;">
                                  <img src="{{asset('wa/teacherdashboard/img/math-aa.png')}}" class="">
                                </div> --}}
                              </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                          </div>
                          <div thumbsslider="" class="swiper-container mySwiper swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events swiper-container-free-mode swiper-container-thumbs">
                            <div class="swiper-wrapper" id="swiper-wrapper-92d9f35765923b45" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                              <div class="swiper-slide swiper-slide-visible swiper-slide-active swiper-slide-thumb-active" role="group" aria-label="1 / 4" style="width: 204.5px; margin-right: 10px;">
                                <img src="{{asset('wa/teacherdashboard/img/math-aa.png')}}" class="">
                              </div>
                              {{-- <div class="swiper-slide swiper-slide-visible swiper-slide-next" role="group" aria-label="2 / 4" style="width: 204.5px; margin-right: 10px;">
                                <img src="{{asset('wa/teacherdashboard/img/math-aa.png')}}" class="">
                              </div>
                              <div class="swiper-slide swiper-slide-visible" role="group" aria-label="3 / 4" style="width: 204.5px; margin-right: 10px;">
                                <img src="{{asset('wa/teacherdashboard/img/math-aa.png')}}" class="">
                              </div>
                              <div class="swiper-slide swiper-slide-visible" role="group" aria-label="4 / 4" style="width: 204.5px; margin-right: 10px;">
                                <img src="{{asset('wa/teacherdashboard/img/math-aa.png')}}" class="">
                              </div>
                              <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-3a6d7925d786a9ae" aria-disabled="false"></div>
                              <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-3a6d7925d786a9ae" aria-disabled="true"></div> --}}

                            </div>
                          <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                        </div>
                        <div class="col-lg-6">
                          <div class="pagination_div">
                            <p class="img_name">Image 1.png</p>
                           
                            <div class="pagination_block">
                              <a href="#" class="previous round">‹</a>
                              <p><span>1<span><span>/</span><span>15</span></span></span></p>
                              <a href="#" class="next round">›</a>
                            </div>
                          </div>
                          <div class="border-section second-border-section">
                            <div> 
                              <object data="{{ asset("storage/homeworks/".$homeworkContent->home_work_image_path) }}" type="application/pdf" width="600" height="400">
                                alt : <a href="pdf_file_name.pdf">PDF TITLE</a>
                             </object>
                                {{-- <img src="{{asset('wa/teacherdashboard/img/math-aa.png')}}" class="img-subject"> --}}


                            </div>
                           
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-header yellow_background">
                      <div class="cta_block_box">
                        <button class="btn disapprove_cta">
                          Disapprove
                        </button>
                        <button class="btn approve_cta">Approve</button>
                      </div>
                      <div class="rating_block">
                        <span>Rate the Answer</span>
                        <div class="Stars" style="--rating: 2.3" aria-label="Rating of this product is 2.3 out of 5."></div>
                      </div>
                      <div class="add_mark">
                        <button class="btn add_mark_cta">Add Remark</button>
                      </div>
                      <div class="point_block">
                        <span>Points</span>
                        <p class="pointer_no">
                          <span>10</span>
                          <span>/</span>
                          <sapn>1p</sapn>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
    <!-- Content Row -->
  </div>
  
  @endsection
  {{-- js for homework details --}}
  @section('scripts')
  <link
  rel="stylesheet"
  href="https://unpkg.com/swiper/swiper-bundle.min.css"
/>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
     
      });
      var swiper2 = new Swiper(".mySwiper2", {
        spaceBetween: 10,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        thumbs: {
          swiper: swiper,
        },
        breakpoints: {
     
     320: { /* when window >= 767px - webflow tablet */
       slidesPerView: 1,
       spaceBetween: 30,
       slidesOffsetBefore: 0,
      
     },
     
   },
      });
      
    </script>
    {{-- end homework details --}}
    @endsection
  
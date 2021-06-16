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
                                    <embed src="{{ url("uploads/".$assignedHomework->assigned_content) }}#toolbar=0"  width="600" height="400" />
                                    {{-- alt : <a href="pdf_file_name.pdf">PDF TITLE</a> --}}
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

                              @if($multiple)

                              @foreach($homeworkContent as $hwcontent)
                              <div class="swiper-slide swiper-slide-visible swiper-slide-next" role="group" aria-label="{{ $loop->iteration }} / {{ $loop->count }}" style="width: 204.5px; margin-right: 10px;">
                                <img src="{{ url("storage/homeworks/".$hwcontent->image_path) }}#toolbar=0" class="">
                                </div>

                              @endforeach
                              @else
                              <div class="swiper-slide swiper-slide-visible swiper-slide-active swiper-slide-thumb-active" role="group" aria-label="1 / 4" style="width: 204.5px; margin-right: 10px;">
                                <img src="{{asset('wa/teacherdashboard/img/math-aa.png')}}" class="">
                              </div>

                              @endif
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
                            <p class="img_name">{{ $student->image_path }}</p>

                            <div class="pagination_block">
                              <a href="#" class="previous round">‹</a>
                              <p><span>1<span><span>/</span><span>1</span></span></span></p>
                              <a href="#" class="next round">›</a>
                            </div>
                          </div>
                          <div class="border-section second-border-section">
                            <div>
                            @if($multiple)
                                 <embed src="{{ url("storage/homeworks/".$homeworkContent->first()->image_path) }}#toolbar=0" type="application/pdf" width="600" height="400" />
                            @else
<<<<<<< HEAD
                                 <embed src="{{ url("storage/homeworks".$assignedHomework->id."/".$homeworkContent->image_path) }}#toolbar=0" type="application/pdf" width="600" height="400" />

=======
                                 <embed src="{{ url("storage/homeworks/".$homeworkContent->image_path) }}#toolbar=0" type="application/pdf" width="600" height="400" />
                            
>>>>>>> 69492d482ec5f3285b551a4b01e4d269b617cd13
                            @endif

                                {{-- alt : <a href="pdf_file_name.pdf">PDF TITLE</a> --}}
                                {{-- <img src="{{asset('wa/teacherdashboard/img/math-aa.png')}}" class="img-subject"> --}}
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="success_message_div" class="alert alert-success">
                        Points has been assigned successfully.
                      </div>
                    </div>
                    <div class="card-header yellow_background">
                      {{-- <div class="cta_block_box">
                        <button class="btn disapprove_cta">
                          Disapprove
                        </button>
                        <button class="btn approve_cta">Approve</button>
                      </div> --}}
                      <div class="rating_block">
                        <span>Rate the Answer</span>
                        <div class="Stars" style="--rating: 2.5" aria-label="Rating of this product is 2.3 out of 5."></div>
                      </div>
                      <div class="add_mark">
                        <button class="btn add_mark_cta">Add Remark</button>
                      </div>
                      <div class="point_block">
                        <span>Points</span>
                        <p class="pointer_no">
                        <span><input id="savePoint" type="number" step="1"/></span>
                        <span><input type="button" onclick="savePoint()" value="Update" /></span>
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

  <script>
   $( document ).ready(function() {
    $("#success_message_div").hide();
    });
    function savePoint() {
        console.log("here");
      $.ajax({
         "_token": "{{ csrf_token() }}",
         type:'POST',
         url: "{{ url('assign-points') }}",
         data: JSON.stringify({
           points: $('#savePoint').val(),
           id: {{ $student->id }}
         }),
         contentType: false,
         processData: false,
         success: (xhr, response) => {
           //  alert("Homework Assigned Successfully");
           $("#success_message_div").show();
           setTimeout(() => {
            $("#success_message_div").hide();
           }, 3000);
         },
         error: (xhr, status, error)=>{
            // console.log(xhr);
         }
     });
    }
  </script>
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

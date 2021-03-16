@extends('layouts.main')
@section('css')
    <link rel="stylesheet" href="{{ asset('wa/buynow.css') }}">
@endsection
@section('content')
    <!-- subject cartsection -->
    <section class="quickpay_block">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <button class="pay_now btn mobilw_show">Pay Now</button>
            <div class="quick_heading">Quick Pay</div>
            <div class="pay_section d-flex flex-sm-row flex-column mt-3">
              <div class="pay_image_block">
                <img
                  class="register-img"
                  src="{{ asset('wa/assets/img/buynow/register-img.svg') }}"
                  alt="login"
                  title="login"
                />
              </div>
              <div class="paymet_setion">
                <div class="buy_cards_block">
                  <div class="card_cart_div">
                    <a href="#" class="close"></a>
                      <div class="single-district card3">
                          <div class="card_img mb-3">
                              @if($relatedBatch->subject->name == 'English')
                                  <img src="{{ asset('frontend/assets/English/English.jpg') }}" alt="">
                              @endif
                              @if($relatedBatch->subject->name == 'Maths')
                                  {{-- <img src="{{ asset('frontend/assets/Maths/Maths.jpg') }}" alt=""> --}}
                                  <img src="{{ asset('frontend/assets/Maths/Math.jpg') }}" alt="">
                              @endif
                              @if($relatedBatch->subject->name == 'Physics')
                                  <img src="{{ asset('frontend/assets/Physics/Physics.jpg') }}" alt="">
                              @endif
                              @if($relatedBatch->subject->name == 'Chemistry')
                                  <img src="{{ asset('frontend/assets/card-cover.png') }}" alt="">
                              @endif
                          </div>
                          <div class="card_block_info pl-3 pr-3">
                              <div class="card_info">
                                  <p>{{ $relatedBatch->classSettings->name }}</p>
                                  <p>{{ $relatedBatch->subject->name }}</p>
                              </div>
                              <div class="card_details">
                                  <div class="seat_block pr-3">
                                      <p>No Of Seats</p>
                                      <p>{{ $relatedBatch->no_of_seats }}</p>
                                  </div>
                                  <div class="border_div pl-3 "></div>
                                  {{-- <div class="date_block">
                                      <p>No Of Seats</p>
                                      <p>{{ $batch->no_of_seats }}</p>
                                      <p>32</p>
                                  </div> --}}
                              </div>
                              <div class="class_section">
                                <div class="class_type">class type</div>
                                <div>
                                    <span class="online">
                                    {{ $relatedBatch->status == 1 ? 'Online' : 'Offline' }}
                                    </span>
                                    {{-- for color  --}}
                                    <span class="dot{{ $relatedBatch->status == 1 ? '' : '-prime' }}"></span></div>   
                                </div>
                            </div>
                          <div class="view_detail_block pb-3">
                              <a href="#" class="view_detail">
                                  View details
                              </a>
                              <a href="#" class="price_card">
                                &pound; {{ $relatedBatch->batch_price_per_session }} 
                              </a>
                          </div>
                      </div>
                  </div>
                </div>
                <hr />
                <div class="coupon_block">
                  <span>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Discount code"
                    />
                  </span>
                  <span
                    ><button class="btn disabled apply_cta">Apply</button></span
                  >
                </div>
                <div>
                  <div class="cource_detail_section">
                    <div>Course cost</div>
                    <div>£ 150</div>
                  </div>
                  <div class="cource_detail_section">
                    <div>Tax 1</div>
                    <div>£ 10</div>
                  </div>
                  <div class="cource_detail_section">
                    <div>Tax 2</div>
                    <div>£ 150</div>
                  </div>
                </div>
                <hr class="border_bottom" />
                <div class="total_amount_block">
                  <div class="total">Total</div>
                  <div>£ 150</div>
                </div>
                <div class="form-group term_pera mt-3">
                  <label class="container-checkbox">
                    <input type="checkbox" checked="checked" required="" />
                    <span class="checkmark-box"></span>
                    I accept the <a href="#">terms and conditions</a>.
                  </label>
                </div>
                <div class="pay_cta mb-5">
                  <button class="pay_now btn desktopshow">Pay Now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endsection
    <!-- Swiper JS -->
    {{-- <script>
      document.FIX_HEADER_TOP = 35;
    </script>
    <script src="coustom.js"></script> --}}
    @section('js')
    <script src="{{ asset('wa/buynow.js') }}"></script>
    @endsection
    {{-- for scroll --}}
    <script>
      document.FIX_HEADER_TOP = 35;
    </script>
    <script src="coustom.js"></script>
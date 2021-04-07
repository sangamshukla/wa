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
                @include('_form.success')

                <div class="buy_cards_block">
                  @php $i = 1 @endphp
                  @foreach($relatedBatches as $relatedBatch)
                  <div  class="card_cart_div">
                    <a href="{{ route('cart.remove', $relatedBatch->id) }}" class="close"></a>
                      <div style="cursor:pointer;" onClick="(function(){
                        window.location.href = '/testing/public/student-details/{{ $relatedBatch->id }}';
                        })();return false;" class="single-district card{{ $i }}">
                        {{-- @php $i =1 @endphp --}}
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
                                  {{-- <div class="border_div pl-3 "></div> --}}
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
                              <a href="#" class="price_card price_bg{{ $i }}">
                                &pound; {{ $relatedBatch->batch_price_per_session }} 
                              </a>
                          </div>
                          {{-- @php $i++ @endphp --}}

                      </div>
                  </div>
                  @php $i++ @endphp
                  @endforeach
                  
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
                    <div>£ {{ $relatedBatches->sum('batch_price_per_session') }}</div>
                  </div>
                  <div class="cource_detail_section">
                    <div>Tax </div>
                    <div>£  0</div>
                  </div>
                  {{-- <div class="cource_detail_section">
                    <div>Tax 2</div>
                    <div>£ 150</div>
                  </div> --}}
                </div>
                <hr class="border_bottom" />
                <div class="total_amount_block">
                  <div class="total">Total</div>
                  <div>£ {{$relatedBatches->sum('batch_price_per_session')}}</div>
                </div>
                <div class="form-group term_pera mt-3">
                  <label class="container-checkbox">
                    <input type="checkbox" checked="checked" required="" />
                    <span class="checkmark-box"></span>
                    I accept the <a href="#">terms and conditions</a>.
                  </label>
                </div>
                <div class="pay_cta mb-5">
                  @guest
                  <button class="pay_now btn desktopshow" data-toggle="modal" data-target="#exampleModalCenter">Pay Now</button>
                @endguest
                @auth
                <form method="POST" action="{{ route('payment.makePayment') }}">
                  @csrf
                  <button type="submit" id="btReload" class="pay_now btn desktopshow" >Pay Now</button>
                </form>
                @endauth
                </div>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content" style="background-color: #EAEAEA">
                        <a href="/"><img alt="Paris" style="width:27%;" src="{{ asset('wa/assets/img/logo.png')}}"></a><br>
                        <h4 style="text-align: center;" >Student Login</h4>
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                        </div>
                        <div class="modal-body" >
                          <form>
                            @csrf
                            <div id="error" class="alert alert-danger">
                              Incorrect Email Or Password
                            </div>
                            @include('_form.input', ['title' => 'Email Address', 'name' => 'email'])
                            @include('_form.input', ['title' => 'Password', 'name' => 'password', 'type' => 'password'])
                    
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    {{-- <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div> --}}
                                </div>
                            </div>
                    
                            <div class="form-group mb-0 text-center">
                                <button style="background: #1d6771;" id="submitLogin" class="btn btn-primary" type="button"> Log In </button>
                            </div>                            
                        </form>
                        </div>
                        <div class="modal-footer">
                          <button style="background: #1d6771;" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                        </div>
                      </div>
                    </div>
                  </div>
                {{-- close model --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endsection
    <!-- Swiper JS -->
    <script>
      document.FIX_HEADER_TOP = 35;
    </script>
    @section('js')
    <script src="{{ asset('wa/buynow.js') }}"></script>
    
    <script src="{{asset('wa/coustom.js') }}"></script>
    <script>

      $('#error').hide();
      $('#submitLogin').on('click', function(){

          // ajax for login
          var email = $('#email').val();
          var password = $('#password').val();
          $.post( "/login-api",
            { email: email, password: password, _token : "{{ csrf_token() }}" }).done(function( data ) {
            if(data == 'success')
            {
              location.reload();
            }else {
              $('#error').show();
            }
          });
      })
     
    </script>
    @endsection
    
    {{-- for scroll --}}
    
    <!--<script src="coustom.js"></script>-->
   
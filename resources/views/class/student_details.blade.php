@extends('layouts.main')
@section('css')
    <link rel="stylesheet" href="{{ asset('wa/viewdetails.css') }}">
@endsection
    <!-- cart icon -->
 @section('carticon')
{{-- <img src="{{ asset('wa/assets/img/cart.svg')}}"> --}}
 {{-- <a href="{{ url('buy-now')}}"><img src="{{ asset('wa/assets/img/cart.svg')}}"></a> --}}
{{-- 
 <span class="cart_no">{{ count(session()->get('cart') ?? []) }}</span> --}}
 @endsection
@section('content')  
<section class="math_booster">
    <form id="buynowform" method="POST" action="{{ route('buy.now') }}">
        @csrf
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="subject_heading mt-5">{{ Str::ucfirst($batch->classSettings->name) . ' - '. Str::ucfirst($batch->classMaster->name) . ' - '}}{{ $batch->status == 1 ? 'Online' : 'Offline' }}</div>
                {{-- <p class="name_section">{{ Str::ucfirst($batch->classMaster->name) }}</p> --}}

                <div class="math_csc d-flex flex-sm-row flex-column justify-content-between mt-5">
                    <div class="subject_card">
                        @if($batch->subject->name == 'English')
                                  <img src="{{ asset('frontend/assets/English/English.jpg') }}" alt="">
                                @endif
                                @if($batch->subject->name == 'Maths')
                                    {{-- <img src="{{ asset('frontend/assets/Maths/Maths.jpg') }}" alt=""> --}}
                                    <img src="{{ asset('frontend/assets/Maths/Math.jpg') }}" alt="">
                                @endif
                                @if($batch->subject->name == 'Physics')
                                    <img src="{{ asset('frontend/assets/Physics/Physics.jpg') }}" alt="">
                                @endif
                                @if($batch->subject->name == 'Chemistry')
                                    <img src="{{ asset('frontend/assets/card-cover.png') }}" alt="">
                                @endif
                        {{-- <img src="{{ asset('wa/assets/img/card-cover.png') }}"> --}}
                    </div>
                    <div class="left_block">
                        {{-- <p class="sub_title mt-4">{{ Str::ucfirst($batch->classSettings->name) . '' .  Str::substr($batch->batch_start_date,0,-3) }}</p> --}}
                        <p class="name_section">{{ Str::ucfirst($batch->assignteacher->name) }} &nbsp;&nbsp;&nbsp;&nbsp;
                        {{ $batch->status != 1 ? 'Location : '.$batch->location : '' }}
                        </p>
                        
                          
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
                        
                       <div class="d-flex flex-sm-row flex-column mt-3"><p class="doler_text">£ {{ $batch->batch_price_per_session }}</p><div class="buy_cta m-3">
                            <a href="{{ route('cart.add', $batch->id) }}" class="btn btn_block text-capitalize add_cart_section my-2 my-sm-0">Add to Cart</a>
                            {{-- <button class="btn btn_block text-capitalize add_cart_section my-2 my-sm-0" type="button">Add to Cart</button> --}}
                            {{-- <form method="POST" action="{{ route('buy.now') }}"> --}}
                                {{-- @csrf --}}
                                {{-- <input type="hidden"  name="batch_id" value="{{ $batch->id }}"> --}}
                                {{-- before button --}}
                                {{-- <button class="btn btn_block text-capitalize buy_now_cta my-2 my-sm-0" id="buyNow">Buy Now</button><br><br> --}}
                                {{-- href="{{ route('buy.now') }}?classId={{ $batch->id }}" --}}
                                <a href="#" id="buyNow"><button class="btn btn_block text-capitalize my-2 my-sm-0" type="button"
                                    id="register">Buy Now</button></a><br><br>
                                                    
                                {{-- for success msg --}}
                                @include('_form.success')
                                {{-- @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                                 @endif --}}
                                {{-- end success msg --}}
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
                            <div class="card_date">Topic</div>
                            <div class="card_date">Date</div>
                            <div class="card_time">Time</div>
                            
                        </div>
                        @foreach($batch->batchSession as $session)
                        {{-- session start date --}}
                        @if($session->start_date_time >= \Carbon\Carbon::today())
                            <div class="session_card">
                                <div class="session_no">{{ $session->name }}</div>
                                <div class="session_no">@foreach($session->topics as $t)
                                    {{ $t->topic->name }}                                       
                                    @endforeach </div>
                                {{-- <div class="session_date">{{ $batch->batch_start_date->format('d M, Y H:i A') }}</div> --}}

                                <div class="session_date"><?php echo $Session = date('Y-m-d', strtotime( $session->start_date_time )); ?></div>

                                <div class="session_time"><?php echo $Session = date('H:i A', strtotime( $session->start_date_time )); ?></div>
                                {{-- <div class="session_time"><input type="checkbox" style="width:40px;" class="form-control" name="session_id[]" value="{{ $session->id }}" /></div> --}}
                                {{-- <div><input type="checkbox" style="width:40px;" class="form-control" name="session_id[]" value="{{ $session->id }}" /></div> --}}
                                <div class="session_date">
                                    <div class="check_form">
                                      <div class="form-group">
                                        <input name="session_id[]" value="{{ $session->id }}"  type="checkbox" id="html">
                                        <label for="html" style="background: none;
                                        border: none;"></label>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        @endif    
                        @endforeach

                    </div>
                    <div class="right_section mt-5">
                        <p class="learn_heading">What You Will Learn</p>
                        @foreach($batch->batchSession as $session)
                          <div class="card-link-block">
                           Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's. Ipsum has been the industry's. 
                        </div>
                    @endforeach
                     
                        

                    </div>
                </div>
                <div class="card_slider">
                    <div class="cource_title mt-3 mb-3">Courses you would like to buy</div>
                    <div class="swiper-container subject_card_block" id="swipercard">
                        <div class="swiper-wrapper">
                            @php $i=1 @endphp
                            @foreach($allBatches as $relatedBatch)
                            <div style="cursor:pointer;" onClick="(function(){
                                window.location.href = '/student-details/{{ $relatedBatch->id }}';
                            })();return false;" class="swiper-slide card">
                                <div class="single-district card{{ $i }} slid_card">
                                    <div class="card_img mb-3">
                                        @if($relatedBatch->subject->name == 'English')
                                            <img style="width:100%;" src="{{ asset('frontend/assets/English/English.jpg') }}" alt="">
                                        @endif
                                        @if($relatedBatch->subject->name == 'Maths')
                                            {{-- <img src="{{ asset('frontend/assets/Maths/Maths.jpg') }}" alt=""> --}}
                                            <img style="width:100%;" src="{{ asset('frontend/assets/Maths/Math.jpg') }}" alt="">
                                        @endif
                                        @if($relatedBatch->subject->name == 'Physics')
                                            <img style="width:100%;" src="{{ asset('frontend/assets/Physics/Physics.jpg') }}" alt="">
                                        @endif
                                        @if($relatedBatch->subject->name == 'Chemistry')
                                            <img style="width:100%;" src="{{ asset('frontend/assets/card-cover.png') }}" alt="">
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
                                                <p>{{ $batch->no_of_seats }}</p>
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
                                                {{ $batch->status == 1 ? 'Online' : 'Offline' }}
                                                </span>
                                                {{-- for color  --}}
                                                <span class="dot{{ $batch->status == 1 ? '' : '-prime' }}"></span></div>   
                                            </div>
                                        </div>
                                    <div class="view_detail_block pb-3">
                                        <a href="#" class="view_detail">
                                            View details
                                        </a>
                                        <a href="{{ url('/student-details', $batch->id)}}" class="price_card price_bg{{ $i }}">
                                            {{-- £ 150* --}}
                                            &pound; {{ $batch->batch_price_per_session }} 
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @php $i++ @endphp
                            @endforeach
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
        <input type="hidden" name="batch_id" value="{{ $batch->id }}">
        <input type="hidden" name="classId" value="{{ $batch->id }}">
    </form>
</section>
@endsection
@section('js')

    <script src="{{ asset('wa/viewdetails.js') }}"></script>
    <script>
        $(document).ready(function(){
            $("#buyNow").click(function(){        
                $("#buynowform").submit(); // Submit the form
            });
        });
    </script>
@endsection
      

<header>
    <nav class="navbar navbar-expand-md   navbar-light ">
        <a class="navbar-brand" href="/"><img src="{{ asset('wa/assets/img/logo.png') }}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <a href="javascript:void(0)" data-toggle="collapse" data-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" class="closebtn outer_close_btn">×</a>
            <ul class="navbar-nav text-capitalize mx-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Live Classes <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Packages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">11+Exam</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Study Material
                    </a>
                </li>
            </ul>
                {{-- @yield('carticon') --}}
                {{-- <a class="_3SkBxJ" href="/viewcart?otracker=Cart_Icon_Click"><svg class="V3C5bO" width="14" height="14" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path class="_1bS9ic" d="M15.32 2.405H4.887C3 2.405 2.46.805 2.46.805L2.257.21C2.208.085 2.083 0 1.946 0H.336C.1 0-.064.24.024.46l.644 1.945L3.11 9.767c.047.137.175.23.32.23h8.418l-.493 1.958H3.768l.002.003c-.017 0-.033-.003-.05-.003-1.06 0-1.92.86-1.92 1.92s.86 1.92 1.92 1.92c.99 0 1.805-.75 1.91-1.712l5.55.076c.12.922.91 1.636 1.867 1.636 1.04 0 1.885-.844 1.885-1.885 0-.866-.584-1.593-1.38-1.814l2.423-8.832c.12-.433-.206-.86-.655-.86" fill="#fff"></path></svg><div class="KK-o3G">2</div><span>Cart</span></a> --}}
                             
                @auth
                <button class="btn btn_block text-capitalize my-2 my-sm-0" type="button" id="login"><a href="{{ url('/home') }}">Welcome {{ auth()->user()->name }}</a></button>
                @endauth
                
                {{-- @guest --}}
                <div class="my-2 my-lg-0 login_block">
                    {{-- <a class="cart_img_block" href="{{ url('buy-now')}}"> --}}
                    <a class="cart_img_block" style="color: #333;" href="{{ url('buy-now')}}">
                    <svg class="cart-svg-icon" width="22" height="22" fill="currentcolor" aria-hidden="true" role="img"><path d="M10.5 5.75V0H12v5.75h9.5l-3.818 12H4.318L.5 5.75h10zm-7.949 1.5l2.864 9h11.17l2.864-9H2.55h.001z"></path></svg>
                    {{-- <a href="{{ url('buy-now')}}"><img src="{{ asset('wa/assets/img/cart.svg')}}"></a> --}}
                    <span class="cart_no">{{ count(session()->get('cart') ?? []) }}</span>
                    @yield('carticon')
                    @guest
                    <button class="btn btn_block text-capitalize my-2 my-sm-0" type="button" id="login">
                        <a href="{{ url('/student-login') }}">login</a>
                    </button>
                    @endguest
                    @auth
                    <button class="btn btn_block text-capitalize my-2 my-sm-0" type="button" id="login"><a href="{{ url('/home') }}">Welcome {{ auth()->user()->name }}</a></button>
                    @endauth
                    @guest
                    <button class="btn btn_block text-capitalize my-2 my-sm-0" type="button" id="register">
                        <a href="{{ url('/student-register') }}">Register</a>
                    </button>
                    @endguest
                </div>
                {{-- <div class="my-2 my-lg-0 login_block">  
                    <div clss="cart_img">
                        <span class="cart_no">{{ count(session()->get('cart') ?? []) }}</span>
                    </div> 
                <button class="btn btn_block text-capitalize my-2 my-sm-0" type="button" id="login"><a href="{{ url('/student-login') }}">login</a></button>
                @endguest

                @guest
                <button class="btn btn_block text-capitalize my-2 my-sm-0" type="button"
                    id="register"> <a href="{{ url('/student-register') }}">Register</a></button>
                @endguest --}}
            </div>
            
        </div>
    </nav>
</header>
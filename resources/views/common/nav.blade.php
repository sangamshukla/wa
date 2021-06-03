<header>
    <nav class="navbar navbar-expand-md   navbar-light ">
        <a class="navbar-brand" href="{{url('/')}}"><img src="{{ asset('wa/assets/img/logo.png') }}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <a href="javascript:void(0)" data-toggle="collapse" data-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" class="closebtn outer_close_btn">×</a>
            <ul class="navbar-nav text-capitalize mx-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('live-session')}}">Live Classes <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('packages-details')}}">Packages</a>
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

                {{-- @guest --}}
                <div class="login_block row ">
                    <div class="col-2 ">
                    <a href="{{ url('buy-now')}}">
                        <span style="color: red;">{{ count(session()->get('cart') ?? []) }}</span>
                        <img src="{{asset('wa/assets/img/wacart.png')}}" width="22" height="22">
                    </a>
                    </div>
                    {{-- @yield('carticon') --}}
                    <div class="col-10 ">
                    @guest
                    <button class="btn btn_block text-capitalize my-2 my-sm-0" type="button" id="login">
                        <a href="{{ url('/student-login') }}">login</a>
                    </button>
                    <button class="btn btn_block text-capitalize my-2 my-sm-0" type="button" id="register">
                        <a href="{{ url('/student-register') }}">Register</a>
                    </button>
                    @endguest

                    @auth
                    {{-- !! for html exit  --}}
                    <button class="btn btn_block text-capitalize my-2 my-sm-0" type="button" id="login"><a href="{{ url('/home') }}">Welcome {{ auth()->user()->name}}</a></button>                    
                    @endauth
                    </div>
                </div>
            </div>

        </div>
    </nav>
</header>

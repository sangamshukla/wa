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
            <div class="my-2 my-lg-0 login_block">
                @auth
                <button class="btn btn_block text-capitalize my-2 my-sm-0" type="button" id="login"><a href="{{ url('/home') }}">Welcome {{ auth()->user()->name }}</a></button>
                @endauth
                @guest
                <button class="btn btn_block text-capitalize my-2 my-sm-0" type="button" id="login"><a href="{{ url('/student-login') }}">login</a></button>
                @endguest

                @guest
                <button class="btn btn_block text-capitalize my-2 my-sm-0" type="button"
                    id="register"> <a href="{{ url('/student-register') }}">Register</a></button>
                @endguest

            </div>
        </div>
    </nav>
</header>
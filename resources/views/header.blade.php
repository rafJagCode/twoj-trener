
<header id="header-container">
    <!-- Topbar -->
    <div class="header-top">
        <div class="container">
            <div class="top-info hidden-sm-down">
            </div>
            <div class="top-social hidden-sm-down">
                <div class="login-wrap">
                    <ul class="d-flex">
                    @guest
                        <li><a href="{{ route('login') }}"><i class="fa fa-user"></i> Login</a></li>
                        <li><a href="{{ route('register') }}"><i class="fa fa-sign-in"></i> Register</a></li>
                    @else
                        @if( auth()->user()->isTrainer())
                            <li><a href="{{route('trainer-dashboard.index')}}"><i class="fa fa-user"></i> Dashboard</a></li>
                            <li><a href="trainer/{{auth()->user()->id}}"><i class="fa fa-sign-in"></i> Profil </a></li>
                        @else
                            <li><a href="{{ route('user.dashboard') }}"><i class="fa fa-user"></i> Profil</a></li>
                        @endif
                        <li>
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Hi {{auth()->user()->firstName}}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="">
                                    <a class="item btn_2" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Wyloguj') }} <i class="fa fa-sign-out"></i>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </li>
                    @endif
                    </ul>
                </div>
                <div class="social-icons-header">
                    <div class="social-icons">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <!-- Topbar / End -->
    <!-- Header -->
    <div id="header">
        <div class="container">
            <!-- Left Side Content -->
            <div class="left-side">
                <!-- Logo -->
                <div id="logo">
                    <a href="index.html"><img src="images/logo-blue.svg" alt=""></a>
                </div>
                <!-- Mobile Navigation -->
                <div class="mmenu-trigger">
                    <button class="hamburger hamburger--collapse" type="button">
                        <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
                <!-- Main Navigation -->
                <nav id="navigation" class="style-1">
                    <ul id="responsive">
                        <li><a href="{{ url('') }}">Strona główna</a></li>
                        <li><a href="{{ url('trainers') }}">Trenerzy</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </nav>
                <div class="clearfix"></div>
                <!-- Main Navigation / End -->
            </div>
            <!-- Left Side Content / End -->
            <!-- Right Side Content / End -->
            <div class="right-side hidden-lg-down">
                <!-- Header Widget -->
                <div class="header-widget">
                    <a href="add-listing.html" class="button border">Add Listing</a>
                </div>
                <!-- Header Widget / End -->
            </div>
            <!-- Right Side Content / End -->
        </div>
    </div>
    <!-- Header / End -->
</header>


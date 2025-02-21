<header class="section page-header">
    <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed">
            <div class="rd-navbar-main-outer">
                <div class="rd-navbar-main">
                    <!-- RD Navbar Panel -->
                    <div class="rd-navbar-panel">
                        <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                        <div class="rd-navbar-brand">
                            <a href="#">
                                <img class="brand-logo-light" src="{{asset('frontend/images/logo.png')}}" alt="" width="140" height="57" />
                            </a>
                        </div>
                    </div>
                    <div class="rd-navbar-main-element">
                        <div class="rd-navbar-nav-wrap">
                            <ul class="rd-navbar-nav">
                                <li class="rd-nav-item"><a class="rd-nav-link" href="#">Home</a></li>
                                <li class="rd-nav-item"><a class="rd-nav-link" href="#about">{{__('menu.about-us')}}</a></li>
                                <li class="rd-nav-item"><a class="rd-nav-link" href="#contact">{{__('menu.contact-us')}}</a></li>
                                <li class="rd-nav-item"><a class="rd-nav-link" href="#news">News</a></li>
                                <li class="rd-nav-item"><a class="rd-nav-link" href="#terms">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Book Now Button -->
                    <a class="button button-white button-sm me-3" href="#">Book Now</a>

                    <!-- Language Dropdown -->
                    <!--<div class="dropdown hover-dropdown me-3">
                        <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img src="{{asset('assets/images/flags/us_flag.jpg')}}" alt="img" class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu">
                            @foreach (config('app.available_locales') as $locale)
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="{{url('/lang/'.$locale)}}">
                                    <span class="avatar avatar-xs lh-1 me-2">
                                        <img src="{{asset('assets/images/flags/'.$locale.'_flag.jpg')}}" alt="img">
                                    </span>
                                    {{ strtoupper($locale) }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div> -->

                    <!-- Profile Dropdown -->
                    <div class="dropdown hover-dropdown">
                        <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img src="{{asset('frontend/images/profile.png')}}" alt="profile" class="rounded-circle" width="35">
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="">My Profile</a></li>
                            <li><a class="dropdown-item" href="">Settings</a></li>
                            <li><a class="dropdown-item text-danger" href="">Logout</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </nav>
    </div>
</header>

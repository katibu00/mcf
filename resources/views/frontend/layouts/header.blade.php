<header>
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-slid">
                <div>
                    <div class="phone-data">
                        <div class="phone d-flax align-items-center">
                            <i>
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                    style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <path d="M437.15,74.817C388.895,26.571,324.561,0,256,0C187.587,0,123.279,26.65,74.92,75.041
                        C26.559,123.435-0.048,187.766,0,256.184c0.048,68.507,27.005,132.938,75.905,181.425C124.335,485.629,188.219,512,255.997,512
                        c0.677,0,1.357-0.002,2.035-0.008c44.288-0.345,87.858-12.192,126.001-34.262l-15.024-25.967
                        c-33.653,19.472-72.109,29.925-111.21,30.23c-60.48,0.456-117.575-22.858-160.77-65.688C53.847,373.49,30.043,316.616,30,256.163
                        C29.958,195.762,53.447,138.97,96.141,96.247C138.832,53.527,195.605,30,256,30c124.595,0,225.979,101.365,226,225.959
                        c0.008,49.387-15.621,96.298-45.198,135.661c-2.573,3.424-6.37,5.478-10.692,5.784c-4.368,0.308-8.658-1.291-11.756-4.388
                        l-20.406-20.406l9.06-9.06l-70.711-70.711l-28.284,28.284c-58.885-7.935-105.202-54.252-113.137-113.137l28.284-28.284
                        l-70.711-70.711l-39.054,39.054c-3.826,66.249,19.552,133.776,70.167,184.391s118.142,73.993,184.391,70.167l8.782-8.781
                        l20.406,20.406c9.247,9.247,22.033,14.022,35.082,13.1c12.935-0.913,24.803-7.36,32.563-17.688
                        C494.3,365.039,512.01,311.895,512,255.954C511.988,187.393,485.406,123.064,437.15,74.817z" />
                                </svg>
                            </i>
                            <span>Phone: </span><a class="me-3" href="callto:08164681678">&nbsp;{{ $settings->phone_number }}</a>
                        </div>
                        <div class="phone">
                            <i>
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                    style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <path
                                        d="M0,81v350h512V81H0z M456.952,111L256,286.104L55.047,111H456.952z M30,128.967l134.031,116.789L30,379.787V128.967z
                     M51.213,401l135.489-135.489L256,325.896l69.298-60.384L460.787,401H51.213z M482,379.788L347.969,245.756L482,128.967V379.788z" />
                                </svg>
                            </i>
                            <span>Email: </span><a href="mallto:{{ $settings->email }}">&nbsp;{{ $settings->email }}</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="social-media">
                        <ul class="social-media-icon">
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f icon"></i> </a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-twitter icon"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-google-plus-g icon"></i></a>
                            </li>
                        </ul>
                        <div class="mx-4 boder"></div>
                        <div class="login">
                            <i class="fa-solid fa-user"></i>
                            <a href="{{ route('system-admin') }}">Admin side</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="second-bar">
        <div class="container">
            <div class="logo-menu">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="logo">
                            <a href="index.html">
                                <img alt="logo" src="/frontend/logo.jpeg" width="70px" height="80px" class="white-logo">
                                <img alt="logo" src="/frontend/logo.jpeg" class="black-logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="nav-bar">
                            <nav>
                                <ul>
                                    <li><a href="{{ route('homepage') }}">Home</a></li>
                                    <li><a href="JavaScript:void(0)">About Us</a>
                                        <ul>
                                            <li><a href="{{ route('about') }}">Who We Are</a></li>
                                            <li><a href="{{ route('founder') }}">Our Founder</a></li>
                                            <li><a href="{{ route('migs-7-cross-7') }}">MIG's 7 Across 7</a></li>
                                        </ul>        
                                        </li>
                                    <li><a href="{{ route('projects.all') }}">Our Work</a></li>
                                    <li><a href="{{ route('team') }}">Our Team</a></li>
                                    <li><a href="{{ route('blogs.all') }}">News</a></li>
                                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                </ul>
                            </nav>
                            <div class="extras">
                                <a class="theme-btn" href="">Volunteer</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="responsive-bar">
        <div class="container">
            <div class="responsive-bar-slider">
                <a href="{{ route('homepage') }}">
                    <img alt="logo" src="/frontend/logo.jpeg" width="50px" height="50px" class="white-logo">
                    <img alt="logo" src="/frontend/logo.jpeg" width="70px" height="80px" class="black-logo">
                </a>
                <div class="bar-menu">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="mobile-nav hmburger-menu" id="mobile-nav" style="display:block;">
        <div class="res-log">
            <a href="{{ route('homepage') }}">
                <img src="/frontend/logo.jpeg" alt="Responsive Logo" width="70px" height="80px" class="white-logo">
                <img alt="logo" src="/frontend/logo.jpeg" width="70px" height="80px" class="black-logo">
            </a>
        </div>
        <ul>
            <li><a href="{{ route('homepage') }}">Home</a></li>
            <li><a href="JavaScript:void(0)">About Us</a>
                <ul>
                    <li><a href="{{ route('about') }}">Who We Are</a></li>
                    <li><a href="#">Our Founder</a></li>
                    <li><a href="{{ route('migs-7-cross-7') }}">MIG's 7 Across 7</a></li>
                </ul>        
                </li>
            <li><a href="{{ route('projects.all') }}">Our Work</a></li>
            <li><a href="">Get Involved</a></li>
            <li><a href="{{ route('blogs.all') }}">News</a></li>
            <li><a href="{{ route('contact') }}">Contact Us</a></li>
            {{-- <li><a href="">Donate</a></li> --}}
        </ul>

        <a href="JavaScript:void(0)" id="res-cross"></a>
    </div>
</header>

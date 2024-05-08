<header id="header-part">
    <!--====== header top PART START ======-->
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9">
                    <div class="meta text-center text-lg-left">
                        <ul class="top-info">
                            <li>
                               <a href="mailto:naveen.webadsmedia@gmail.com"> <i class="las la-envelope"></i> info@thedigitalcoders.com</a>
                            </li>
                            <li>
                                <i class="las la-map-marker"></i><a href="tel:+919888809222">+91
                                    98888-09222</a>(Enquiry)
                                <a href="tel:+919115911593">+91 9115-911593</a>(Support)<a href="tel:+919115789115">+91
                                    9115-789115</a>(Whatsapp)
                            </li>
                        </ul>
                    </div>
                    <!-- meta -->
                </div>
                <div class="col-lg-3">
                    <div class="social-icon text-center text-lg-right">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/thedigitalcoders"><i
                                        class="lab la-facebook-f"></i></a>
                            </li>

                            <li>
                                <a href="https://instagram.com/thedigitalcoders?igshid=N2ZiY2E3YmU="><i
                                        class="lab la-instagram"></i></a>
                        </ul>
                    </div>
                    <!-- social icon -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!--====== header top PART ENDS ======-->

    <!--====== HEADER MENU PART START ======-->

    <div class="header-nemu">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-9 order-last order-lg-first">
                    <nav class="navbar navbar-expand-lg">
                        <a href="/" class="navbar-brand pt-2 mt-1"><img
                                src="{{asset('assets/img/thedigalcoder.png')}}"
                                alt=""></a>
                        <!-- logo -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto" style="margin-left: 135px !important">
                                <li class="nav-item">
                                    <a class=" {{ (Request::is('/') ? 'active' : '') }}" href="/">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class=" {{ (Request::routeIs('about_us') ? 'active' : '') }}" href="{{route('about_us')}}">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class=" {{ (Request::routeIs('courses_list')||Request::routeIs('cours')||Request::routeIs('categories') ? 'active' : '') }}" href="{{route('courses_list')}}"> Courses </a>
                                </li>
                                <li class="nav-item">
                                    <a class=" {{ (Request::routeIs('contact_us') ? 'active' : '') }}" href="{{route('contact_us')}}">contact us</a>
                                </li>
                                <li class="nav-item" style="display: none">
                                    <a href="#">LogIn</a>
                                </li>
                                <li class="nav-item" style="display: none">
                                    <a href="#">Register</a>
                                </li> 
                            </ul>
                        </div>
                    </nav>
                    <!-- nav -->
                </div>
                <div class="col-lg-3 order-first order-lg-last">
                    <div class="search-icon text-right">
                    <a href="tel:+91-9888809222" class="call-btn"><i
                                class="las la-phone-volume"></i>+91-9888809222</a>
                        <!-- <a id="log" href="#"><i class="las la-user"></i> Log In</a>
                        <a id="sign" href="#"><i class="las la-user-plus"></i> Sign Up</a> -->
                    </div>
                    <!-- search icon -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
</header>
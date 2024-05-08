@extends('forntend-pro.admin')
@section('content')
<section id="slider-part" class="slider-active">
    <div class="single-slider bg_cover d-flex align-items-center"
        style="background-image: url({{asset('assets/img/background.jpg')}})">
        <div class="container">
            <div class="row align-items-center" style='justify-content:space-between;'>
                <div class="col-lg-6 col-md-10">
                    <div class="slider-content" style="text-align:left;">
                        <h2 class="mb-25" data-animation="bounceInLeft" data-delay="1s" style="animation-delay: 1s">
                            <span>Learn</span><br> Website Designing & Digital Marketing
                        </h2>
                        <p class="mb-30" data-animation="fadeInLeft" data-delay="1.5s" style="animation-delay: 1.5s">
                            The Digital Coders is an Informational Technology Education &amp; Development programme
                            registered by the ministry of MSME, Govt. of India. It is a venture of Brute Ventures Pvt
                            Ltd.
                        </p>

                        <a href="#" class="main-btn" data-animation="fadeInUp" data-delay="2s" tabindex="-1"
                            style="animation-delay: 2s">CONTACT
                            US</a>
                        <a href="tel:+91-9888809222" class="call-btn"><i
                                class="las la-phone-volume"></i>+91-9888809222</a>
                    </div>
                    <!-- slider content -->
                </div>
                <div class="col-lg-4 col-md-10">
                    <div class="book-top">
                        <h3>Request A Call Back</h3>
                        <p>ENQUIRE ABOUT A COURSE</p>
                        <form action="{{route('contact.form')}}" class="shedule-visit" method="post"
                            accept-charset="utf-8">
                            @csrf
                            <input type="text" name="name" placeholder="Full Name" required="">
                            <input type="text" name="phone" placeholder="Phone Number" required="">
                            <input type="text" name="email" placeholder="Email" required="">

                            <textarea name="message" placeholder="Your Message"></textarea>

                            <!-- <div class="g-recaptcha" data-sitekey="6Lfi6N4nAAAAADV3RNhFKZi-kMCNCVgWBJlJNY65">
                            </div> -->
                            <!-- <input type="hidden" name="shedule_visit" value="shedule_visit"> -->
                            <input type="submit" name="save" class="send-message" value="SUBMIT NOW">
                        </form>
                    </div>
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- single slider -->


    <!-- single slider -->
</section>

<div class="section-part category-section">
    <div class="container">
        <div class="row ">
            <div class="col-md-3 col-6">
                <div class="singel-features d-flex align-items-start mt-30 justify-content-center">
                    <a href="#">
                        <div class="icon mr-3">
                            <img src="{{asset('assets/img/badge.png')}}">
                        </div>
                    </a>
                    <div class="category-txt">
                        <h5>ISO 9001 Certified</h5>
                        <span>Google Certified</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="singel-features d-flex align-items-start mt-30 justify-content-center">
                    <a href="#">
                        <div class="icon mr-3">
                            <img src="{{asset('assets/img/badge.png')}}">
                        </div>
                    </a>
                    <div class="category-txt">
                        <h5>Internship Available</h5>
                        <p>Live Project Training</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="singel-features d-flex align-items-start mt-30 justify-content-center">
                    <a href="#">
                        <div class="icon mr-3">
                            <img src="{{asset('assets/img/badge.png')}}">
                        </div>
                    </a>
                    <div class="category-txt">
                        <h5>Training Certificate</h5>
                        <p>Experience Certificate</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="singel-features d-flex align-items-start mt-30 justify-content-center">
                    <a href="#">
                        <div class="icon mr-3">
                            <img src="{{asset('assets/img/badge.png')}}">
                        </div>
                    </a>
                    <div class="category-txt">
                        <h5>10+ Years Experince</h5>
                        <p>International Seminar's</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="about-part-2" class="about-part-2 pt-120 pb-120">
    <div class="pattern-layer" style="background-image: url({{asset('assets/img/pattern2.png')}})"></div>
    <div class="pattern-layer-two" style="background-image: url({{asset('assets/img/pattern.png')}})"></div>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-6">
                <div class="about-2-bg bg_cover d-none d-lg-block">
                    <img src="{{asset('assets/img/bg-3.png')}}">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-2-content">
                    <h3 class="mb-20">About The Digital Coders</h3>
                    <p>
                        The Digital Coders is the professional IT Institute of India,
                        where students can learn job-oriented Professional IT courses.
                        We are providing world-class education with the latest
                        technology in the sector of Information Technology. The Digital
                        Coders is a group of experienced IT professionals.
                    </p>
                    <br>
                    <p style="padding-bottom: 12px">
                        Our students will work on live projects under the senior
                        programmer's guidance. As result, our students will make
                        mistakes on real projects and learn how to fix them. This will
                        make them confident to do any sort of project.
                    </p>

                    <ul>
                        <li>
                            <i class="las la-check-circle"></i> Job Oriented Courses
                        </li>
                        <li><i class="las la-check-circle"></i> ISO Certified</li>
                        <li>
                            <i class="las la-check-circle"></i> Step-By-Step Learning
                        </li>
                        <li>
                            <i class="las la-check-circle"></i> Training On Live Projects
                        </li>
                    </ul>
                    <a href="#" class="mt-20 main-btn">Read More</a>
                </div>
                <!-- about 2 content -->
            </div>
        </div>
        <!-- row -->
    </div>
    <!-- container -->
</section>
<!-- 
<div class="section-part category-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-bar">
                    <div class="title-txt">
                        <h3>Categories</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="title-btn">
                        <a href="#">Explore More</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="row mt-4">
            @foreach($categories as $category)

            <div class="col-md-2 col-6">
                <div class="category-box">
                    <a href="#">
                        <div class="category-icon">
                            <i class="las la-laptop"></i>
                        </div>
                        <div class="category-txt">
                            <h3>{{$category->title}}</h3>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach

        </div>

    </div>


 -->

<section id="latest-news" class="pt-100 pb-100 pt-5 pb-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center pb-20">
                    <h3 style="color:#fff;">Our Courses</h3>
                    <div class="underline">
                        <span></span>
                        <span></span>
                    </div>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->


        <div class="row mt-4">
            @foreach($courses as $cours)
            <div class="col-md-4">
            <form  method="POST" action="{{route('payment')}}"  enctype="multipart/form-data">
                @csrf
                <div class="course-box mb-4">
                    <div class="course-img">
                        <img src="{{asset('img/'.$cours->photo)}}" class="img-fluid w-100">
                    </div>
                    <div class="course-content">
                        <!-- <span><a href="#">Category</a></span> -->
                        <h1><a href="#"> {{$cours->title}}</a></h1>
                        <p>{!!Str::words($cours->discription,8)!!} </p>
                        <div class="crouse-info">
                            <div class="duration">
                                <i class="las la-clock"></i>
                                <h5>{{$cours->duration}}</h5>
                            </div>
                            <!-- <div class="reviews">
                                <i class="las la-star"></i>
                                <h5>4.5 Reviews</h5>
                            </div> -->
                            <div class="lessons">
                            <i class="las la-star"></i>
                                <h5>4.5 Reviews</h5>
                            </div>

                        </div>

                        <div class="course-action">
                            <div class="course-price">
                            
                                <div class="buy-btn">
                                <del>₹{{$cours->price}} </del>
                                <strong>  ₹{{$cours->discount_price}}</strong>
                                </div>
                                <!-- <p class="price text-right d-inline-block float-end"> -->
                                <!-- <del>₹{{$cours->price}}</del> -->
                                <!-- <strong>₹{{$cours->discount_price}}</strong> -->
                                <!-- </p> -->
                            </div>
                            <!-- <div class="buy-btn">
                                    <a href="{{route('cours',['slug'=>$cours->slug])}}">View Detail<i
                                            class="las la-arrow-right"></i></a>
                                </div> -->
                            <div class="buy-btn">
                            <a href="{{route('cours',['slug'=>$cours->slug])}}">View Detail<i
                                            class="las la-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
            @endforeach

        </div>
        <div class="row justify-content-center mt-2 mb-4">
            <div classs="col-md-12">
                <div class="buy-btn">
                    <a href="{{route('courses_list')}}">View more</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <div class="blog-section">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="title-bar">
                        <div class="title-txt">
                            <h3>Latest <span>Blogs</span></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> 
                        </div>
                        <div class="title-btn">
                            <a href="#">Explore More</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row mt-4">
                @foreach($blogs as $blog)
                <div class="col-md-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img src="{{asset('img/'.$blog->photo)}}" class="img-fluid w-100">
                        </div>
                        <div class="blog-content">
                            <span> {{$blog->category->title}}</span>
                            <h1><a href="#"> {{$blog->title}}</a></h1>
                            <ul>
                                <li>
                                    <i class="las la-user"></i> by admins
                                </li>

                                <li>
                                    <i class="las la-calendar"></i> {{$blog->created_at}}
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div> -->
<div class="review-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-bar justify-content-center">
                    <div class="title-txt  ">
                        <h3>What Says Our Students</h3>
                    </div>
                    <!-- <div class="title-btn">
                            <a href="#">Explore More</a>
                        </div> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators dots">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner testimonials">
                        @foreach($testimonials as $key=>$test)
                        <div class="carousel-item @if($key==0) active @endif">
                            <div class="carousel-caption d-md-block review-block">
                                <div class="user-profile">
                                    <img src="{{asset('img/'.$test->photo)}}">
                                </div>

                                <div class="user-content">
                                    <h5>{{$test->title}}</h5>
                                    <ul class="ratings">
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>

                                        <li><i class="las la-star"></i></li>

                                        <li><i class="las la-star"></i></li>

                                        <li><i class="las la-star"></i></li>

                                    </ul>
                                    <p>{{$test->description}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- <div class="carousel-item">
                                <div class="carousel-caption d-md-block review-block">
                                    <div class="user-profile">
                                        <img src="assets/img/user.jpeg">
                                    </div>

                                    <div class="user-content">
                                        <h5>Jolly Doe</h5>
                                        <ul class="ratings">
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>

                                            <li><i class="las la-star"></i></li>

                                            <li><i class="las la-star"></i></li>

                                            <li><i class="las la-star"></i></li>

                                        </ul>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa possimus
                                            veniam
                                            nostrum earum nemo cupiditate placeat perspiciatis sunt ipsa voluptates
                                            dicta,
                                            nostrum earum nemo cupiditate placeat perspiciatis sunt
                                            ipsa voluptates dicta cumque quas sed magni doloribus ipsum architecto
                                            reprehenderit natus?</p>
                                    </div>
                                </div>
                            </div> -->

                    </div>

                    <div class="d-none">
                        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </button>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
</div>
<!-- <div class="cta-action">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                <h3>
                    Become An Instructor! Hurry
                </h3>
            </div>
            <div class="col-md-4 text-right">
                <a href="#" class="join-btn">Register Now</a>
            </div>
        </div>
    </div>
</div> -->
@endsection
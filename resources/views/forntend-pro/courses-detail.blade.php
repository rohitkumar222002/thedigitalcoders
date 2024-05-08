@extends('forntend-pro.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
        <h1 class="course-title title-font">{{$courses->title}}</h1>
            <div class="course-left">
                <div class="course-img">
                    <img src="{{asset('img/'.$courses->photo)}}" class="w-100 img-fluid">
                </div>
                <div class="course-author">
                    <h1 class="course-title">{{$courses->title}}</h1>
                    <div class="course-structure">
                        <!-- <div class="teacher">
                            <img src="assets/img/user.jpeg">
                            <h3>John Doe</h3>
                        </div> -->
                        <div class="course-bb">
                            <div class="duration-time">
                                <i class="las la-clock"></i>
                                <h3>{{$courses->duration}}</h3>
                            </div>
                        <div class="re-view">
                                <i class="las la-star"></i>
                                <h3>4.5 Reviews</h3>
                            </div>
                            <div class="level">
                                <i class="las la-level-up-alt"></i>
                                <h3>Advanced</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="decription">
                    <p>{!!$courses->discription!!}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
        <div class="course-right">
        <div class="book-top">
                        <h3>Request A Call Back</h3>
                        <p>ENQUIRE ABOUT A COURSE</p>
                        <form action="#" class="shedule-visit" method="post" accept-charset="utf-8">

                            <input type="text" name="name" placeholder="Full Name" required="">
                            <input type="text" name="phone" placeholder="Phone Number" required="">
                            <input type="text" name="email" placeholder="Email" required="">

                            <textarea name="message" placeholder="Your Message"></textarea>

                            <div class="g-recaptcha" data-sitekey="6Lfi6N4nAAAAADV3RNhFKZi-kMCNCVgWBJlJNY65">
                            </div>


                            <input type="hidden" name="shedule_visit" value="shedule_visit">
                            <input type="submit" name="sendmessage" class="send-message" value="SUBMIT NOW">
                        </form>
                    </div>

                <div class="playlist-title mt-5">
                    <h3 class="mt-0">Search Course</h3>
                </div>
                <form class="serch-type">
                    <input type="text" placeholder="Search">
                    <button><i class="las la-search"></i></button>
                </form>

                <div class="playlist-title mt-4">
                    <h3 class="mt-0">Latest Courses</h3>
                </div>
                <div class="latest-box mb-3">
                    <div class="latest-box-img">
                        <img src="assets/img/courses/course.jpeg">
                    </div>
                    <div class="latest-box-content">
                        <h5><a href="#"> Heading Tags</a></h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>

                <div class="latest-box mb-3">
                    <div class="latest-box-img">
                        <img src="assets/img/courses/course.jpeg">
                    </div>
                    <div class="latest-box-content">
                        <h5><a href="#"> Heading Tags</a></h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="latest-box">
                    <div class="latest-box-img">
                        <img src="assets/img/courses/course.jpeg">
                    </div>
                    <div class="latest-box-content">
                        <h5><a href="#"> Heading Tags</a></h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
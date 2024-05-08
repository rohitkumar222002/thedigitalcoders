@extends('forntend-pro.admin')
@section('content')
<section id="page-banner" class="bg_cover pt-50 pb-40" style="    background: #000; border-top: 1px solid #2a2a2a;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-content text-left">
                    <h2>About Us</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-left">
                            <li class="breadcrumb-item"><a href="/">
                                    Home </a></li>
                            <li class="breadcrumb-item active" aria-current="page">About us</li>
                        </ol>
                    </nav>
                </div> <!-- page banner content -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>
<section id="about-part-2" class="about-part-2 pt-120 pb-120">
    <div class="pattern-layer"
        style="background-image:url({{asset('img/pattern2.png')}})"></div>
    <div class="pattern-layer-two"
        style="background-image:url({{asset('img/pattern.png')}})"></div>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-12">
                <div class="about-2-content">
                    <p></p>
                    <h3 xss="removed"><span xss="removed">Welcome to Academy. It will help you to learn in a new
                            ways.</span><br></h3>
                    <p xss="removed"><span xss="removed"><span xss="removed"><span xss="removed">The Digital Coders is a
                                    professional IT institute. Here we provide you world-class education with the latest
                                    technology in the sector of Information Technology. </span><span xss="removed">The
                                    Digital Coders was founded with the aim of providing job-oriented Professional IT
                                    courses like web designing, web development, digital marketing, Google Ads, Facebook
                                    Ads, etc. Now days these&nbsp;</span></span><span xss="removed">courses are in high
                                demand.</span><span xss="removed">We have a team of highly qualified and experienced IT
                                professionals who are always ready to help our students in every way possible
                                and&nbsp;</span><span xss="removed">will make them confident to do any sort of
                                project.&nbsp;</span></span></p>
                    <p xss="removed"><span xss="removed"><span xss="removed">We believe in the practical orientation of
                                each student who joins our courses.That’s why we strive extremely hard to ensure each
                                student has gain practical skills in their field. Practical skills will impact Student's
                                journey by two-fold. One he/she will be able to join any company of their own choice and
                                add value there. Secondly, he/she can start a solo career by offering services to this
                                huge market as a freelancer.</span></span></p>
                    <p xss="removed"><span xss="removed"><span xss="removed"><br></span></span></p>
                    <h3 xss="removed"><span xss="removed">Advantages of Joining The Digital Coders</span></h3>
                    <ul>
                        <li xss="removed"><span xss="removed">100% Training on Live Projects for All Courses.</span>
                        </li>
                        <li xss="removed"><span xss="removed">10+ years of Experience in IT Education, Web Development
                                and Digital Marketing.</span></li>
                        <li xss="removed"><span xss="removed">100% Focused on Job Oriented Training &amp; Skill
                                Development.</span></li>
                        <li xss="removed"><span xss="removed">All Courses are Designed with Advance Technologies and
                                Contents.&nbsp;</span><br></li>
                        <li xss="removed">Training by Trainers having 15+ Year's of Experience.</li>
                        <li xss="removed">We conduct doubt clearing sessions to leave no space for any sort of doubt in
                            the student.<br></li>
                        <li xss="removed"><span xss="removed">ISO 9001 Certified.&nbsp;</span></li>
                        <li xss="removed"><span xss="removed">Get Upto 1 Year's Experience Letter of Live work as a
                                Employee in Company.</span></li>
                        <li xss="removed"><span xss="removed">Interview Preparation&nbsp;and Placement
                                Assistance.</span></li>
                        <li>
                            <div xss="removed">Training Certificate&nbsp;would be given to all the Candidates.</div>
                            <div xss="removed"><br></div>
                        </li>
                    </ul>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="counter-part-3" class="bg_cover pt-80 pb-120"
    style="background-image: url({{asset('img/bg-4.jpg')}})" data-overlay="5">



    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-counter-3 text-center pt-50">
                    <div class="icon mb-25">
                        <i class="flaticon-emoji"></i>
                    </div>
                    <div class="content-aboutus">
                        <span><span class="counter">50</span>+</span>
                        <p class="mt-15">Students</p>
                    </div>
                </div> <!-- single counter 3 -->
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-counter-3 text-center pt-50">
                    <div class="icon mb-25">
                        <i class="flaticon-experiment-results"></i>
                    </div>
                    <div class="content-aboutus">
                        <span><span class="counter">7</span>+</span>
                        <p class="mt-15">Years of experience</p>
                    </div>
                </div> <!-- single counter 3 -->
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-counter-3 text-center pt-50">
                    <div class="icon mb-25">
                        <i class="flaticon-briefing"></i>
                    </div>
                    <div class="content-aboutus">
                       <span class="">Live</span>
                            <p class="mt-15">Project Training</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-counter-3 text-center pt-50">
                    <div class="icon mb-25">
                        <i class="flaticon-quality"></i>
                    </div>
                    <div class="content-aboutus">
                        <span class="">ISO</span>
                        <p class="mt-15">Certified Company</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
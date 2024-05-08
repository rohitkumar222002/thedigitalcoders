@extends('forntend-pro.admin')
@section('content')
<section id="page-banner" class="bg_cover pt-50 pb-40" style="background: #000; border-top: 1px solid #2a2a2a;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-4 mb-5">
                <div class="page-banner-content text-left">
                    <h2>Courses</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-left">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Courses </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="latest-news" class="pt-100 pb-100 pt-5 ">
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
        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="project-menu text-center pt-25 ">
                    <ul id="categories">
                        
                        <li data-value="all" class="{{ (Request::routeIs('courses_list') ? 'active' : '') }}"><a class="{{ (Request::routeIs('courses_list') ? 'active' : '') }}" href="{{route('courses_list')}}">All</a></li>
                        @foreach($categories as $cat)
                        <li data-value="web-development" class="{{request()->segment(count(request()->segments()))==$cat->slug ? 'active':''}}">
                            <a class="{{request()->segment(count(request()->segments()))==$cat->slug ? 'active':''}}" href="{{route('categories',['slug'=>$cat->slug])}}">
                                {{$cat->title}} </a></li>
                        @endforeach
                    </ul>
                </div> <!-- project menu -->
            </div>
        </div>
        <div class="row grid">
            @foreach($courses as $cours)
            <div class="col-md-4 mb-2">
                <div class="course-box">
                    <div class="course-img">
                        <img src="{{asset('img/'.$cours->photo)}}" class="img-fluid w-100">

                    </div>
                    <div class="course-content">
                        <!-- <span><a href="#">Category</a></span> -->
                        <h1><a href="#"> {{$cours->title}}</a></h1>
                        <p>{!!Str::words($cours->discription,9)!!} </p>
                        <div class="crouse-info">
                            <div class="duration">
                                <i class="las la-clock"></i>
                                <h5>{{$cours->duration}}</h5>
                            </div>
                            <div class="lessons">
                                <i class="las la-video"></i>
                                <h5>5 lessons</h5>
                            </div>
                            <div class="reviews">
                                <i class="las la-star"></i>
                                <h5>4.5 Reviews</h5>
                            </div>
                        </div>

                        <div class="course-action">
                            <div class="course-price">
                                <p class="price text-right d-inline-block float-end">
                                    <del>₹{{$cours->price}}</del>
                                    <strong>₹{{$cours->discount_price}}</strong>
                                </p>
                            </div>

                            <div class="buy-btn">
                                <a href="{{route('cours',['slug'=>$cours->slug])}}">View Detail<i
                                        class="las la-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
            <!-- <nav> -->

            <!-- <ul class="pagination justify-content-center">
                    <li class="page-item active disabled"> <span class="page-link">1</span></li>
                    <li class="page-item"><a href=""
                            data-ci-pagination-page="2">2</a></li>
                    <li class="page-item"><a href=""
                            data-ci-pagination-page="2" rel="next"><i class="fas fa-chevron-right"></i></a></li>
                </ul> -->
            <!-- </nav> -->

        </div>
    </div>
</section>



@endsection
@extends('forntend-pro.admin')
@section('content')
<section id="page-banner" class="bg_cover pt-50 pb-40" style="    background: #000; border-top: 1px solid #2a2a2a;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-content text-left">
                    <h2>Contact Us</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-left">
                            <li class="breadcrumb-item"><a href="/">
                                    Home                                </a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                    </nav>
                </div> <!-- page banner content -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>
<section class=" pb-40">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="single-contact text-center mt-85">
                    <div class="icon mb-25">
                        <i class="las la-map-marker-alt"></i>
                    </div>
                    <div class="contentt">
                        <h4 class="mb-15" style="color:#f3cf3d;">Address</h4>
                        <p> 3rd Floor, Fatehpur Bridge, Near Fatehpur Bus Stand, Yol Road, Dharamshala</p>
                    </div>
                </div> <!-- single contact -->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="single-contact text-center mt-85">
                    <div class="icon mb-25">
                        <i class="las la-envelope"></i>
                    </div>
                    <div class="contentt">
                        <h4 class="mb-15" style="color:#f3cf3d;">Email</h4>
                        <p>info@thedigitalcoders.com</p>
                        <p>support@thedigitalcoders.com</p>
                    </div>
                </div> <!-- single contact -->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="single-contact text-center mt-85">
                    <div class="icon mb-25">
                        <i class="las la-phone"></i>
                    </div>
                    <div class="contentt">
                        <h4 class="mb-15" style="color:#f3cf3d;">Phone</h4>
                        <p>+91 98888-09222</p>
                        <p>+91 85560-99533</p>
                        <p>+91 91157-89115</p>
                    </div>
                </div> <!-- single contact -->
            </div>
        </div> <!-- row -->
        <section class="pt-80 pb-80">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-lg-left">
                    <div class="contact-content">
                        <h3 class="mb-20">About <span>The Digital Coders </span></h3>
                        <p class="mb-20">

                            The Digital Coders<br>
                            3rd Floor, Fatehpur Bridge, Near Fatehpur Bus Stand, Yol Road, Dharamshala</p>
                    </div> <!-- Contact content -->
                </div>
                <div class="col-lg-6 text-lg-center">
                    <div class="contact-form mt-20">
                                <form action="{{route('contact.form')}}" id="contact-form" method="post" accept-charset="utf-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input type="text" name="name" value="" placeholder="Your name" id="name" required="required"  />
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input type="text" name="email" value="" placeholder="Email" id="email" required="required"  />
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input type="text" name="subject" value="" placeholder="Subject" id="subject" required="required"  />
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input name="phone" type="text" placeholder="Phone" data-error="Phone is required." required="required">
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-12">
                                    <div class="single-form form-group">
                                        <textarea name="message" cols="40" rows="10" id="message" ></textarea>
                                    </div>
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="single-form">
                                        <button type="submit" class="main-btn">Submit</button>
                                    </div> <!-- single form -->
                                </div>
                            </div> <!-- row -->
                        </form>                    </div> <!-- contact form -->
                </div>
            </div> <!-- row -->
        </section>
    </div> <!-- container -->
</section>
<section id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13506.058912319075!2d76.3564391!3d32.1903582!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391b51802a0316e1%3A0x5ebb1e095e746d9d!2sThe%20Digital%20Coders%20-%20Computer%20Institute%20in%20Dharamshala!5e0!3m2!1sen!2sin!4v1679661366777!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

@endsection
@extends('frontend.layouts.app')
@section('pageTitle','Contact Us')
@section('content')

    <!-- page banner start -->
    <div class="page-banner-area bgs-cover overlay text-white py-165 rpy-125 rmt-65"
        style="background-image: url(/frontend/img/background/page-banner.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="breadcrumb-inner text-center">
                        <h2 class="page-title">Contact Us</h2>
                        <ul class="page-list">
                            <li><a href="{{ route('homepage') }}">Home</a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page banner end -->


    <!-- Contact page area start -->
    <div class="contact-page-area overflow-hidden py-120 rpt-100">
        <div class="container">
            <div class="row gap-60 align-items-center">
                <div class="col-lg-6">
                    <div class="faq-three-left-part mb-20 rel rmb-75">
                        <img src="/frontend/image3.jpeg" alt="Man">
                        <div class="experiences-years">
                            <span class="experiences-years__number">5</span>
                            <span class="experiences-years__text">Years Experiences</span>
                        </div>
                        <div class="counter-item counter-text-wrap">
                            <div class="counter-item__content">
                                <span class="count-text" data-speed="3000" data-stop="80000">0</span>
                                <h5 class="counter-title">Volunteers</h5>
                            </div>
                        </div>
                        <div class="project-complete">
                            <div class="project-complete__icon">
                                <i class="flaticon-charity"></i>
                            </div>
                            <div class="project-complete__content">
                                <h5>We Complate 10+ Project</h5>
                                <span>Donet for charity</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-page-form form-style-two py-110 rpy-85">
                        <div class="section-title mb-10">
                            <span class="section-title__subtitle mb-10">Need help</span>
                            <h3>Get In touch</h3>
                        </div>
                        <form action="#">
                            <div class="row">
                                <div class="col-xl-9 mb-10">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt</p>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Your Name</label>
                                        <input type="text" id="name" name="name" class="form-control" value=""
                                            placeholder="Your Name" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Your Email</label>
                                        <input type="email" id="email" name="email" class="form-control" value=""
                                            placeholder="Email Address" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phone_number">Phone Number</label>
                                        <input type="text" id="phone_number" name="phone_number" class="form-control"
                                            value="" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phone_number">Date Of Birth</label>
                                        <input type="date" id="birth-day" name="birth-day" class="form-control"
                                            value="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea name="message" id="message" class="form-control" rows="2"
                                            placeholder="Write Your Messages" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group pt-10 mb-0">
                                        <button type="submit" class="btn ml-5">Send us a message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact page area end -->


    <!-- Contact Info area start -->
    <div class="contact-info-area pb-85">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4 col-sm-6">
                    <div class="contact-info-item contact-info-item--green">
                        <div class="contact-info__icon"><i class="flaticon-phone-call"></i></div>
                        <h5>Phone Number</h5>
                        <div class="contact-info__text">
                            <a href="callto:+2347036100364">+ (234) 703 610 0364</a><br>
                            <a href="callto:+2347066744074">+ (234) 706 674 4074</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="contact-info-item contact-info-item--yellow">
                        <div class="contact-info__icon"><i class="fas fa-paper-plane"></i></div>
                        <h5>Email Address</h5>
                        <div class="contact-info__text">
                            <a href="mailto:info@elhabibfoundation.com">info@elhabibfoundation.com</a><br>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="contact-info-item">
                        <div class="contact-info__icon"><i class="flaticon-pin"></i></div>
                        <h5>Offce address</h5>
                        <div class="contact-info__text">
                            NO. 12, KOFAR YAMMA NEAR POLICE STATION,<br> BAUCHI, NIGERIA
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Info area end -->


    <!-- Location Map Area Start -->
    <div class="contact-page-map wow fadeInUp delay-0-2s">
        <div class="our-location">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1847.1317136662901!2d10.46171868625552!3d11.315240797117779!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x11aa7aeaae052ff3%3A0x58c5e4d975911453!2sPolice%20Station!5e0!3m2!1sen!2sng!4v1694158690486!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <!-- Location Map Area End -->

@endsection
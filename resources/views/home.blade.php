@php($title = "Plastic & Reconstructive Surgeon Dr. Vinay Jacob")
@section('meta_desc') @endsection

@extends('layouts.default')
@section('content')

<main>

    <video id="carouselExampleControls" width="100%" autoplay="" muted="" loop="">
        <source src="{{ asset('/resources/assets/img/service-video-2.mp4')}}" type="video/mp4">
    </video>

    <div class="about-area about-area-1 mb-60">
        <div class="container">
            <div class="row g-0 align-items-center">
                <div class="col-xl d-none d-md-block">
                    <div class="about-area__wrapper">
                        <!-- <div class="about__img">
                            <img src="{{ asset('/resources/assets/img/about/a1.png')}}" alt="">
                        </div>
                        <div class="about__img">
                            <img class="mt-60" src="{{ asset('/resources/assets/img/about/a2.png')}}" alt="">
                        </div> -->
                        <img class="mt-60" src="{{ asset('/resources/assets/img/dr-vinay.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-2 d-mob" style="display: none;">
                    <img class="img-fluid mt-40 mb-20" src="{{ asset('/resources/assets/img/dr-vinay.png')}}" alt="">
                </div>
                <div class="col-xl col-md-10">
                    <div class="about__text pl-80 about__text-5">
                        <div class="generic-title">
                            <span>About Doctor</span>
                            <h4>Dr. Vinay Jacob</h4>
                            <p class="degree">MBBS, MS, MCh, DNB Plastic, Aesthetic, Reconstructive, Hand and Micro
                                Surgeon</p>
                        </div>
                        <p class="desc pt-10">Dr. Vinay Jacob is a qualified and accomplished Senior Plastic Surgeon
                            practicing at the Bombay Hospital Institute of Medical Sciences at Mumbai in India. He
                            achieved his Bachelor’s degree in Medicine and Surgery (MBBS) in 1991 from the leading
                            Indian Institute of St. Johns Medical College at Bangalore in 1991, and subsequently his
                            Master in Surgery (MS) from the renowned and internationally acclaimed Tata Memorial
                            Hospital at Mumbai in 1996.</p>
                        <div class="about__list about__list-1 mt-15">
                            <ul>
                                <li>
                                    <i class="fal fa-check"></i>
                                    <h6 class="mr-50">Aesthetic & Reconstructive</h6>
                                </li>
                                <li>
                                    <i class="fal fa-check"></i>
                                    <h6>Plastic Surgery</h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="service service-area-1 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 offset-xl-4">
                    <div class="generic-title text-center">
                        <span>We Treat</span>
                        <h4>Our Procedures</h4>
                    </div>
                </div>
            </div>
            <div class="row g-0 justify-content-center">
                <div class="col-xl col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="service__box mb-30 text-center">
                        <div class="service__icon mb-15">
                            <i class="glyph-icon flaticon-abdominoplasty"></i>
                        </div>
                        <div class="service__text">
                            <h4>Liposuction</h4>
                            <p>Transform your body with precision and artistry under Dr. Vinay Jacob's expert hands.
                                Discover the new you through the beauty of liposuction.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="service__box mb-30 text-center">
                        <div class="service__icon mb-15">
                            <i class="glyph-icon flaticon-aesthetic-3"></i>
                        </div>
                        <div class="service__text">
                            <h4>Buttock Lift</h4>
                            <p>Elevate your confidence with a sculpted silhouette by Dr. Vinay Jacob. Experience the art
                                of Buttock Lift, where beauty meets expertise.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="service__box mb-30 text-center">
                        <div class="service__icon mb-15">
                            <i class="glyph-icon flaticon-asymmetry"></i>
                        </div>
                        <div class="service__text">
                            <h4>Breast Implant</h4>
                            <p>Enhance your allure with Dr. Vinay Jacob's mastery in Breast Implants. Unveil the beauty
                                you've always desired.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="service__box mb-30 text-center">
                        <div class="service__icon mb-15">
                            <i class="glyph-icon flaticon-anatomy"></i>
                        </div>
                        <div class="service__text">
                            <h4>Eyebrow Lift</h4>
                            <p>Elevate your gaze with Dr. Vinay Jacob's precision. Rediscover the allure of your eyes
                                through our Eyebrow Lift service.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="service__box mb-30 text-center border-0">
                        <div class="service__icon mb-15">
                            <i class="glyph-icon flaticon-beauty"></i>
                        </div>
                        <div class="service__text">
                            <h4>Face Lift</h4>
                            <p>Rediscover your timeless beauty with Dr. Vinay Jacob. Elevate your appearance with a
                                masterful Face Lift, unveiling your radiant youth.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="service service-area-1 mb-60">
        <div class="container">
            <div class="row g-0 justify-content-center">
                <div class="col-lg-4 mt-2">
                    <div class="generic-title">
                        <span>We offer</span>
                        <h4>Our Services</h4>
                        <p class="degree">Dr. Vinay Jacob is a qualified and accomplished Senior Plastic Surgeon
                            practicing at the Bombay Hospital Institute of Medical Sciences at Mumbai in India. He has
                            extensive experience in the following reconstructive and aesthetic surgery procedures.</p>
                    </div>
                </div>
                <div class="col-lg-4 proc-box mt-2">
                    <img class="proc-img" src="{{ asset('/resources/assets/img/service/hair.jpg')}}" alt="">

                    <h4 class="proc-name">Hair</h4>
                </div>
                <div class="col-lg-4 proc-box mt-2">
                    <img class="proc-img" src="{{ asset('/resources/assets/img/service/breast.jpg')}}" alt="">

                    <h4 class="proc-name">Breast</h4>
                </div>
                <div class="col-lg-4 proc-box mt-2">
                    <img class="proc-img" src="{{ asset('/resources/assets/img/service/body.jpg')}}" alt="">

                    <h4 class="proc-name">Body</h4>
                </div>
                <div class="col-lg-4 proc-box mt-2">
                    <img class="proc-img" src="{{ asset('/resources/assets/img/service/face.jpg')}}" alt="">

                    <h4 class="proc-name">Face</h4>
                </div>
                <div class="col-lg-4 proc-box mt-2">
                    <img class="proc-img" src="{{ asset('/resources/assets/img/service/reconstructive.jpg')}}" alt="">

                    <h4 class="proc-name">Reconstructive</h4>
                </div>
            </div>
        </div>
    </div>

    <div id="testimonial" class="testimonial-area testimonial-area__4 mb-60">
        <div class="container">
            <div class="testimonial-wrapper">
                <div class="row mb-30">
                    <div class="col-xl-4 offset-xl-4">
                        <div class="generic-title text-center">
                            <span>Testimonials</span>
                            <h4>Patient Reviews</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-8 col-xl-8 col-lg-7">
                        <div class="testimonial__active-4">
                            <div class="single-testimonial-4">
                                <div class="view-rating">
                                    <h6>Execellent -</h6>
                                    <i class="fal fa-star active"></i>
                                    <i class="fal fa-star active"></i>
                                    <i class="fal fa-star active"></i>
                                    <i class="fal fa-star active"></i>
                                </div>
                                <div class="testimonial__text">
                                    <p>“ Had a wonderful experience right from the
                                        1st appointment to all the follow-ups !
                                        Outstanding results as committed by Dr.Jacob. Dr.Jacob and
                                        his staff were very
                                        friendly and co-operative. Very homely feeling and were
                                        always concerned about my
                                        wellness even after the surgery . Even the clinic is Very
                                        well organised and also
                                        very hygienic. Special mentions for Vandana mam, Kranti Mam,
                                        Shantaram sir, Abhishek
                                        and Ganeshji..I thank you from the bottom of my heart. Loved
                                        the whole experience.
                                        Thank you Dr. Vinay Jacob sir for everything.. cheers 👍 “</p>
                                </div>
                            </div>
                            <div class="single-testimonial-4">
                                <div class="view-rating">
                                    <h6>Execellent -</h6>
                                    <i class="fal fa-star active"></i>
                                    <i class="fal fa-star active"></i>
                                    <i class="fal fa-star active"></i>
                                    <i class="fal fa-star active"></i>
                                </div>
                                <div class="testimonial__text">
                                    <p>“ I am very glad to be meeting Dr. Vinay
                                        Jacobs and his team for my surgeries of
                                        rhinoplasty and septoplasty, an issue that I was facing from
                                        birth.
                                        One should seek out the service of Dr. Vinay and his team
                                        for his wonderfull work.
                                        Thank you so much for the diffrences you make in the lives
                                        of your patients!
                                        Surely the best surgeons in india.! “</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__tab-4 mt-40 mb-40">
                            <div class="testimonial__tab-active testimonial__tab-4-wrapper">
                                <div class="single-testimonial-item d-flex align-items-center">
                                    <div class="testimonial__thumb-4">
                                        <img src="{{ asset('/resources/assets/img/google.png')}}" alt="">
                                    </div>
                                    <div class="testimonial__text-4">
                                        <h5>Mayuresh Pem</h5>
                                        <!-- <p>Creative Director at <span>Envato LLC</span></p> -->
                                    </div>
                                </div>
                                <div class="single-testimonial-item d-flex align-items-center">
                                    <div class="testimonial__thumb-4">
                                        <img src="{{ asset('/resources/assets/img/google.png')}}" alt="">
                                    </div>
                                    <div class="testimonial__text-4">
                                        <h5>Fatima Jaffer</h5>
                                        <!-- <p>Creative Director at <span>Envato LLC</span></p> -->
                                    </div>
                                </div>
                                <div class="single-testimonial-item d-flex align-items-center">
                                    <div class="testimonial__thumb-4">
                                        <img src="{{ asset('/resources/assets/img/google.png')}}" alt="">
                                    </div>
                                    <div class="testimonial__text-4">
                                        <h5>Daksh Rana</h5>
                                        <!-- <p>Creative Director at <span>Envato LLC</span></p> -->
                                    </div>
                                </div>
                                <div class="single-testimonial-item d-flex align-items-center">
                                    <div class="testimonial__thumb-4">
                                        <img src="{{ asset('/resources/assets/img/google.png')}}" alt="">
                                    </div>
                                    <div class="testimonial__text-4">
                                        <h5>Daksh Rana</h5>
                                        <!-- <p>Creative Director at <span>Envato LLC</span></p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-5">
                        <img src="{{ asset('/resources/assets/img/choose/choose-1.jpg')}}" class="w-100 pl-30 ps-lg-0"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="why-choose-us" class="news-area news-area-2 mt-50 mb-50">
        <div class="news-area">
            <div class="container">
                <div class="single__news-item-4 has-radius">
                    <div class="row g-0 align-items-center">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                            <div class="news__thumb news__thumb-4">
                                <img src="{{ asset('/resources/assets/img/why-choose-1.jpg')}}" class="w-100" alt="">
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 d-flex">
                            <div class="news-text-4 news-padding">
                                <span>Why Choose Us</span>
                                <h2>You are in Safe Hands</h2>
                                <p>Dr Vinay Jacob Have Years Of International Experience. He Provide Surgical, Non-surgical And Reconstructive Surgery Which Includes Hair Transplant, Liposuction, Tummy Tuck, Rhinoplasty, Facelift, Breast Augmentation, Gynecomastia & Many More.</p>
                                <!-- <a href="#" class="generic-btn gray-border-btn news-btn mt-45"
                                    tabindex="0">Know More<i class="fal fa-long-arrow-right pl-10"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single__news-item-4 has-radius">
                    <div class="row g-0 align-items-center">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 d-flex">
                            <div class="news-text-4 news-padding">
                                <span>Why Choose Us</span>
                                <h2>Experience the Art of Transformation</h2>
                                <p>Dr. Vinay Jacob, a renowned plastic surgeon in Mumbai, boasts 25 years of invaluable experience in the field. His expertise and commitment to delivering exceptional results have earned him a reputation as the best choice for cosmetic procedures in the city. Patients trust Dr. Jacob for his skill and dedication to enhancing their natural beauty.</p>
                                <!-- <a href="#" class="generic-btn gray-border-btn news-btn mt-45"
                                    tabindex="0">View Details<i class="fal fa-long-arrow-right pl-10"></i></a> -->
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                            <div class="news__thumb news__thumb-4">
                                <img src="{{ asset('/resources/assets/img/why-choose-2.jpg')}}" class="w-100" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="support-widget">
                    <h3>Book an Appointment Today</h3>
                    <a href="{{ route('contact')}}" class="generic-btn btn-1 bg-dark-theme d-none d-md-block"
                        tabindex="0">Contact us<i class="fal fa-long-arrow-right pl-10"></i></a>
                </div>
            </div>
        </div>
    </div>

    

</main>

@stop

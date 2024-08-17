@php($title = "Services | Plastic & Reconstructive Surgeon Dr. Vinay Jacob in Mumbai")
@section('meta_desc') @endsection

@extends('layouts.default')
@section('content')

<main>

    <div class="service-area pt-200">
        <div class="container">
            <div class="generic-title text-center mb-45">
                <span>We Offer</span>
                <h4>Services</h4>
            </div>
            <div class="service__tabs tab__1">
                <div class="row">
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 overflow-hidden">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link tab__box active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="false">
                                    <img src="{{ asset('/resources/assets/img/service/hair-icon.png')}}" alt="">
                                    <span>Hair</span>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link tab__box" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">
                                    <i class="glyph-icon flaticon-asymmetry"></i>
                                    <span>Breast</span>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link tab__box" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-contact" type="button" role="tab"
                                    aria-controls="pills-contact" aria-selected="true">
                                    <i class="glyph-icon flaticon-abdominoplasty"></i>
                                    <span>Body</span>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link tab__box" id="pills-four-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-four" type="button" role="tab" aria-controls="pills-four"
                                    aria-selected="true">
                                    <i class="glyph-icon flaticon-beauty"></i>
                                    <span>Face</span>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link tab__box" id="pills-five-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-five" type="button" role="tab" aria-controls="pills-five"
                                    aria-selected="true">
                                    <i class="glyph-icon flaticon-belly-1"></i>
                                    <span>Reconstructive</span>
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-8">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade active show" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home">
                                <div class="service__content">
                                    <div class="row g-0">
                                        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 d-none d-lg-block">
                                            <div class="service__left">
                                                <div class="service__left--img">
                                                    <img src="{{ asset('/resources/assets/img/service/service-1.jpg')}}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-7 col-xl-7 col-lg-7 d-flex align-items-center">
                                            <div class="service__middle">
                                                <div class="service__middle--img">
                                                    <img src="{{ asset('/resources/assets/img/service/hair-icon.png')}}"
                                                        alt="">
                                                </div>
                                                <div class="service__middle--text pl-20">
                                                    <h4>Revitalize your locks with Dr. Vinay Jacob's expert hair
                                                        services.</h4>
                                                    <p>Indulge in a luxurious hair transformation with the expert touch
                                                        of Dr. Vinay Jacob. With years of experience and a passion for
                                                        enhancing your natural beauty, Dr. Jacob offers a range of
                                                        premium hair services tailored to your unique needs.</p>
                                                    <div class="about__list about__list-2 mt-35">
                                                        <ul>
                                                            <li>
                                                                <i class="fal fa-check"></i>
                                                                <h6>Hair Transplant</h6>
                                                            </li>
                                                            <li>
                                                                <i class="fal fa-check"></i>
                                                                <h6>Eyebrow Transplant</h6>
                                                            </li>
                                                            <li>
                                                                <i class="fal fa-check"></i>
                                                                <h6>Beard Transplant</h6>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile">
                                <div class="service__content">
                                    <div class="row g-0">
                                        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-8 d-none d-lg-block">
                                            <div class="service__left">
                                                <div class="service__left--img">
                                                    <img src="{{ asset('/resources/assets/img/service/service-2.jpg')}}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-7 col-xl-7 col-lg-7 d-flex align-items-center">
                                            <div class="service__middle">
                                                <div class="service__middle--img">
                                                    <i class="glyph-icon flaticon-asymmetry"></i>
                                                </div>
                                                <div class="service__middle--text">
                                                    <h4>Enhance your natural beauty with Dr. Vinay Jacob's expert breast
                                                        services.</h4>
                                                    <p>Experience the artistry of breast enhancement and rejuvenation
                                                        under the skilled care of Dr. Vinay Jacob. With a wealth of
                                                        knowledge and a commitment to patient well-being, Dr. Jacob
                                                        offers a comprehensive range of breast services tailored to your
                                                        unique goals. </p>
                                                    <div class="about__list about__list-2 mt-35">
                                                        <ul>
                                                            <li>
                                                                <i class="fal fa-check"></i>
                                                                <h6>Breast Implant</h6>
                                                            </li>
                                                            <li>
                                                                <i class="fal fa-check"></i>
                                                                <h6>Breast Reduction</h6>
                                                            </li>
                                                            <li>
                                                                <i class="fal fa-check"></i>
                                                                <h6>Breast Lift</h6>
                                                            </li>
                                                            <li>
                                                                <i class="fal fa-check"></i>
                                                                <h6>Gynecomastia</h6>
                                                            </li>
                                                            <li>
                                                                <i class="fal fa-check"></i>
                                                                <h6>Nipple Reconstruction</h6>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact">
                                <div class="service__content">
                                    <div class="row g-0">
                                        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-8 d-none d-lg-block">
                                            <div class="service__left">
                                                <div class="service__left--img">
                                                    <img src="{{ asset('/resources/assets/img/service/service-3.jpg')}}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-7 col-xl-7 col-lg-7 d-flex align-items-center">
                                            <div class="service__middle">
                                                <div class="service__middle--img">
                                                    <i class="glyph-icon flaticon-abdominoplasty"></i>
                                                </div>
                                                <div class="service__middle--text">
                                                    <h4>Experience exceptional care with Dr. Vinay Jacob for your body's
                                                        wellness.</h4>
                                                    <p>Dr. Vinay Jacob, a trusted expert in holistic body services. With
                                                        a wealth of experience and a passion for your well-being, Dr.
                                                        Jacob offers a comprehensive range of services to nurture your
                                                        body.</p>
                                                    <div class="about__list about__list-2 mt-35">
                                                        <ul>
                                                            <li>
                                                                <i class="fal fa-check"></i>
                                                                <h6>Liposuction</h6>
                                                            </li>
                                                            <li>
                                                                <i class="fal fa-check"></i>
                                                                <h6>Tummy Tuck</h6>
                                                            </li>
                                                            <li>
                                                                <i class="fal fa-check"></i>
                                                                <h6>Apronectomy</h6>
                                                            </li>
                                                            <li>
                                                                <i class="fal fa-check"></i>
                                                                <h6>Thigh Lift/Implant</h6>
                                                            </li>
                                                            <li>
                                                                <i class="fal fa-check"></i>
                                                                <h6>Body Lift</h6>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-four" role="tabpanel" aria-labelledby="pills-four">
                                <div class="service__content">
                                    <div class="row g-0">
                                        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-8 d-none d-lg-block">
                                            <div class="service__left">
                                                <div class="service__left--img">
                                                    <img src="{{ asset('/resources/assets/img/service/service-4.jpg')}}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-7 col-xl-7 col-lg-7 d-flex align-items-center">
                                            <div class="service__middle">
                                                <div class="service__middle--img">
                                                    <i class="glyph-icon flaticon-beauty"></i>
                                                </div>
                                                <div class="service__middle--text">
                                                    <h4>Revitalize your radiance with Dr. Vinay Jacob's exceptional face
                                                        services.</h4>
                                                    <p>Unveil a more beautiful you with Dr. Vinay Jacob's transformative
                                                        face services. Driven by a commitment to enhancing your natural
                                                        beauty, Dr. Jacob offers a range of specialized treatments
                                                        tailored to your unique needs.</p>
                                                    <div class="about__list about__list-2 mt-35">
                                                        <ul>
                                                            <li>
                                                                <i class="fal fa-check"></i>
                                                                <h6>Botox</h6>
                                                            </li>
                                                            <li>
                                                                <i class="fal fa-check"></i>
                                                                <h6>Facial Rejuvenation</h6>
                                                            </li>
                                                            <li>
                                                                <i class="fal fa-check"></i>
                                                                <h6>Rhinoplasty</h6>
                                                            </li>
                                                            <li>
                                                                <i class="fal fa-check"></i>
                                                                <h6>Eyebrow Lift</h6>
                                                            </li>
                                                            <li>
                                                                <i class="fal fa-check"></i>
                                                                <h6>Dimple Creation</h6>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-five" role="tabpanel" aria-labelledby="pills-five">
                                <div class="service__content">
                                    <div class="row g-0">
                                        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-8 d-none d-lg-block">
                                            <div class="service__left">
                                                <div class="service__left--img">
                                                    <img src="{{ asset('/resources/assets/img/service/service-5.jpg')}}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-7 col-xl-7 col-lg-7 d-flex align-items-center">
                                            <div class="service__middle">
                                                <div class="service__middle--img">
                                                    <i class="glyph-icon flaticon-belly-1"></i>
                                                </div>
                                                <div class="service__middle--text">
                                                    <h4>Restore hope and confidence with Dr. Vinay Jacob.</h4>
                                                    <p>Dr. Vinay Jacob, a renowned specialist in reconstructive surgery,
                                                        is dedicated to helping individuals regain their quality of life
                                                        and self-assurance. With a compassionate and skilled approach,
                                                        Dr. Jacob provides a wide spectrum of reconstructive services,
                                                        from post-trauma reconstruction to breast reconstruction after
                                                        mastectomy. </p>
                                                    <div class="about__list about__list-2 mt-35">
                                                        <ul>
                                                            <li>
                                                                <i class="fal fa-check"></i>
                                                                <h6>Head & Neck</h6>
                                                            </li>
                                                            <li>
                                                                <i class="fal fa-check"></i>
                                                                <h6>Gender Reassignment</h6>
                                                            </li>
                                                            <li>
                                                                <i class="fal fa-check"></i>
                                                                <h6>Cleft Lip & Palate Surgery</h6>
                                                            </li>
                                                            <li>
                                                                <i class="fal fa-check"></i>
                                                                <h6>Microsurgery</h6>
                                                            </li>
                                                            <li>
                                                                <i class="fal fa-check"></i>
                                                                <h6>Upper/Lower Limb Reconstruction</h6>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

@stop
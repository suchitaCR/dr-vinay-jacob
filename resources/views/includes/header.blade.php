<header class="header-transparent">
    <div class="header-area">
        <div class="header-top header-padding-2 d-none d-sm-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xxl-4 col-xl-4 col-lg-5 d-flex align-items-center">
                        <div class="header__list header__list-4" style="display: contents;">
                            <ul>
                                <li class="mr-35"><a href="info@theplasticsurgeons.in"><i class="fal fa-envelope"></i>
                                        info@theplasticsurgeons.in</a>
                                </li>
                                <li><a href="tel: +919004078509"><i class="fal fa-phone"></i>+91 9004078509</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl col-lg d-lg-block col-6">
                        <div class="header-social text-right">
                            <a target="_blank" href="https://www.facebook.com/theplasticsurgeons"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="https://www.linkedin.com/company/the-plastic-surgeons/about/"><i
                                    class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /. header top -->
        <div class="header-bottom header-padding-2">
            <div class="container-fluid">
                <div class="header-wrapper header-sticky">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-5">
                            <div class="header-left d-flex align-items-center site-header-left">
                                <div class="logo f-left">
                                    <a href="{{ route('home')}}">
                                        <img src="{{ asset('/resources/assets/img/logo/logo.png')}}" alt="">
                                    </a>
                                </div>
                                <div class="header-menu-wrapper d-flex align-items-center">
                                    <div class="header-nav header-nav-2 site-header-nav f-left d-none d-lg-block">
                                        <nav id="mobile-menu">
                                            <ul>
                                                <li><a href="{{ route('home')}}">Home</a></li>
                                                <li><a href="{{ route('about')}}">About</a></li>
                                                <li><a href="{{ route('services')}}">Services</a></li>
                                                <li><a href="#">Treatments</a>
                                                    <ul class="submenu">
                                                        <li><a href="{{ route('rhinoplasty')}}">Rhinoplasty</a></li>
                                                        <li><a href="{{ route('gynecomastia')}}">Gynecomastia</a></li>
                                                        <li><a href="{{ route('tummy-tuck')}}">Tummy Truck</a></li>
                                                        <li><a href="{{ route('liposuction')}}">Liposuction</a></li>
                                                        <li><a href="{{ route('face-lift')}}">Face Lift</a></li>
                                                        <li><a href="{{ route('breast-lift')}}">Breast Lift</a></li>
                                                        <li><a href="{{ route('breast-reduction')}}">Breast
                                                                Reduction</a></li>
                                                        <li><a href="{{ route('breast-implant')}}">Breast Implant</a>
                                                        </li>
                                                        <li><a href="{{ route('jaw-line-correction')}}">Jaw Line
                                                                Correction</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="{{ route('home')}}#why-choose-us">Why Choose us</a></li>
                                                <li><a href="{{ route('home')}}#testimonial">Testimonial</a></li>
                                                <li><a href="#">Gallery</a>
                                                    <ul class="submenu">
                                                        <li><a href="{{ route('result-gallery')}}">Result Gallery</a>
                                                        </li>
                                                        <li><a href="{{ route('clinic-images')}}">Clinic Images</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="{{ route('blog')}}">Blogs</a></li>
                                                <li><a href="{{ route('contact')}}">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <h5 class="cta-2 f-right mt-15 d-none d-md-block">
                    <span>Mail:</span><a href="mailTo:info@examplemail.com"> <span class="__cf_email__"
                            data-cfemail="61080f070e210419000c110d040c00080d4f020e0c">[email&#160;protected]</span></a>
                </h5> -->
            </div>
        </div>
    </div>
</header>
<!-- header area end -->
<!-- search popup -->

<!-- info area start -->
<div class="extra-info">
    <div class="close-icon">
        <button>
            <i class="far fa-window-close"></i>
        </button>
    </div>
    <div class="logo-side mb-30">
        <a href="{{ route('home')}}">
            <img src="{{ asset('/resources/assets/img/logo/logo-white.png')}}" alt="">
        </a>
    </div>
</div>

<div class="responsive-menu-3 d-md-none">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="responsive-logo p-0">
                    <a href="{{ route('home')}}"><img src="{{ asset('/resources/assets/img/logo/logo.png')}}"
                            alt=""></a>
                </div>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <div class="mobile-toggle-bar d-inline-block">
                    <button class="toggle-btn  p-static">
                        <i class="fal fa-bars"></i>
                    </button>
                    <div class="mobile-nav">
                        <div>
                            <button class="mobile-nav-close text-white">
                                <i class="fal fa-times"></i>
                            </button>
                        </div>
                        <!-- <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="menu-tab-1" role="tabpanel"
                                aria-labelledby="menu-tab-1-tab">
                                <div class="mobile-menu mean-container">
                                    <div class="mean-bar"><a href="#nav" class="meanmenu-reveal"
                                            style="right: 0px; left: auto; display: inline;"><span><span><span></span></span></span></a>
                                        <nav class="mean-nav">
                                            <ul style="display: none;">
                                                <li><a href="{{ route('home')}}">Home</a>
                                                <li>
                                                </li>
                                                <li><a href="{{ route('about')}}">About</a></li>
                                                <li><a href="{{ route('services')}}">Services</a></li>
                                                <li><a href="#">Treatments</a>
                                                    <ul class="submenu">
                                                        <li><a href="{{ route('rhinoplasty')}}">Rhinoplasty</a></li>
                                                        <li><a href="{{ route('gynecomastia')}}">Gynecomastia</a></li>
                                                        <li><a href="{{ route('tummy-tuck')}}">Tummy Truck</a></li>
                                                        <li><a href="{{ route('liposuction')}}">Liposuction</a></li>
                                                        <li><a href="{{ route('face-lift')}}">Face Lift</a></li>
                                                        <li><a href="{{ route('breast-lift')}}">Breast Lift</a></li>
                                                        <li><a href="{{ route('breast-reduction')}}">Breast
                                                                Reduction</a></li>
                                                        <li><a href="{{ route('breast-implant')}}">Breast Implant</a>
                                                        </li>
                                                        <li><a href="{{ route('jaw-line-correction')}}">Jaw Line
                                                                Correction</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="{{ route('home')}}#why-choose-us">Why Choose us</a></li>
                                                <li><a href="{{ route('home')}}#testimonial">Testimonial</a></li>
                                                <li><a href="#">Gallery</a>
                                                    <ul class="submenu">
                                                        <li><a href="{{ route('result-gallery')}}">Result Gallery</a>
                                                        </li>
                                                        <li><a href="{{ route('clinic-images')}}">Clinic Images</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="{{ route('contact')}}">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="mobile-nav">
    <div>
        <button class="mobile-nav-close text-white">
            <i class="fal fa-times"></i>
        </button>
    </div>

    <div class="responsive-logo">
        <a href="{{ route('home')}}"><img src="{{ asset('/resources/assets/img/logo/logo-white.png')}}" alt=""></a>
    </div>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="menu-tab-1" role="tabpanel" aria-labelledby="menu-tab-1-tab">
            <div class="mobile-menu mean-container">
                <div class="mean-bar"><a href="#nav" class="meanmenu-reveal"
                        style="right: 0px; left: auto; display: inline;"><span><span><span></span></span></span></a>
                    <!-- <nav class="mean-nav">
                        <ul style="display: none;">
                            <li><a href="{{ route('home')}}">Home</a>
                            <li>
                            </li>
                            <li><a href="{{ route('about')}}">About</a></li>
                            <li><a href="{{ route('services')}}">Services</a></li>
                            <li><a href="#">Treatments</a>
                                <ul class="submenu">
                                    <li><a href="{{ route('rhinoplasty')}}">Rhinoplasty</a></li>
                                    <li><a href="{{ route('gynecomastia')}}">Gynecomastia</a></li>
                                    <li><a href="{{ route('tummy-tuck')}}">Tummy Truck</a></li>
                                    <li><a href="{{ route('liposuction')}}">Liposuction</a></li>
                                    <li><a href="{{ route('face-lift')}}">Face Lift</a></li>
                                    <li><a href="{{ route('breast-lift')}}">Breast Lift</a></li>
                                    <li><a href="{{ route('breast-reduction')}}">Breast
                                            Reduction</a></li>
                                    <li><a href="{{ route('breast-implant')}}">Breast Implant</a>
                                    </li>
                                    <li><a href="{{ route('jaw-line-correction')}}">Jaw Line
                                            Correction</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('home')}}#why-choose-us">Why Choose us</a></li>
                            <li><a href="{{ route('home')}}#testimonial">Testimonial</a></li>
                            <li><a href="#">Gallery</a>
                                <ul class="submenu">
                                    <li><a href="{{ route('result-gallery')}}">Result Gallery</a>
                                    </li>
                                    <li><a href="{{ route('clinic-images')}}">Clinic Images</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('contact')}}">Contact</a></li>
                        </ul>
                    </nav> -->
                </div>
            </div>
        </div>
       
    </div>
</div>

<!-- <div class="mobile-nav">
    <div>
        <button class="mobile-nav-close text-white">
            <i class="fal fa-times"></i>
        </button>
    </div>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="menu-tab-1" role="tabpanel">
            <div class="mobile-menu"></div>
        </div>
        <div class="tab-pane fade" id="menu-tab-2" role="tabpanel">
            <div class="side-info mb-30">
                <div class="contact-list mb-30">
                    <h4>Office Address</h4>
                    <p>123/A, Miranda City Likaoli
                        Prikano, Dope</p>
                </div>
                <div class="contact-list mb-30">
                    <h4>Phone Number</h4>
                    <p>+0989 7876 9865 9</p>
                    <p>+(090) 8765 86543 85</p>
                </div>
                <div class="contact-list mb-30">
                    <h4>Email Address</h4>
                    <p><a href="https://www.devsnews.com/cdn-cgi/l/email-protection" class="__cf_email__"
                            data-cfemail="85ecebe3eac5e0fde4e8f5e9e0abe6eae8">[email&#160;protected]</a></p>
                    <p><a href="https://www.devsnews.com/cdn-cgi/l/email-protection" class="__cf_email__"
                            data-cfemail="92f7eaf3ffe2fef7bcfff3fbfed2fae7ffbcf1fdff">[email&#160;protected]</a></p>
                </div>
            </div>
        </div>
    </div>
</div> -->

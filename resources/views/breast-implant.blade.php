@php($title = "Breast Implant | Plastic & Reconstructive Surgeon Dr. Vinay Jacob in Mumbai")
@section('meta_desc') @endsection

@extends('layouts.default')
@section('content')

<main>

    <div class="service-details mt-200 mb-60">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-xl-8 col-lg-6">
                    <div class="service__left">
                        <div class="service__thumb">
                            <img src="{{ asset('/resources/assets/img/service/breast-implant.jpg')}}" class="w-100" alt="">
                        </div>
                        <div class="service__text-2 mt-50">
                            <h4>What are breast implants?</h4>
                            <p>Breast implants are artificial devices (prostheses) surgically inserted into your breasts. Breast implants are silicone shells filled with either silicone gel or saline (sterile salt water). Doctors called plastic surgeons insert breast implants. You may choose to receive breast implants following the loss of a breast to cancer. You may be a healthy person who wishes to change the shape or size of your breasts. Breast reconstruction is when a patient who has had breast cancer gets breast implants. Breast augmentation is when a healthy person receives breast implants to change the shape or size of their breasts. Breast augmentation is also known as a boob job.</p>
                            <h4>Who gets breast implants?</h4>
                            <p>Getting breast implants is a personal decision. Pursuing your wants and desires for your body can be very empowering.</p>
                            <p>To be considered for breast implants, you should:</p>
                            <ul class="service-li">
                                <li><i class="fa-solid fa-circle-check"></i> Be finished developing.</li>
                                <li><i class="fa-solid fa-circle-check"></i> Be in good physical health.
                                </li>
                                <li><i class="fa-solid fa-circle-check"></i> Have realistic expectations.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-6">
                    @include('includes.treatments-sidebar')
                </div>
            </div>
        </div>
    </div>

</main>

@stop
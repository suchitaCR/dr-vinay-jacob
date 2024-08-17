@php($title = "Liposuction | Plastic & Reconstructive Surgeon Dr. Vinay Jacob in Mumbai")
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
                            <img src="{{ asset('/resources/assets/img/service/liposuction.jpg')}}" class="w-100" alt="">
                        </div>
                        <div class="service__text-2 mt-50">
                            <!-- <h4>What is gynecomastia?</h4> -->
                            <p>Liposuction is a surgical procedure that uses a suction technique to remove fat from specific areas of the body, such as the abdomen, hips, thighs, buttocks, arms or neck. Liposuction also shapes (contours) these areas. Other names for liposuction include lipoplasty and body contouring.</p>
                            <p>The procedure may be performed under general, regional, or local anesthesia. It involves using a cannula and negative pressure to suck out fat.As a cosmetic procedure it is believed to work best on people with a normal weight and good skin elasticity</p>
                            <p>You are most likely a good candidate for this procedure if:</p>
                            <ul class="service-li">
                                <li><i class="fa-solid fa-circle-check"></i>  Thighs</li>
                                <li><i class="fa-solid fa-circle-check"></i> Hips and buttocks
                                </li>
                                <li><i class="fa-solid fa-circle-check"></i> Abdomen and waist (tummy liposuction)
                                </li>
                                <li><i class="fa-solid fa-circle-check"></i> Upper arms
                                </li>
                                <li><i class="fa-solid fa-circle-check"></i> Back
                                </li>
                                <li><i class="fa-solid fa-circle-check"></i> Inner knee
                                </li>
                                <li><i class="fa-solid fa-circle-check"></i> Chest area
                                </li>
                                <li><i class="fa-solid fa-circle-check"></i> Cheeks, chin and neck
                                </li>
                                <li><i class="fa-solid fa-circle-check"></i> Calves and ankles
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
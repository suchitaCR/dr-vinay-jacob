@php($title = "Face Lift | Plastic & Reconstructive Surgeon Dr. Vinay Jacob in Mumbai")
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
                            <img src="{{ asset('/resources/assets/img/service/face-lift.jpg')}}" class="w-100" alt="">
                        </div>
                        <div class="service__text-2 mt-50">
                            <!-- <h4>What is gynecomastia?</h4> -->
                            <p>A facelift, technically known as a rhytidectomy, is a type of cosmetic surgery procedure used to give a more youthful facial appearance. There are multiple surgical techniques and exercise routines.</p>
                            <p>As you get older, skin and tissues naturally lose their elasticity. This leads to sagging and wrinkles. A facelift, also known as rhytidectomy, is a surgical procedure that lifts and tightens these facial tissues. A facelift can involve removing excess skin, smoothing out folds or wrinkles, and tightening facial tissue. It doesn’t include a brow or eye lift, although these might be done at the same time. A facelift is only focused on the bottom two-thirds of the face and often the neck or décolletage. People get facelifts for lots of different reasons. A common reason is to help disguise signs of skin aging.</p>
                            <p>Good candidates for facelifts include:</p>
                            <ul class="service-li">
                                <li><i class="fa-solid fa-circle-check"></i> Healthy individuals who don’t have medical conditions that can interfere with wound healing or recovery from surgery</li>
                                <li><i class="fa-solid fa-circle-check"></i> Those who don’t smoke or misuse substances
                                </li>
                                <li><i class="fa-solid fa-circle-check"></i> Those who have realistic expectations of what the surgery entails
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
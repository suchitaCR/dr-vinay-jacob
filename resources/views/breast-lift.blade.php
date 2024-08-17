@php($title = "Breast Lift | Plastic & Reconstructive Surgeon Dr. Vinay Jacob in Mumbai")
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
                            <img src="{{ asset('/resources/assets/img/service/breast-lift.jpg')}}" class="w-100" alt="">
                        </div>
                        <div class="service__text-2 mt-50">
                            <!-- <h4>What is gynecomastia?</h4> -->
                            <p>A breast lift, or breast mastopexy, is a surgical procedure that raises and reshapes the breasts. The procedure will make breasts firmer and shapelier if they have sagged. Breasts lifts will not change the size of the breast.</p>
                            <p>A woman breasts often change over time, losing their youthful shape and firmness. These changes and loss of elasticity can result from:</p>
                            <ul class="service-li">
                                <li><i class="fa-solid fa-circle-check"></i> Pregnancy</li>
                                <li><i class="fa-solid fa-circle-check"></i> Breastfeeding
                                </li>
                                <li><i class="fa-solid fa-circle-check"></i> Weight fluctuations
                                </li>
                                <li><i class="fa-solid fa-circle-check"></i> Aging
                                </li>
                                <li><i class="fa-solid fa-circle-check"></i> Gravity
                                </li>
                                <li><i class="fa-solid fa-circle-check"></i> Heredity
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
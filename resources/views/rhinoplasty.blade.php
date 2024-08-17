@php($title = "Rhinoplasty | Plastic & Reconstructive Surgeon Dr. Vinay Jacob in Mumbai")
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
                            <img src="{{ asset('/resources/assets/img/service/rhinoplasty.jpg')}}" class="w-100" alt="">
                        </div>
                        <div class="service__text-2 mt-50">
                            <!-- <h4>Skin touchup and cosmetics surgery</h4> -->
                            <p>Rhinoplasty (RIE-no-plas-tee) is surgery that changes the shape of the nose. The motivation for rhinoplasty may be to change the appearance of the nose, improve breathing or both.</p>
                            <p>The upper portion of the structure of the nose is bone, and the lower portion is cartilage. Rhinoplasty can change bone, cartilage, skin or all three. Talk with your surgeon about whether rhinoplasty is appropriate for you and what it can achieve.</p>
                            <p>When planning rhinoplasty, your surgeon will consider your other facial features, the skin on your nose and what you would like to change. If you're a candidate for surgery, your surgeon will develop a customized plan for you.</p>
                            <ul class="service-li">
                                <li><i class="fa-solid fa-circle-check"></i> Removing a hump on the nose</li>
                                <li><i class="fa-solid fa-circle-check"></i> Straightening the bridge
                                </li>
                                <li><i class="fa-solid fa-circle-check"></i> Reshaping the nose's tip
                                </li>
                                <li><i class="fa-solid fa-circle-check"></i> Increasing or decreasing the size of the nostrils
                                </li>
                                <li><i class="fa-solid fa-circle-check"></i> Correcting the nose after an injury
                                </li>
                                <li><i class="fa-solid fa-circle-check"></i> Opening breathing passages
                                </li>
                                <li><i class="fa-solid fa-circle-check"></i> Making the nose bigger or smaller
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
@php($title = "Tummy Tuck | Plastic & Reconstructive Surgeon Dr. Vinay Jacob in Mumbai")
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
                            <img src="{{ asset('/resources/assets/img/service/tummy-tuck.jpg')}}" class="w-100" alt="">
                        </div>
                        <div class="service__text-2 mt-50">
                            <!-- <h4>What is gynecomastia?</h4> -->
                            <p>A tummy tuck also known as abdominoplasty is a cosmetic surgical procedure to improve the shape and appearance of the abdomen.During a tummy tuck, excess skin and fat are removed from the abdomen. Connective tissue in the abdomen (fascia) usually is tightened with sutures as well. The remaining skin is then repositioned to create a more toned look.</p>
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
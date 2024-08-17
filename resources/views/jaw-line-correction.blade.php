@php($title = "Jaw Line Correction | Plastic & Reconstructive Surgeon Dr. Vinay Jacob in Mumbai")
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
                            <img src="{{ asset('/resources/assets/img/service/jaw-line-correction.jpg')}}" class="w-100" alt="">
                        </div>
                        <div class="service__text-2 mt-50">
                            <h4>What is a jawline surgery?</h4>
                            <p>Jawline surgery, also sometimes called orthognathic surgery, can reshape the jaw and chin. It can be used to either enhance and define the jaw or reduce the size of the bone to give the chin a slimmer look. In some cases, the surgery can be used to realign the teeth and jaw if they're not working properly.</p>
                            <h4>Procedure for jawline surgery:</h4>
                            <ul class="service-li">
                                <li><i class="fa-solid fa-circle-check"></i> For most jawline surgeries, you will be put under general anesthesia.</li>
                                <li><i class="fa-solid fa-circle-check"></i> Cuts are typically made inside the mouth, so there’s no obvious scarring.
                                </li>
                                <li><i class="fa-solid fa-circle-check"></i> If your jaw or teeth are misaligned, it will be cut and then repositioned.
                                </li>
                                <li><i class="fa-solid fa-circle-check"></i> Tiny bone plates, screws, and wires or rubber bands may be used to secure the jaw in its place.
                                </li>
                                <li><i class="fa-solid fa-circle-check"></i> The screws are permanent and will integrate into the jaw over time.
                                </li>
                                <li><i class="fa-solid fa-circle-check"></i> The surgeon will use a laser or a micro saw to shave off part of the bone.
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
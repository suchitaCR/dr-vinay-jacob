@php($title = "Gynecomastia | Plastic & Reconstructive Surgeon Dr. Vinay Jacob in Mumbai")
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
                            <img src="{{ asset('/resources/assets/img/service/gynecomastia.jpg')}}" class="w-100" alt="">
                        </div>
                        <div class="service__text-2 mt-50">
                            <h4>What is gynecomastia?</h4>
                            <p>Gynecomastia is a condition of overdevelopment or enlargement of the breast tissue in men or boys. The breasts become larger. They may grow unevenly. Gynecomastia often happens when a preteen or teenage boy is going through the hormonal changes of puberty. But it can also happen to newborn babies and to men as they age.</p>
                            <h4>What causes gynecomastia?</h4>
                            <p>Gynecomastia is usually a benign (noncancerous) condition. It may be linked to many different causes of hormone changes. In many cases, the cause isn’t known. Gynecomastia is often caused by changes in levels of the female hormone (estrogen) and the male hormone (testosterone). But it can be caused by other things as well. Gynecomastia can be a side effect of certain medicines, such as antidepressants, antibiotics, chemotherapy, prostate cancer medicines, ulcer or cardiovascular medicines. Illegal drugs, such as anabolic steroids, heroin, or marijuana can also cause gynecomastia.</p>
                            <p>Some diseases and medical conditions may also cause gynecomastia. These include:</p>
                            <ul class="service-li">
                                <li><i class="fa-solid fa-circle-check"></i> Liver diseases</li>
                                <li><i class="fa-solid fa-circle-check"></i> Kidney disease
                                </li>
                                <li><i class="fa-solid fa-circle-check"></i> Lung cancer
                                </li>
                                <li><i class="fa-solid fa-circle-check"></i> Testicular cancer
                                </li>
                                <li><i class="fa-solid fa-circle-check"></i> Tumors of the adrenal glands or pituitary gland
                                </li>
                                <li><i class="fa-solid fa-circle-check"></i> Some conditions that a baby is born with (congenital disorders)
                                </li>
                                <li><i class="fa-solid fa-circle-check"></i> Thyroid disorders
                                </li>
                                <li><i class="fa-solid fa-circle-check"></i> Injury or trauma
                                </li>
                                <li><i class="fa-solid fa-circle-check"></i> Obesity
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
@php($title = "Breast Reduction | Plastic & Reconstructive Surgeon Dr. Vinay Jacob in Mumbai")
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
                            <img src="{{ asset('/resources/assets/img/service/breast-reduction.jpg')}}" class="w-100" alt="">
                        </div>
                        <div class="service__text-2 mt-50">
                            <!-- <h4>What is gynecomastia?</h4> -->
                            <p>Breast reduction surgery, also known as reduction mammaplasty, removes fat, breast tissue and skin from the breasts. For those with large breasts, breast reduction surgery can ease discomfort and improve appearance.</p>
                            <p>A breast reduction procedure or a boob job involves the removal of breast tissue and . The reduction in breast volume will result in smaller, lighter breasts and may lead to improvement in posture and relief of back, neck and shoulder strap pain. The procedure can also reduce the risk of rashes which form under the breasts (intertrigo).</p>
                            <p>The breast reduction surgery achieves a functional bust that is proportionate to the woman’s body, the critical corrective consideration is the tissue viability of the nipple-areola complex (NAC) to ensure the functional sensitivity and lactational capability of the breasts.</p>
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
@php($title = "Blogs | Plastic & Reconstructive Surgeon Dr. Vinay Jacob")
@section('meta_desc') @endsection
@section('page_css')
<link rel="stylesheet" href="{{ asset('/resources/assets/css/blog.css') }}">
@endsection

@extends('layouts.default')
@section('content')

<main>
    <section id="blogs" class="blog-cards-area mt-150 mb-60">
        <div class="container">
            <div class="blog-cards__heading">
                <span>Latest Insights</span>
                <h2>Blogs</h2>
            </div>

            <div class="blog-cards__list">


                <article class="blog-card">
                    <a href="{{ url('/blog/gynecomastia-surgery-cost-mumbai') }}" class="blog-card__media" aria-label="Gynecomastia Surgery Cost in Mumbai: Complete Guide">
                        <img src="{{ asset('/resources/assets/img/blogs/gynecomastia-surgery-cost-in-mumbai-complete-guide.png') }}" alt="Gynecomastia Surgery Cost in Mumbai: Complete Guide">
                    </a>

                    <div class="blog-card__content">
                        <h3>
                            <a href="{{ url('/blog/gynecomastia-surgery-cost-mumbai') }}">Gynecomastia Surgery Cost in Mumbai: Complete Guide</a>
                        </h3>
                        <p>Learn about gynecomastia surgery cost in Mumbai, factors affecting pricing, recovery, procedure details, and treatment options with Dr. Vinay Jacob.</p>

                        <a href="{{ url('/blog/gynecomastia-surgery-cost-mumbai') }}" class="blog-card__link">
                            Read More
                            <span class="blog-card__link-icon">
                                <i class="fas fa-angle-double-right"></i>
                            </span>
                        </a>
                    </div>
                </article>


                <article class="blog-card">
                    <a href="{{ url('/blog/rhinoplasty-surgery-mumbai-procedure-recovery-results') }}" class="blog-card__media" aria-label="Rhinoplasty Surgery in Mumbai: Procedure, Recovery & Results">
                        <img src="{{ asset('/resources/assets/img/blogs/Rhinoplasty-Surgery-in-Mumbai-Procedure-Recovery-Results.png') }}" alt="Rhinoplasty Surgery in Mumbai: Procedure, Recovery & Results">
                    </a>

                    <div class="blog-card__content">
                        <h3>
                            <a href="{{ url('/blog/rhinoplasty-surgery-mumbai-procedure-recovery-results') }}">Rhinoplasty Surgery in Mumbai: Procedure, Recovery & Results</a>
                        </h3>
                        <p>Learn about rhinoplasty surgery in Mumbai, including the procedure, recovery timeline, benefits, risks, and expected results. Consult Dr. Vinay Jacob for expert nose reshaping surgery.</p>

                        <a href="{{ url('/blog/rhinoplasty-surgery-mumbai-procedure-recovery-results') }}" class="blog-card__link">
                            Read More
                            <span class="blog-card__link-icon">
                                <i class="fas fa-angle-double-right"></i>
                            </span>
                        </a>
                    </div>
                </article>


            </div>
        </div>
    </section>
</main>

@stop
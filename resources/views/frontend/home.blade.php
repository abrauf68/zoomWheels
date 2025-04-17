@extends('frontend.layouts.master')

@section('title', 'Home')
@section('meta_description', '')
@section('meta_keywords', '')

@section('css')
    <style>
        .hero {
            position: relative;
            overflow: hidden;
        }

        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            object-fit: cover;
            z-index: -2;
        }

        /* Shade Overlay */
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: rgba(14, 29, 52, 0.6);
            /* #305BF9 with 0.6 opacity */
            z-index: 1;
        }
    </style>
@endsection

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

        <video class="hero-bg" autoplay muted loop playsinline preload="auto">
            <source src="{{ asset('frontAssets/video/bg-hero.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <!-- Overlay Shade -->
        <div class="overlay"></div>

        {{-- <img src="{{ asset('frontAssets/img/world-dotted-map.png') }}" alt="" class="hero-bg" data-aos="fade-in"> --}}

        <div class="container">
            <div class="row gy-4 d-flex justify-content-between">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h2 data-aos="fade-up">Turning Miles into Smiles – Car Delivery Made Easy</h2>
                    <p data-aos="fade-up" data-aos-delay="100">Swift and secure car transport solutions tailored to your
                        needs, ensuring every vehicle reaches its destination with care and precision. Trusted by thousands
                        for our reliability, we move with purpose, speed, and a promise to protect what drives you.</p>

                    <form action="#" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up"
                        data-aos-delay="200">
                        <input type="text" class="form-control" placeholder="Your ZIP code or City. e.g. New York">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>

                    <div class="row gy-4" data-aos="fade-up" data-aos-delay="300">

                        <div class="col-lg-3 col-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="1200" data-purecounter-duration="2"
                                    class="purecounter"></span>
                                <p>Deliveries</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="300" data-purecounter-duration="2"
                                    class="purecounter"></span>
                                <p>Cities</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="98" data-purecounter-duration="2"
                                    class="purecounter"></span>
                                <p>Punctuality</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="2"
                                    class="purecounter"></span>
                                <p>Experts</p>
                            </div>
                        </div>

                    </div>



                </div>

                <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                    <img src="{{ asset('frontAssets/img/car1.png') }}" class="img-fluid mt-5 mb-lg-0" alt="">
                </div>

            </div>
        </div>

    </section>
    <!-- /Hero Section -->

    <!-- Featured Services Section -->
    @include('frontend.sections.feature_services')
    <!-- /Featured Services Section -->


    @include('frontend.sections.about')


    <!-- Services Section -->
    @include('frontend.sections.services')
    <!-- /Services Section -->


    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">

        <img src="{{ asset('frontAssets/img/cta-bg.jpg') }}" alt="">

        <div class="container">
            <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-10">
                    <div class="text-center">
                        <h3>Get Your Vehicle Delivered Safely</h3>
                        <p>We provide fast, reliable, and secure car transportation services nationwide. Whether you're
                            moving, buying, or selling a vehicle, we've got you covered. Trust us for the best in the
                            business.</p>
                        <a class="cta-btn" href="#">Book Your Shipment Now</a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /Call To Action Section -->


    <!-- Features Section -->
    @include('frontend.sections.features')
    <!-- /Features Section -->

    @include('frontend.sections.pricing')
    @include('frontend.sections.testimonials')
    @include('frontend.sections.faqs')
@endsection

@section('script')
@endsection

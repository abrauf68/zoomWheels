@extends('frontend.layouts.master')

@section('title', 'About')
@section('meta_description', '')
@section('meta_keywords', '')

@section('css')
@endsection

@section('content')
    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade"
        style="background-image: url({{ asset('frontAssets/img/page-title-bg.jpg') }});">
        <div class="container position-relative">
            <h1>About</h1>
            <p>Learn more about our mission, values, and the passionate team driving innovation and excellence every day.
            </p>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{route('frontend.home')}}">Home</a></li>
                    <li class="current">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End Page Title -->


    <!-- About Section -->
    @include('frontend.sections.about')
    <!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="1200" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Deliveries</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="300" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Cities</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="98" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Punctuality</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Experts</p>
                    </div>
                </div><!-- End Stats Item -->

            </div>

        </div>

    </section>
    <!-- /Stats Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span>Our Team<br></span>
            <h2>Our Team</h2>
            <p>Meet the passionate individuals who drive our success with expertise, creativity, and commitment.</p>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row">

                <!-- Team Member 1 -->
                <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <img src="{{ asset('frontAssets/img/team/team-1.jpg') }}" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4>Walter White</h4>
                            <span>Web Development</span>
                            <p>
                                Walter is a seasoned web developer with a strong foundation in creating scalable and
                                responsive web solutions that meet business goals efficiently.
                            </p>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <!-- Team Member 2 -->
                <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <img src="{{ asset('frontAssets/img/team/team-2.jpg') }}" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4>Sarah Jhinson</h4>
                            <span>Marketing</span>
                            <p>
                                Sarah brings strategic thinking and creativity to our marketing efforts, ensuring our brand
                                reaches the right audience with impact and clarity.
                            </p>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <!-- Team Member 3 -->
                <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <img src="{{ asset('frontAssets/img/team/team-3.jpg') }}" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4>William Anderson</h4>
                            <span>Content</span>
                            <p>
                                William specializes in creating compelling content that communicates our message clearly and
                                effectively across all platforms.
                            </p>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Team Member -->

            </div>
        </div>

    </section>
    <!-- /Team Section -->


    <!-- Testimonials Section -->
    @include('frontend.sections.testimonials')
    <!-- /Testimonials Section -->

    <!-- Faq Section -->
    @include('frontend.sections.faqs')
    <!-- /Faq Section -->
@endsection

@section('script')
@endsection

@extends('frontend.layouts.master')

@section('title', 'Services')
@section('meta_description', '')
@section('meta_keywords', '')

@section('css')
@endsection

@section('content')
    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade"
        style="background-image: url({{ asset('frontAssets/img/page-title-bg.jpg') }});">
        <div class="container position-relative">
            <h1>Services</h1>
            <p>Discover the range of solutions we offer to help your business grow, streamline operations, and reach new
                heights.</p>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{route('frontend.home')}}">Home</a></li>
                    <li class="current">Services</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End Page Title -->


    <!-- Featured Services Section -->
    @include('frontend.sections.feature_services')
    <!-- /Featured Services Section -->

    <!-- Services Section -->
    @include('frontend.sections.services')
    <!-- /Services Section -->

    <!-- Features Section -->
    @include('frontend.sections.features')
    <!-- /Features Section -->

    <!-- Testimonials Section -->
    @include('frontend.sections.testimonials')
    <!-- /Testimonials Section -->

    <!-- Faq Section -->
    @include('frontend.sections.faqs')
    <!-- /Faq Section -->
@endsection

@section('script')
@endsection

@extends('frontend.layouts.master')

@section('title', 'Pricing')
@section('meta_description', '')
@section('meta_keywords', '')

@section('css')
@endsection

@section('content')
    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade"
        style="background-image: url({{ asset('frontAssets/img/page-title-bg.jpg') }});">
        <div class="container position-relative">
            <h1>Pricing</h1>
            <p>Explore flexible and transparent pricing plans designed to meet the needs of businesses of all sizes.</p>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{route('frontend.home')}}">Home</a></li>
                    <li class="current">Pricing</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End Page Title -->


    <!-- Pricing Section -->
        @include('frontend.sections.pricing')
    <!-- /Pricing Section -->

@endsection

@section('script')
@endsection

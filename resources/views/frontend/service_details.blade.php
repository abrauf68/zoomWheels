@extends('frontend.layouts.master')

@section('title', $service->name)
@section('meta_description', '')
@section('meta_keywords', '')

@section('css')
@endsection

@section('content')
<!-- Page Title -->
<div class="page-title dark-background" data-aos="fade" style="background-image: url({{asset('frontAssets/img/page-title-bg.jpg')}});">
    <div class="container position-relative">
      <h1>{{ $service->name }}</h1>
      <p>{{ $service->meta_description }}</p>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="#">Home</a></li>
          <li><a href="#">Services</a></li>
          <li class="current">{{ $service->name }}</li>
        </ol>
      </nav>
    </div>
  </div><!-- End Page Title -->

  <!-- Service Details Section -->
  <section id="service-details" class="service-details section">

    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="services-list">
            @if (isset($allServices) && count($allServices) > 0)
                @foreach ($allServices as $serv)
                    <a href="{{route('frontend.services', $serv->slug)}}" class="{{ $serv->id == $service->id ? 'active' : '' }}">{{ $serv->name }}</a>
                @endforeach
            @endif
          </div>

          <h4>{{ $service->meta_title }}</h4>
          <p>{{ $service->meta_description }}</p>
        </div>

        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
          <img src="{{ asset($service->main_image) }}" alt="{{ $service->name }}" class="img-fluid services-img">
          {!! $service->details !!}
        </div>

      </div>

    </div>

  </section><!-- /Service Details Section -->
@endsection

@section('script')
@endsection

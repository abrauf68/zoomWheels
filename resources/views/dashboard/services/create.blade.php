@extends('layouts.master')

@section('title', __('Create Service'))

@section('css')
@endsection


@section('breadcrumb-items')
    <li class="breadcrumb-item">{{ __('Services') }}</li>
    <li class="breadcrumb-item active">{{ __('Create') }}</li>
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-6">
            <!-- Account -->
            <div class="card-body pt-4">
                <form method="POST" action="{{ route('dashboard.services.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row p-5">
                        <h3>{{ __('Add New Service') }}</h3>
                        <div class="mb-4 col-md-6">
                            <label for="name" class="form-label">{{ __('Service Name') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('name') is-invalid @enderror" type="text" id="name"
                                name="name" required placeholder="{{ __('Enter service name') }}" autofocus />
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-6">
                            <label for="slug" class="form-label">{{ __('Slug') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('slug') is-invalid @enderror" type="text" id="slug"
                                name="slug" required placeholder="{{ __('Enter service slug') }}" />
                            @error('slug')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-12">
                            <label for="meta_title" class="form-label">{{ __('Meta Title') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('meta_title') is-invalid @enderror" type="text"
                                id="meta_title" name="meta_title" required
                                placeholder="{{ __('Enter service meta title') }}" />
                            @error('meta_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-12">
                            <label for="meta_description" class="form-label">{{ __('Meta Description') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('meta_description') is-invalid @enderror" type="text"
                                id="meta_description" name="meta_description" required
                                placeholder="{{ __('Enter service meta description') }}" />
                            @error('meta_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-12">
                            <label for="details" class="form-label">{{ __('Details') }}</label><span
                                class="text-danger">*</span>
                            <textarea class="form-control @error('details') is-invalid @enderror" id="details" name="details" required
                                placeholder="{{ __('Enter service meta description') }}" cols="30" rows="10"></textarea>
                            @error('details')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-6">
                            <label for="meta_image" class="form-label">{{ __('Meta Image') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('meta_image') is-invalid @enderror" type="file"
                                id="meta_image" name="meta_image" required accept="image/*"/>
                            @error('meta_image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-6">
                            <label for="main_image" class="form-label">{{ __('Main Image') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('main_image') is-invalid @enderror" type="file"
                                id="main_image" name="main_image" required accept="image/*"/>
                            @error('main_image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-3">{{ __('Add Service') }}</button>
                    </div>
                </form>
            </div>
            <!-- /Account -->
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#name').on('keyup change', function() {
                let name = $(this).val();
                let slug = name
                    .toLowerCase()
                    .trim()
                    .replace(/[^a-z0-9\s-]/g, '')     // Remove special characters
                    .replace(/\s+/g, '-')             // Replace spaces with dashes
                    .replace(/-+/g, '-');             // Replace multiple dashes with single dash
                $('#slug').val(slug);
            });
        });
    </script>
@endsection

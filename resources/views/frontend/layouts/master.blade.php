<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ env('APP_NAME') }} - @yield('title')</title>
    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keywords')">
    @include('frontend.layouts.meta')
    @include('frontend.layouts.css')
    @yield('css')
</head>

<body class="index-page">

    @include('frontend.layouts.header')


    <main class="main">
        @yield('content')
    </main>

    @include('frontend.layouts.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    @include('frontend.layouts.script')

</body>

</html>

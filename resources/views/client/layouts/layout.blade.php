<!DOCTYPE html>
<html lang="vi">


<!-- Mirrored from html.themewant.com/moonlit/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Nov 2024 05:08:09 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="description" content="{{ $homestayInfo->description }}">
    <meta name="keywords" content="{{ $homestayInfo->title }}, {{ $homestayInfo->description }}">
    <meta name="robots" content="index, follow">
    <!-- for open graph social media -->
    <meta property="og:title" content="{{ $homestayInfo->title }}">
    <meta property="og:description" content="{{ $homestayInfo->description }}">
    <!-- favicon -->
    <link rel="icon" href="{{ assets('/client/assets/icons/ytyhomestay-icon.ico') }}" type="image/x-icon">
    <!-- title -->
    <title>@yield('title')</title>

    @include('client.components.styles')
    @stack('styles')
</head>

<body>
    @include('client.components.header')

    @yield('content')

    @include('client.components.footer')
    @include('client.components.scripts')

    @stack('scripts')

</body>

</html>

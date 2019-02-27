<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- SEO meta tags -->
    @yield('meta_seo')

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ URL::asset('favicon.ico') }}" type="image/x-icon">

    <!-- Styles. -->
    @yield('styles')

    <!-- Page title. -->
    <title>Welcome - @yield('title')</title>
</head>

<body>
    <!-- Main content -->
    @yield('content')

    <!-- Scripts. -->
    @yield('scripts')
</body>

<!-- Created by Mihai Constantin - m.a.constantin@uvt.nl -->
</html>

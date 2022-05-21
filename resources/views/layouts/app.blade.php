<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="js">

<head>
    <base href="{{ url('/') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <title>{{ config('app.name', 'TruSpices Indonesia') }}</title> --}}
    <title>@yield('title-page') - C4.5 Method</title>
    <link rel="shortcut icon" href="{{ asset('lib/images/favicon.png') }}">
    <link rel="icon" href="{{ asset('lib/images/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('lib/images/favicon.png') }}">
    {{-- Fonts --}}
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    {{-- StyleSheets --}}
    <link rel="stylesheet" href="{{ asset('lib/css/dashlite-dashboard/dashlite.min.css?ver=2.9.1') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('lib/css/dashlite-dashboard/theme.min.css?ver=2.9.1') }}">
    <link rel="stylesheet" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <link rel="stylesheet" href="{{ asset('lib/css/main.min.css') }}">
    @yield('meta-link')
</head>

<body class="nk-body @yield('body')">
    <div class="nk-app-root">
        @yield('content')
    </div>
    @include('layouts.modal')
    {{-- app-root @e --}}
    {{-- JavaScript --}}
    <script src="{{ asset('lib/js/dashlite-dashboard/bundle.min.js?ver=2.9.1') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/js/dashlite-dashboard/scripts.min.js?ver=2.9.1') }}" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js" type="text/javascript"></script>
    @yield('script')
    <script src="{{ asset('lib/js/main.min.js') }}" type="text/javascript"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'masem') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/stack-interface.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('css/socicon.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/iconsmind.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ ('css/lightbox.min.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ ('css/flickity.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700" rel="stylesheet">
</head>
<body>
<div id="app">
    @include('site.partials.sitespecific.nav')
</div>

<div class="main-container">

    @yield('content')

    @include('site.partials.sitespecific.footer')

</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('js/parallax.js') }}"></script>
<script src="{{ asset('js/twitterfetcher.min.js') }}"></script>
<script src="{{ asset('js/spectragram.min.js') }}"></script>
<script src="{{ asset('js/smooth-scroll.min.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
<script src="{{ asset('js/flickity.min.js')}}"></script>
<script src="{{ asset('js/isotope.min.js')}}"></script>
<script src="{{ asset('js/lightbox.min.js')}}"></script>

</body>
</html>

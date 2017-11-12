<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
   @include('layouts.partials.meta')

   @include('layouts.partials.css')
</head>
<body>
<div id="app">
    @include('site.partials.sitespecific.nav')
</div>

<div class="main-container">
    @yield('content')

    @include('site.partials.sitespecific.footer')
</div>

@include('layouts.partials.js')
</body>
</html>

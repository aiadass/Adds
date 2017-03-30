<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    @include('layouts.includes.head')
</head>
<body>
<div id="app">
    @include('layouts.includes.header')

    @yield('content')
    @include('layouts.includes.footer')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

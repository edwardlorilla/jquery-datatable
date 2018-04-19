<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel='stylesheet prefetch' href='{{asset('css/app.css')}}'/>
</head>
<body>
<div id="app">
    <app/>
</div>
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>

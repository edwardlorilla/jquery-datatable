<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel='stylesheet prefetch' href='//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css'>
</head>
<body>
<div id="app">
    <app/>
</div>
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>

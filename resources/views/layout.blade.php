<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>laravel-comics</title>
    @vite('resources/js/app.js')
</head>

<body>
    @include('partials.header')
    @yield('content')
    @include('partials.footer')
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">-->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    @include('header')
    @yield('content')
</body>
</html>

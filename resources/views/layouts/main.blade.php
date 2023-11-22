<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oasispavilion</title>

    <!-- css -->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    {{-- @if (Request::is('dashboard/books*'))
        <link rel="stylesheet" href="{{ asset('/css/detail.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    @endif --}}
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/detail.css') }}">

    <!-- font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Code&family=Poppins:ital,wght@0,100;0,300;0,600;1,100&display=swap"
        rel="stylesheet">

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/ccfc593106.js" crossorigin="anonymous"></script>

    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</head>

<body>
    @include('layouts.nav')


    @yield('container')
</body>

</html>

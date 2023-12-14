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

    <!-- footer -->
    <div class="pt-4">
        <footer>
            <div class="container">
                <div class="row align-items-start footer-list">
                    <div class="right col-lg-4 col-sm-12">
                        <div class="logo">
                            <a class="navbar-brand title-footer" href="#"><span class="first">Oasis</span><span
                                    class="second">pavilion</span></a>
                            <p>instant library can be accessed from anywhere</p>
                        </div>
                    </div>
                    <div class="link-boxes col-lg-8 col-sm-12">
                        <div class="row align-item-start">
                            <ul class="box col-4">
                                <li class="link-name">For Beginners</li>
                                <li><a href="#">New Account</a></li>
                                <li><a href="#">Start Borrow a Book</a></li>
                                <li><a href="#">Start Booking a Room</a></li>
                            </ul>
                            <ul class="box col-4">
                                <li class="link-name">Explore Us</li>
                                <li><a href="#">Our Carrers</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Send Feedback</a></li>
                            </ul>
                            <ul class="box col-4">
                                <li class="link-name">Connect Us</li>
                                <li><a href="#">support@Oasispavilion.co.id</a></li>
                                <li><a href="#">021-3456-7890</a></li>
                                <li><a href="#">Oasispavilion, Depok, Jogjakarta</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p class="text-center copyright-text">Copyright 2023 • All rights reserved • Oasisipavilion</p>
            </div>
        </footer>
    </div>
</body>

</html>

@extends('layouts.main')

@section('container')
    <!-- hero section -->
    <div class="hero" id="hero-section">
        <div class="container">
            <div class="row align-items-start">
                <div class="col">
                    <div class="main-text text-start">
                        <h1 class="text-hero">lazy to borrow books manually, start with us</h1>
                        <p class="second-text-hero">We provide what you need to enjoy
                            Ease of borrowing books from anywhere, both physical books and e-books.</p>
                        <button type="button" class="btn btn-hero-custom ">View more</button>
                    </div>
                </div>
                <div class="col">
                    <div class="image">
                        <div class="rectangle"></div>
                        <img src="/img/hero-pict.jpg" class="img-fluid img-hero-custom" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- content section -->
    <div class="content" id="content-section">
        <div class="container container-content">
            <h1 class="text-header">Book List</h1>
            <div class="row">
                @foreach ($books as $book)
                    <div class="col-lg-3 d-block mb-4">
                        <div class="card card-custom">
                            <div class="card-rectangle">
                                <div class="available">
                                    <p>available : {{ $book->stok }}</p>
                                </div>
                                <a href="detail.html">
                                    <img src="/img/apitauhid.png" class="card-img-top card-img-custom">
                                </a>
                            </div>
                            <div class="card-body card-body-custom">
                                <h5 class="card-title card-title-custom text-over">{{ $book->title }}</h5>
                                <p class="card-text card-text-custom">Genre: Social, Education</p>
                                <div class="rating">
                                    <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                    <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                    <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                    <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                    <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                </div>
                                @auth
                                    <button type="button" class="btn btn-card-custom"><a
                                            href="/dashboard/books/{{ $book->slug }}"><a href="">View More</a></button>
                                @else
                                    <button type="button" class="btn btn-card-custom"
                                        onclick="alert('Anda harus login terlebih dahulu!')"><a href="">View
                                            More</a></button>
                                @endauth
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-end mb-5">
                {{ $books->links() }}
            </div>
        </div>
    </div>

    <!-- booking section -->
    <div class="booking" id="booking-section">
        <div class="container">
            <h1 class="text-header">Booking Room</h1>
            <div class="row align-items-start">
                <div class="col">
                    <div class="image">
                        <div class="rectangle-booking"></div>
                        <img src="/img/booking.jpg" class="img-fluid img-booking-custom" alt="...">
                    </div>
                </div>
                <div class="col">
                    <div class="main-text text-start">
                        <p class="second-text-booking">Start the meeting with a comfortable room without interruptions and
                            queues. Organize everything from anywhere without worrying about the room being full.</p>
                        <button type="button" class="btn btn-hero-custom" data-bs-toggle="modal"
                            data-bs-target="#myModal-booking" data-bs-whatever="@getbootstrap">Booking Now</button>
                        <div class="modal fade backdrop-custom" id="myModal-booking" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <button type="button" class="btn-close close-custom" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            <div class="container modal-dialog modal-dialog-centered">
                                <div class="modal-dialog-booking-custom">
                                    <div class="modal-content modal-custom">
                                        <div class="modal-body modal-booking-custom">
                                            <div class="modal-header">
                                                <Sign class="modal-title fs-5 title-modal-custom">Booking Room</h1>
                                            </div>
                                            <form>
                                                <input class="mb-3">
                                                <label for="booking-time"
                                                    class="col-form-label label-booking-custom">Time</label>
                                                <input type="datetime" class="form-control form-booking-custom"
                                                    id="booking-time" placeholder="Time Borrow"></input>
                                        </div>
                                        <div class="mb-3">
                                            <label for="booking-date"
                                                class="col-form-label label-booking-custom">Date</label>
                                            <input type="datetime" class="form-control form-booking-custom" id="booing-date"
                                                placeholder="Date Borrow"></input>
                                        </div>
                                        <div class="mb-3">
                                            <label for="room" class="col-form-label label-booking-custom">Choose
                                                Room</label>
                                            <select name="room" id="room"
                                                class="form-booking-custom choose-custom">
                                                <option class="dropdown-item item-custom" value="Regular">Regular</option>
                                                <option class="dropdown-item item-custom" value="Meeting Room">Meeting
                                                    Room</option>
                                                <option class="dropdown-item item-custom" value="VIP">VIP</option>
                                                <option class="dropdown-item item-custom" value="VVIP">VVIP</option>
                                            </select>
                                        </div>
                                        </form>
                                        <button type="submit" class="btn btn-primary btn-primary-custom">Booking</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- about us -->
    <div class="about-us" id="about-us">
        <div class="container">
            <h1 class="text-header">About us</h1>
            <div class="row align-items-start">
                <div class="col col-custom">
                    <div class="main-text-us text-start">
                        <p class="second-text-about">Start the meeting with a comfortable room without interruptions and
                            queues. Organize everything from anywhere without worrying about the room being full.</p>
                        <a href="member.html"><button type="button" class="btn btn-hero-custom ">View
                                Member</button></a>
                    </div>
                </div>
                <div class="col col-custom">
                    <div class="image">
                        <img src="/img/team.png" class="img-fluid img-booking-custom" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
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

    <script>
        const myModal = document.getElementById('myModal')
        const myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', () => {
            myInput.focus()
        })
    </script>
@endsection

@extends('layouts.main')

@section('container')
    <div class="container my-5">
        <div class="row my-4 pt-5">
            <div class="col-5 mt-5">
                <p class="fs-1 fw-bold pt-5">Lazy to borrow Book manually, start with us</p>
                <div class="col-10 mt-2">
                    <p class="fs-5">We provide what you need to enjoy Ease of borrowing books from anywhere, both physical
                        book
                        and
                        E-books</p>
                </div>
            </div>
            <div class="col-7 d-flex justify-content-end align-items-center position-relative d-inline-block">
                <img class="home-img position-absolute" src="https://source.unsplash.com/670x340/?Library">
                <div class="letak-border-img style-border-img"></div>
            </div>
        </div>
        <div class="row">
            <p class="fs-3 fw-semibold pt-5">Book list</p>
            <div class="row d-flex d-inline-block">
                @foreach ($books as $book)
                    <div class="col-3 style-box-buku d-block mx-3 pb-2 mb-3" style="width: 290px">
                        <div class="row d-flex justify-content-center">
                            <img class="rounded mt-3" src="https://source.unsplash.com/260x260/?book" alt=""
                                width="260" height="260">
                        </div>
                        <p class="fs-5 fw-medium mb-0 text-over">{{ $book->title }}</p>
                        <p class="mb-0">Genre: Social, Action</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="15" viewBox="0 0 75 15"
                            fill="none">
                            <path
                                d="M7.5 0L9.18386 5.18237H14.6329L10.2245 8.38525L11.9084 13.5676L7.5 10.3647L3.09161 13.5676L4.77547 8.38525L0.367076 5.18237H5.81614L7.5 0Z"
                                fill="#FFD700" />
                            <path
                                d="M22.5 0L24.1839 5.18237H29.6329L25.2245 8.38525L26.9084 13.5676L22.5 10.3647L18.0916 13.5676L19.7755 8.38525L15.3671 5.18237H20.8161L22.5 0Z"
                                fill="#FFD700" />
                            <path
                                d="M37.5 0L39.1839 5.18237H44.6329L40.2245 8.38525L41.9084 13.5676L37.5 10.3647L33.0916 13.5676L34.7755 8.38525L30.3671 5.18237H35.8161L37.5 0Z"
                                fill="#FFD700" />
                            <path
                                d="M52.5 0L54.1839 5.18237H59.6329L55.2245 8.38525L56.9084 13.5676L52.5 10.3647L48.0916 13.5676L49.7755 8.38525L45.3671 5.18237H50.8161L52.5 0Z"
                                fill="#FFD700" />
                            <path
                                d="M67.5 0L69.1839 5.18237H74.6329L70.2245 8.38525L71.9084 13.5676L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                fill="#D9D9D9" />
                            <path
                                d="M67.5 0L67.5 6.5L67.5 10.3647L63.0916 13.5676L64.7755 8.38525L60.3671 5.18237H65.8161L67.5 0Z"
                                fill="#FFD700" />
                        </svg>
                        <div class="col-12 d-grid gap-1">
                            <a class="btn bg-info shadow" href="">Borrow Now</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-end">
                {{ $books->links() }}
            </div>
        </div>
    </div>

    <div class="container-fluid bg-room">
        <div class="container">
            <div class="row py-5">
                <p class="fs-3 fw-semibold pt-2">Booking Room</p>
                <div class="col-6 d-flex align-items-start position-relative d-inline-block">
                    <img class="home-img" src="https://source.unsplash.com/470x260/?meetingRoom">
                </div>
                <div class="col-6 mt-5">
                    <div class="col-10 mt-2">
                        <p class="fs-5">
                            We provide what you need to enjoy Ease of borrowing books from anywhere, both physical
                            book
                            and
                            E-books
                        </p>
                        <a class="btn bg-info shadow btn-glow text-light" href="">Booking Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container">
            <div class="row py-5">
                <p class="fs-3 fw-semibold pt-2">About Us</p>
                <div class="col-7 mt-5  d-flex align-items-center">
                    <div class="col-10 mt-2">
                        <p class="fs-5">
                            We provide what you need to enjoy Ease of borrowing books from anywhere, both physical
                            book
                            and
                            E-books
                        </p>
                        <a class="btn bg-info shadow btn-glow text-light" href="">Booking Now</a>
                    </div>
                </div>
                <div class="col-5 d-flex justify-content-end align-items-center position-relative d-inline-block">
                    <img src="/img/aboutus.png" style="height: 360">
                </div>
            </div>
        </div>
    </div>
@endsection

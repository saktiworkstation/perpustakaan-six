@extends('layouts.main')

@section('container')
    <div class="container container-custom">
        <div class="row row-1-custom">

            @foreach ($users as $user)
                <div class="col-lg-4 py-4">
                    <div class="card card-custom">
                        <div class="card-rectangle">
                            <a href="detail.html">
                                <img src="/img/user.jpg" class="card-img-top card-img-custom" alt="...">
                            </a>
                        </div>
                        <div class="card-body card-body-custom">
                            <p><b>{{ $user->email }}</b></p>
                            <p><span>{{ $user->username }}</span></p>
                            <p><span>{{ $user->name }}</span></p>
                            <p><span>{{ $user->jenis_kelamin }}</span></p>
                            <div class="sosmed-col row pt-2">
                                <div class="col-lg-3"><i class="fa-brands fa-facebook fa-2xl"></i></div>
                                <div class="col-lg-3"><i class="fa-brands fa-instagram fa-2xl"></i></div>
                                <div class="col-lg-3"><i class="fa-brands fa-linkedin fa-2xl"></i></div>
                                <div class="col-lg-3"><i class="fa-solid fa-envelope fa-2xl"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="d-flex justify-content-center mb-5">
            {{ $users->links() }}
        </div>
    </div>
@endsection

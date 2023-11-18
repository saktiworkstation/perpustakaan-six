@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-8 main-content">
                <div class="row">
                    <div class="col-4">
                        <figure class="figure">
                            <img src="/img/apitauhid.png" class="figure-img img-fluid rounded" alt="...">
                        </figure>
                    </div>
                    <div class="col-8">
                        <h1 class="text-head">{{ $book->title }}</h1>
                        <div class="rating-text row">
                            <div class="rating">
                                <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                            </div>
                            <div>
                                <p class="text-rating">5 of 5 <span>|</span> 180 review</p>
                            </div>
                        </div>
                        <p>Author : <span>{{ $book->penulis }}</span></p>
                        <p>Publisher : <span>{{ $book->penerbit }}</span></p>
                        <p>Year of publication : <span>{{ $book->thn_terbit }}</span></p>
                        <p>Availabe : <span>{{ $book->stok }}</span></p>
                        <button type="button" class="btn btn-card-custom mb-5">Borrow</button>
                    </div>
                </div>
                <div class="row row-sinopsis">
                    <h1 class="sinopsis-head">Sinopsis</h1>
                    <p>{!! $book->descriptions !!}</p>
                </div>
                <div class="row ulasan-row">
                    <h1 class="ulasan-head">Review</h1>
                    <div class="col-md-2">
                        <div class="profile-pict">
                            <img src="" alt="" srcset="">
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="ulasan">
                            <div class="detail-ulasan">
                                <h3 class="name">Nama</h3>
                                <div class="rating-review">
                                    <div class="rating">
                                        <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                        <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                        <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                        <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                        <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                    </div>
                                </div>
                                <p>22 October 2023</p>
                            </div>
                            <div class="isi-ulasan">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident libero ab dicta
                                    tempore enim amet.
                                    Exercitationem, accusantium quod! Alias placeat voluptates non illum delectus sit fuga
                                    odit fugiat tenetur.
                                    Quos quaerat quo ab sequi libero, consectetur hic tempora exercitationem magni
                                    architecto? Rerum,
                                    perferendis odit quibusdam labore culpa veritatis illo id!</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Similar --}}
            </div>
            <div class="col-4 side-content">
                <h1 class="text-head similar">Similar</h1>
                <div class="row card-detail-custom">
                    <div class="col-5">
                        <div class="pict-bg">
                            <a href="#">
                                <img src="assets/img/card/ayah.png" class="card-img-top" alt="...">
                            </a>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="card-body">
                            <h5 class="card-title">Ayah</h5>
                            <div class="rating rating-review card-side">
                                <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                            </div>
                            <p>Author : <span>Andrea Hirata</span></p>
                            <p>Publisher : <span>Bentang Pustaka</span></p>
                            <p>Year of publication : <span>2018</span></p>
                            <p>Availabe : <span>1</span></p>
                        </div>
                    </div>
                </div>

                <div class="row card-detail-custom">
                    <div class="col-5">
                        <div class="pict-bg">
                            <a href="#">
                                <img src="assets/img/card/ayah.png" class="card-img-top" alt="...">
                            </a>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="card-body">
                            <h5 class="card-title">Ayah</h5>
                            <div class="rating rating-review card-side">
                                <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                            </div>
                            <p>Author : <span>Andrea Hirata</span></p>
                            <p>Publisher : <span>Bentang Pustaka</span></p>
                            <p>Year of publication : <span>2018</span></p>
                            <p>Availabe : <span>1</span></p>
                        </div>
                    </div>
                </div>

                <div class="row card-detail-custom">
                    <div class="col-5">
                        <div class="pict-bg">
                            <a href="#">
                                <img src="assets/img/card/ayah.png" class="card-img-top" alt="...">
                            </a>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="card-body">
                            <h5 class="card-title">Ayah</h5>
                            <div class="rating rating-review card-side">
                                <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                            </div>
                            <p>Author : <span>Andrea Hirata</span></p>
                            <p>Publisher : <span>Bentang Pustaka</span></p>
                            <p>Year of publication : <span>2018</span></p>
                            <p>Availabe : <span>1</span></p>
                        </div>
                    </div>
                </div>

                <div class="row card-detail-custom">
                    <div class="col-5">
                        <div class="pict-bg">
                            <a href="#">
                                <img src="assets/img/card/ayah.png" class="card-img-top" alt="...">
                            </a>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="card-body">
                            <h5 class="card-title">Ayah</h5>
                            <div class="rating rating-review card-side">
                                <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                            </div>
                            <p>Author : <span>Andrea Hirata</span></p>
                            <p>Publisher : <span>Bentang Pustaka</span></p>
                            <p>Year of publication : <span>2018</span></p>
                            <p>Availabe : <span>1</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

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
                        <button type="button" class="btn btn-card-custom mb-5" data-bs-toggle="modal"
                            data-bs-target="#confirmModal">Borrow</button>
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
                                <img src="/img/apitauhid.png" class="card-img-top" alt="...">
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


    <!-- Modal -->
    <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmModalLabel">Confirmation Modal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Isi formulir di sini -->
                    <form method="post" action="/dashboard/loans/confirm" class="mb-5" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="buku_id" class="form-label">Judul Buku</label>
                            <select class="form-select" name="buku_id" id="buku_id">
                                @foreach ($books as $book)
                                    @if ($book->stok >= 1)
                                        <option value="{{ $book->id }}">{{ $book->title }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="tgl_pinjam" class="form-label">Tahun Terbits</label>
                            <input type="date" class="form-control @error('tgl_pinjam') is-invalid @enderror"
                                id="tgl_pinjam" name="tgl_pinjam" required value="{{ old('tgl_pinjam') }}">
                            @error('tgl_pinjam')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!-- Tombol untuk mengirim formulir -->
                        <button type="submit" class="btn btn-primary">Confirmation</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <!-- Tombol untuk menutup modal -->
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Sertakan Bootstrap CSS dan JavaScript -->
    {{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"> --}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> --}}
@endsection

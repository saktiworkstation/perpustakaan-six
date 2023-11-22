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
                                @for ($i = 0; $i < $final_rate; $i++)
                                    <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                @endfor
                            </div>
                            <div>
                                <p class="text-rating">{{ $final_rate }} of 5 <span>|</span>{{ $all_reviews->count() }}
                                    Review</p>
                            </div>
                        </div>
                        <p>Author : <span>{{ $book->penulis }}</span></p>
                        <p>Publisher : <span>{{ $book->penerbit }}</span></p>
                        <p>Year of publication : <span>{{ $book->thn_terbit }}</span></p>
                        <p>Availabe : <span>{{ $book->stok }}</span></p>
                        <button type="button" class="btn btn-borrow-custom mb-5" data-bs-toggle="modal"
                            data-bs-target="#confirmModal">Borrow</button>
                    </div>
                </div>
                <div class="row row-sinopsis">
                    <h1 class="sinopsis-head">Sinopsis</h1>
                    <p>{!! $book->descriptions !!}</p>
                </div>

                {{-- Review --}}
                <div class="row ulasan-row">
                    <h1 class="ulasan-head">Review</h1>
                    <div class="col-12">
                        @if ($user_review->count() > 0)
                            {{-- if user already have review for this book --}}
                            <form method="post" action="/dashboard/reviews/update/{{ $user_review->id }}" class="mb-5"
                                enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="mb-3">
                                    <label for="rate" class="form-label">Rating (1-5)</label>
                                    <input type="number" class="form-control @error('rate') is-invalid @enderror"
                                        id="rate" name="rate" min="1" max="5" required
                                        value="{{ old('rate', $user_review->rate) }}">
                                    @error('rate')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="descriptions" class="form-label">Provide a Review</label>
                                    <textarea class="form-control @error('descriptions') is-invalid @enderror" id="descriptions" name="descriptions"
                                        required>{{ old('descriptions', $user_review->descriptions) }}</textarea>
                                    @error('descriptions')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <!-- Tombol untuk mengirim formulir -->
                                <button type="submit" class="btn btn-primary">Submit Update Review</button>
                            </form>
                        @else
                            {{-- If user never review --}}
                            <form method="post" action="/dashboard/reviews/store" class="mb-5"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="book_id" value="{{ $book->id }}">
                                <div class="mb-3">
                                    <label for="rate" class="form-label">Rating (1-5)</label>
                                    <input type="number" class="form-control @error('rate') is-invalid @enderror"
                                        id="rate" name="rate" min="1" max="5" required
                                        placeholder="1 - 5" value="{{ old('rate') }}">
                                    @error('rate')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="descriptions" class="form-label">Provide a Revieww</label>
                                    <textarea class="form-control @error('descriptions') is-invalid @enderror" id="descriptions" name="descriptions"
                                        required placeholder="Provide a Review">{{ old('descriptions') }}</textarea>
                                    @error('descriptions')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <!-- Tombol untuk mengirim formulir -->
                                <button type="submit" class="btn btn-primary">Submit Review</button>
                            </form>
                        @endif
                    </div>
                    @if ($reviews->count() == 0)
                        <h3>There are no reviews yet</h3>
                    @else
                        @foreach ($reviews as $review)
                            <div class="col-md-2">
                                <div class="profile-pict">
                                    <img src="" alt="" srcset="">
                                </div>
                            </div>
                            <div class="col-10">
                                <div class="ulasan">
                                    <div class="detail-ulasan">
                                        <h3 class="name">{{ $review->user->name }}</h3>
                                        <div class="rating-review">
                                            <div class="rating">
                                                @for ($i = 0; $i < $review->rate; $i++)
                                                    <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                                @endfor
                                            </div>
                                        </div>
                                        <p>{{ $review->time_review }}</p>
                                    </div>
                                    <div class="isi-ulasan">
                                        <p>{!! $review->descriptions !!}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
@endsection

@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Buku</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @can('admin')
        <a href="/dashboard/books/create" class="btn btn-primary mb-3">Tambah Buku Baru</a>
    @endcan

    {{-- Card --}}
    @if ($books->count())
        @foreach ($books as $book)
            <div class="row d-flex bg-dark text-white py-3 mt-4 rounded">
                <div class="col-md-3 ">
                    <div class="justify-content-start" style="width: 18rem;">
                        <img src="https://source.unsplash.com/230x370/?bookCover" class="rounded border border-secondary"
                            alt="Books">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="justify-content-end">
                        <h3>{{ $book->title }}</h3>
                        <p>Penulis : {{ $book->penulis }}</p>
                        <p>Penerbit : {{ $book->penerbit }}</p>
                        <p>Stok Buku : {{ $book->stok }}</p>
                        <p>Tahun terbit : {{ $book->thn_terbit }}</p>
                    </div>
                    <h6 class="mb-2 text-secondary">{{ $book->created_at->diffForHumans() }}</h6>

                    @can('admin')
                        <a href="/dashboard/books/{{ $book->slug }}/edit" class="mt-3 btn btn-warning mb-3 mx-3">Edit
                            books</a>
                    @endcan

                    <a href="/dashboard/loans/{{ $book->slug }}" class="mt-3 btn btn-success mb-3">Pinjam</a>
                </div>
            </div>
        @endforeach
    @else
        <p class="text-center fs-4">Buku Tidak Ditemukan.</p>
    @endif
    {{-- Card --}}
@endsection

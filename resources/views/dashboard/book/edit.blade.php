@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Update Book</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/books/{{ $book->slug }}" class="mb-5" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                    name="title" required autofocus value="{{ old('title', $book->title) }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
                    required value="{{ old('slug', $book->slug) }}" placeholder="contoh-untuk-slug">
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="penulis" class="form-label">Nama Penulis</label>
                <input type="text" class="form-control @error('penulis') is-invalid @enderror" id="penulis"
                    name="penulis" required value="{{ old('penulis', $book->penulis) }}">
                @error('penulis')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="penerbit" class="form-label">Nama Penerbit</label>
                <input type="text" class="form-control @error('penerbit') is-invalid @enderror" id="penerbit"
                    name="penerbit" required value="{{ old('penerbit', $book->penerbit) }}">
                @error('penerbit')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="thn_terbit" class="form-label">Tahun Terbits</label>
                <input type="date" class="form-control @error('thn_terbit') is-invalid @enderror" id="thn_terbit"
                    name="thn_terbit" required value="{{ old('thn_terbit', $book->thn_terbit) }}">
                @error('thn_terbit')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="stok" class="form-label">Jumlah Stok</label>
                <input type="number" class="form-control @error('stok') is-invalid @enderror" id="stok" name="stok"
                    required value="{{ old('stok', $book->stok) }}">
                @error('stok')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="descriptions" class="form-label">Descriptions</label>
                @error('descriptions')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <input id="descriptions" type="hidden" name="descriptions"
                    value="{{ old('descriptions', $book->descriptions) }}">
                <trix-editor input="descriptions"></trix-editor>
            </div>
            <button type="submit" class="btn btn-primary">Include Books</button>
        </form>
    </div>

    <script>
        // start slugable
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/books/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });
        // end slugable
    </script>
@endsection

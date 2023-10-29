@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Loan Comfirmation</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/loans/confirm" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="buku_id" class="form-label">Judul Buku</label>
                <select class="form-select" name="buku_id" id="buku_id">
                    @foreach ($books as $book)
                        @if ($data->id == $book->id)
                            <option value="{{ $book->id }}" selected>{{ $book->title }}</option>
                        @else
                            <option value="{{ $book->id }}">{{ $book->title }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="tgl_pinjam" class="form-label">Tahun Terbits</label>
                <input type="date" class="form-control @error('tgl_pinjam') is-invalid @enderror" id="tgl_pinjam"
                    name="tgl_pinjam" required value="{{ old('tgl_pinjam') }}">
                @error('tgl_pinjam')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Confirmation</button>
        </form>
    </div>
@endsection

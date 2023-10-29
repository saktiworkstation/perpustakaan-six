@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Loan Comfirmation</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/bookings/confirm" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="room_id" class="form-label">Judul Buku</label>
                <select class="form-select" name="room_id" id="room_id">
                    @foreach ($rooms as $room)
                        @if ($data->id == $room->id)
                            <option value="{{ $room->id }}" selected>{{ $room->nama }}</option>
                        @else
                            <option value="{{ $room->id }}">{{ $room->nama }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="waktu_pesan" class="form-label">Tahun Terbits</label>
                <input type="date" class="form-control @error('waktu_pesan') is-invalid @enderror" id="waktu_pesan"
                    name="waktu_pesan" required value="{{ old('waktu_pesan') }}">
                @error('waktu_pesan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="jam" class="form-label">Tahun Terbits</label>
                <input type="time" class="form-control @error('jam') is-invalid @enderror" id="jam" name="jam"
                    required value="{{ old('jam') }}">
                @error('jam')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Confirmation</button>
        </form>
    </div>
@endsection

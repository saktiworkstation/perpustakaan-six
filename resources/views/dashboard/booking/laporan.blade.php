@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Booking Report</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive col-lg-8">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Room name</th>
                    <th scope="col">Nama Pemesan</th>
                    <th scope="col">Tanggal Booking</th>
                    <th scope="col">Jam Booking</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $booking)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $booking->room->nama }}</td>
                        <td>{{ $booking->user->username }}</td>
                        <td>{{ $booking->waktu_pesan }}</td>
                        <td>{{ $booking->jam }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

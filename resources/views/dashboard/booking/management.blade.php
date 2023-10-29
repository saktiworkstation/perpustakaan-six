@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Loans Management</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show col-lg-8" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive col-lg-12">
        {{-- <a href="/dashboard/loans" class="btn btn-primary mb-3">Create</a> --}}
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Room name</th>
                    <th scope="col">Nama Pemesan</th>
                    <th scope="col">Tanggal Booking</th>
                    <th scope="col">Jam Booking</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $booking)
                    @if ($booking->room->status >= 2)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $booking->room->nama }}</td>
                            <td>{{ $booking->user->username }}</td>
                            <td>{{ $booking->waktu_pesan }}</td>
                            <td>{{ $booking->jam }}</td>
                            <td>
                                @if ($booking->room->status == 2)
                                    <a href="/dashboard/bookings/grantIn/{{ $booking->room_id }}"
                                        class="btn btn-primary btn-sm">Konfirmasi masuk</a>
                                @elseif($booking->room->status == 3)
                                    <a href="/dashboard/bookings/grantOut/{{ $booking->room_id }}"
                                        class="btn btn-success btn-sm">Konfirmasi selesai</a>
                                @endif
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

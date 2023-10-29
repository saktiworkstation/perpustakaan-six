@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Rooms</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @can('admin')
        <a href="/dashboard/rooms/create" class="btn btn-primary mb-3">Include new Room</a>
    @endcan

    <div class="row justify-content-center">
        @if ($rooms->count())
            @foreach ($rooms as $room)
                <div class="col-md-6 my-2">
                    <div class="card text-center">
                        <div class="card-header">
                            {{ $room->nama }}
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{!! $room->descriptions !!}</h5>
                            @if ($room->status == 1)
                                <p>Status Ruangan : Kosong</p>
                            @elseif ($room->status == 2)
                                <p>Status Ruangan : Dipesan</p>
                            @else
                                <p>Status Ruangan : Digunakan</p>
                            @endif
                            @can('admin')
                                <a href="/dashboard/rooms/{{ $room->slug }}/edit" class="btn btn-primary">Edit Room</a>
                            @endcan

                            @if ($room->status == 1)
                                <a href="/dashboard/bookings/{{ $room->slug }}" class="mt-3 btn btn-success mb-3">Sewa</a>
                            @else
                                <a href="#" class="btn btn-light disabled"></a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p class="text-center fs-4">No Rooms Found.</p>
        @endif
    </div>
@endsection

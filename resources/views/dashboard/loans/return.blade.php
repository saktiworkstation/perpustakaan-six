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

    <div class="table-responsive col-lg-10">
        {{-- <a href="/dashboard/loans" class="btn btn-primary mb-3">Create</a> --}}
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Book Title</th>
                    <th scope="col">Nama Peminjam</th>
                    <th scope="col">Tanggal Pinjam</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($loans as $loan)
                    @if ($loan->status < 3)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $loan->book->title }}</td>
                            <td>{{ $loan->user->username }}</td>
                            <td>{{ $loan->tgl_pinjam }}</td>
                            <td>
                                @if ($loan->status == 1)
                                    <a href="/dashboard/loans/grantLoan/{{ $loan->id }}"
                                        class="btn btn-primary btn-sm">Buku Diambil</a>
                                @elseif($loan->status == 2)
                                    <a href="/dashboard/loans/grantReturn/{{ $loan->id }}"
                                        class="btn btn-success btn-sm">Buku
                                        Dikembalikan</a>
                                @endif
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

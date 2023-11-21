<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" hrefaria-current="page"
                    href="/dashboard">
                    <span data-feather="user"></span>
                    User-Dashoard
                </a>
                <a class="nav-link {{ Request::is('/dashboard/books') ? 'active' : '' }}" hrefaria-current="page"
                    href="/dashboard/books">
                    <span data-feather="calendar"></span>
                    Buku
                </a>
                <a class="nav-link {{ Request::is('/dashboard/rooms') ? 'active' : '' }}" hrefaria-current="page"
                    href="/dashboard/rooms">
                    <span data-feather="gift"></span>
                    Rooms
                </a>
                <a class="nav-link {{ Request::is('/dashboard/loans') ? 'active' : '' }}" hrefaria-current="page"
                    href="/dashboard/loans">
                    <span data-feather="file-text"></span>
                    Riwayat Peminjaman
                </a>
                <a class="nav-link {{ Request::is('/dashboard/loans/history-return') ? 'active' : '' }}"
                    hrefaria-current="page" href="/dashboard/loans/history-return">
                    <span data-feather="file-text"></span>
                    Riwayat Pengembalian
                </a>
            </li>
        </ul>

        @can('admin')
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1">
                <span>Administrator</span>
            </h6>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard/loans/management">
                        <span data-feather="edit"></span>
                        Peminjaman Buku
                    </a>
                </li>
            </ul>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard/booking/management">
                        <span data-feather="edit"></span>
                        Penyewaan Ruangan
                    </a>
                </li>
            </ul>
        @endcan
    </div>
</nav>

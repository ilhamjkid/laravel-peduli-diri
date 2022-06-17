<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <form class="position-sticky pt-3" action="/logout" method="post">
        @csrf
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">
                    <i class="bi bi-house-door"></i>
                    <span class="ms-2">Beranda</span>
                </a>
            </li>
            @can('admin')
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('admin*') ? 'active' : '' }}" href="/admin">
                        <i class="bi bi-check2-circle"></i>
                        <span class="ms-2">Admin</span>
                    </a>
                </li>
            @endcan

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-3 mb-1 text-muted">Catatan</h6>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('notes') ? 'active' : '' }}"
                    href="/notes">
                    <i class="bi bi-journal-text"></i>
                    <span class="ms-2">Daftar Catatan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('notes/create') ? 'active' : '' }}" href="/notes/create">
                    <i class="bi bi-journal-plus"></i>
                    <span class="ms-2">Tambah Catatan</span>
                </a>
            </li>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-3 mb-1 text-muted">Pengguna</h6>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('users*') ? 'active' : '' }}" href="/users">
                    <i class="bi bi-person-circle"></i>
                    <span class="ms-2">Profil</span>
                </a>
            </li>
            <li class="nav-item">
                <button class="nav-link" type="submit">
                    <i class="bi bi-box-arrow-left"></i>
                    <span class="ms-2">Keluar</span>
                </button>
            </li>
        </ul>
    </form>
</nav>

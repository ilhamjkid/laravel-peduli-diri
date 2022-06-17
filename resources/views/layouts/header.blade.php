<!-- Header -->
<header class="navbar navbar-dark sticky-top bg-dark flex-nowrap overflow-auto p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 p-2" href="/">
        <img src="{{ asset('images/PD-Circle.svg') }}" alt="Foto Logo Peduli Diri" />
        <span>Peduli Diri</span>
    </a>
    <button class="navbar-toggler d-md-none collapsed me-2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</header>

<!-- Sidebar -->
<div class="container-fluid">
    <div class="row">
        @include('partials.sidebar')
        <!-- Main -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h2 class="d-flex align-items-center main-header">
                    <img class="rounded-5" src="{{ asset('images/PD-Rectangle.svg') }}"
                        alt="Foto Logo Peduli Diri" />
                    <span class="ms-2">{{ $title }}</span>
                </h2>
                @if ($title === 'Beranda')
                    <h2>{{ $user->nama }}</h2>
                @endif
                @can('admin')
                    @if ($title === 'Admin')
                        <livewire:admin.features />
                    @endif
                @endcan
            </div>

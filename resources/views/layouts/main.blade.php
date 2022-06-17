<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Aplikasi Website Pencatatan Perjalanan" />
    <meta name="author" content="Ilham Jaya Kusuma" />
    <title>{{ $title }} | Peduli Diri</title>
    <link rel="shortcut icon" href="{{ asset('images/PD-Transparant.svg') }}" type="image/x-icon" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}" />

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="{{ asset('bootstrap/icons/bootstrap-icons.css') }}" />

    @auth
        <!-- Dashboard Style -->
        <link rel="stylesheet" href="{{ asset('bootstrap/css/dashboard.css') }}" />
    @endauth
    @guest
        <!-- Auth Style -->
        <link rel="stylesheet" href="{{ asset('bootstrap/css/auth.css') }}">
    @endguest

    @livewireStyles
</head>

<body>
    @includeWhen(Auth::check(), 'layouts.header')
    <!-- BODY -->
    @yield('container')
    <!-- BODY -->
    @includeWhen(Auth::check(), 'layouts.footer')

    <!-- Bootstrap JS -->
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>
    
    @livewireScripts
</body>

</html>

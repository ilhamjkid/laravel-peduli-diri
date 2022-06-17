@extends('layouts.main')

@section('container')
    <section class="d-flex flex-column align-items-center py-3">
        <img class="rounded-circle mb-3" src="{{ asset($user->foto ? "storage/$user->foto" : 'images/cat.jpg') }}" alt="Foto Profil" style="width: 250px" />
        <h2 class="display-6 fw-normal">Selamat Datang</h2>
        <h4 class="fs-4 fw-bold">Di Aplikasi <span class="text-primary">Peduli Diri</span></h4>
    </section>
@endsection

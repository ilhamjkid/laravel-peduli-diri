@extends('layouts.main')

@section('container')
    <main class="form-auth container">
        <div class="row justify-content-center align-items-center" style="min-height: 100vh">
            <div class="col-md-6 col-lg-5 col-xl-4 text-center">
                @if (session()->has('success'))
                    <div class="alert alert-success" style="border-radius: 8px" role="alert">
                        <strong>{{ session('success') }}</strong>
                    </div>
                @endif
                @if (session()->has('loginError'))
                    <div class="alert alert-danger" style="border-radius: 8px" role="alert">
                        <strong>{{ session('loginError') }}</strong>
                    </div>
                @endif
                <div class="card shadow overflow-hidden" style="border-radius: 10px">
                    <div class="card-body">
                        <form action="/login" method="post">
                            @csrf
                            <img class="mb-3" src="{{ asset('images/PD-Rectangle.svg') }}" alt="Foto Logo Peduli Diri" width="75" style="border-radius: 10px" />
                            <h1 class="h3 mb-3 fw-normal">Silahkan login</h1>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control @error('nik') is-invalid @enderror" style="border-radius: 8px" id="nik" name="nik" placeholder="Nomor NIK" value="{{ old('nik') }}" autofocus />
                                <label for="nik">Nomor NIK</label>
                                @error('nik')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" style="border-radius: 8px" id="password" name="password" placeholder="Password" />
                                <label for="password">Password</label>
                            </div>
                            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                            <p class="fs-6 my-2">Belum punya akun? <a class="text-decoration-none" href="/register">Registrasi</a> dulu!</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

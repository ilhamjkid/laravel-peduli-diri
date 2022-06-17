@extends('layouts.main')

@section('container')
    <main class="form-auth container">
        <div class="row justify-content-center align-items-center" style="min-height: 100vh">
            <div class="col-md-10 col-lg-7 col-xl-6 text-center">
                <div class="card shadow overflow-hidden" style="border-radius: 10px">
                    <div class="card-body">
                        <form action="/register" method="post">
                            @csrf
                            <img class="mb-3" src="{{ asset('images/PD-Rectangle.svg') }}" alt="Foto Logo Peduli Diri" width="75" style="border-radius: 10px" />
                            <h1 class="h3 mb-3 fw-normal">Silahkan registrasi</h1>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control @error('nik') is-invalid @enderror" style="border-radius: 8px" id="nik" name="nik" placeholder="Nomor NIK" value="{{ old('nik') }}" />
                                        <label for="nik">Nomor NIK</label>
                                        @error('nik')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control @error('nama') is-invalid @enderror" style="border-radius: 8px" id="name" name="nama" placeholder="Nama Lengkap" value="{{ old('nama') }}" />
                                        <label for="name">Nama Lengkap</label>
                                        @error('nama')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" style="border-radius: 8px" id="password" name="password" placeholder="Password" />
                                        <label for="password">Password</label>
                                        @error('password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" style="border-radius: 8px" id="confirm" name="password_confirmation" placeholder="Konfirmasi" />
                                        <label for="confirm">Konfirmasi</label>
                                    </div>
                                </div>
                            </div>
                            <button class="w-100 btn btn-lg btn-primary" type="submit">Registrasi</button>
                            <p class="fs-6 my-2">Sudah punya akun? Silahkan <a class="text-decoration-none" href="/login">login</a>!</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

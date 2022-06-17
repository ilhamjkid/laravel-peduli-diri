<section>
    <div class="row justify-content-center">
        <div class="col-lg-10 col-xl-9 text-center">
            <div class="card shadow overflow-hidden mb-3" style="border-radius: 10px">
                <div class="card-body">
                    <form wire:submit.prevent='update' enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-floating mb-3">
                                    <input wire:model='nik' type="number" class="form-control @error('nik') is-invalid @enderror" style="border-radius: 8px" id="nik" name="nik" placeholder="Nomor NIK" />
                                    <label for="nik">Nomor NIK</label>
                                    @error('nik')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-floating mb-3">
                                    <input wire:model='nama' type="text" class="form-control @error('nama') is-invalid @enderror" style="border-radius: 8px" id="name" name="nama" placeholder="Nama Lengkap" />
                                    <label for="name">Nama Lengkap</label>
                                    @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-floating mb-3">
                                    <input wire:model='password_lama' type="password" class="form-control @error('password_lama') is-invalid @enderror" style="border-radius: 8px" id="oldPassword" name="password_lama" placeholder="Password Lama" />
                                    <label for="oldPassword">Password Lama</label>
                                    @error('password_lama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-floating mb-3">
                                    <input wire:model='password' type="password" class="form-control @error('password') is-invalid @enderror" style="border-radius: 8px" id="newPassword" name="password" placeholder="Password Baru" />
                                    <label for="newPassword">Password Baru</label>
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <input wire:model='foto' type="file" class="form-control form-control-lg @error('foto') is-invalid @enderror" style="border-radius: 8px" id="image" name="foto" />
                                    @error('foto')
                                        <div class="invalid-feedback">
                                            {{ $message === 'Foto tidak memiliki dimensi gambar yang valid.' ? 'Foto harus memiliki rasio 1:1' : $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <button wire:click='backToProfile' class="btn btn-lg btn-secondary mb-2 mb-md-0" type="button" style="width: 100%;">Kembali</button>
                            </div>
                            <div class="col-12 col-md-6">
                                <button class="btn btn-lg btn-primary" type="submit" style="width: 100%;">Ubah Profil</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="row justify-content-center">
    <div class="col-12 col-lg-9">
        <div class="card shadow overflow-auto mb-3" style="border-radius: 10px">
            <div class="card-body d-flex flex-column align-items-center">
                <img class="rounded-circle my-3" src="{{ asset($user->foto ? "storage/$user->foto" : 'images/cat.jpg') }}" alt="Foto Profil" style="width: 200px" />
                <h4 class="fs-4 fw-normal">{{ $user->nik }}</h4>
                <h3 class="fs-3 mb-3">{{ $user->nama }}</h3>
                <button wire:click='edit("{{ $user->id }}")' type="button" class="btn btn-primary" style="font-weight: 500">Ubah Profil</button>
            </div>
        </div>
    </div>
</div>
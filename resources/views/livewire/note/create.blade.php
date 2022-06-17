<div class="row justify-content-center">
    <div class="col-12 col-lg-10 col-xl-9">
        <div class="card shadow overflow-hidden mb-3" style="border-radius: 10px">
            <div class="card-body">
                <form wire:submit.prevent='store' class="row justify-content-center">
                    <div class="row col-12 mb-1 mb-md-3">
                        <label for="date" class="col-md-5 col-lg-4 col-xl-3 col-form-label fs-5">Tanggal</label>
                        <div class="col-md-7 col-lg-8 col-xl-9">
                            <input wire:model='tanggal' type="date" id="date" name="tanggal" class="form-control fs-5 @error('tanggal') is-invalid @enderror" style="border-radius: 8px" max="{{ date('Y-m-d') }}" />
                            @error('tanggal')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row col-12 mb-1 mb-md-3">
                        <label for="time" class="col-md-5 col-lg-4 col-xl-3 col-form-label fs-5">Waktu</label>
                        <div class="col-md-7 col-lg-8 col-xl-9">
                            <input wire:model='waktu' type="time" id="time" name="waktu" class="form-control fs-5 @error('waktu') is-invalid @enderror" style="border-radius: 8px" />
                            @error('waktu')
                                <div class="invalid-feedback">
                                    {{ $message == 'Waktu tidak cocok dengan format H:i.'? 'Waktu tidak cocok dengan format yang benar.': $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row col-12 mb-1 mb-md-3">
                        <label for="location" class="col-md-5 col-lg-4 col-xl-3 col-form-label fs-5">Lokasi</label>
                        <div class="col-md-7 col-lg-8 col-xl-9">
                            <input wire:model='lokasi' type="text" id="location" name="lokasi" class="form-control fs-5 @error('lokasi') is-invalid @enderror" style="border-radius: 8px" />
                            @error('lokasi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row col-12 mb-1 mb-md-3">
                        <label for="temp" class="col-md-5 col-lg-4 col-xl-3 col-form-label fs-5">Suhu Tubuh (°C)</label>
                        <div class="col-md-7 col-lg-8 col-xl-9">
                            <input wire:model='suhu' type="number" id="temp" name="suhu" class="form-control fs-5 @error('suhu') is-invalid @enderror" style="border-radius: 8px" />
                            @error('suhu')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 my-3 mt-md-0 px-4">
                        <button type="submit" class="btn btn-outline-primary" style="border-radius: 6px">
                            Tambahkan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

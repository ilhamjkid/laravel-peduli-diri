<section>
    @if (session()->has('success'))
        <div class="alert alert-success shadow-sm text-center" role="alert">
            <strong class="fs-6">{{ session('success') }}</strong>
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-12 col-lg-9">
            <div class="card shadow overflow-hidden mb-3" style="border-radius: 10px">
                <div class="card-body p-0 row">
                    <div class="col-12 col-md-8 d-flex justify-content-center align-items-center p-2 py-md-5">
                        <h1 class="display-3 fw-normal">Total Akun</h1>
                    </div>
                    <div
                        class="col-12 col-md-4 d-flex justify-content-center align-items-center bg-primary text-white p-2 py-md-5">
                        <h1 class="display-3 fw-normal">{{ $users->count() <= 10000 ? $users->count() : '10000+' }}
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-9">
            <div class="card shadow overflow-hidden mb-3" style="border-radius: 10px">
                <div class="card-body p-0 row">
                    <div class="col-12 col-md-8 d-flex justify-content-center align-items-center p-2 py-md-5">
                        <h1 class="display-3 fw-normal">Total Catatan</h1>
                    </div>
                    <div
                        class="col-12 col-md-4 d-flex justify-content-center align-items-center bg-primary text-white p-2 py-md-5">
                        <h1 class="display-3 fw-normal">{{ $notes->count() <= 10000 ? $notes->count() : '10000+' }}
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

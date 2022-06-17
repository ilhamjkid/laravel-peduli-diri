<div class="card shadow overflow-hidden mb-3" style="border-radius: 10px">
    <div class="card-header bg-white">
        <div class="d-flex flex-wrap justify-content-between align-items-center">
            <div class="my-1 d-flex align-items-center">
                <span class="fs-6 me-2">Menampilkan</span>
                <select wire:model='pagination' class="form-select" name="pagination" style="cursor: pointer;">
                    <option value="2">2</option>
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                </select>
                <span class="fs-6 ms-2">Catatan</span>
            </div>
            <div class="my-1">
                <input wire:model='search' class="form-control" type="search" name="search" placeholder="Cari . . ." />
            </div>
        </div>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table">
                <thead class="table-light text-primary">
                    <tr>
                        <th wire:click='changeOrder("tanggal")' class="align-middle fs-6 ps-4" style="cursor: pointer;">
                            Tanggal
                            <span class="d-none d-lg-inline">
                                <span class="{{ $orderBy === 'tanggal' && $sort === 'asc' ? 'text-dark' : '' }}">&uarr;</span>
                                <span class="{{ $orderBy === 'tanggal' && $sort === 'desc' ? 'text-dark' : '' }}">&darr;</span>
                            </span>
                        </th>
                        <th wire:click='changeOrder("waktu")' class="align-middle fs-6 ps-4" style="cursor: pointer;">
                            Waktu
                            <span class="d-none d-lg-inline">
                                <span class="{{ $orderBy === 'waktu' && $sort === 'asc' ? 'text-dark' : '' }}">&uarr;</span>
                                <span class="{{ $orderBy === 'waktu' && $sort === 'desc' ? 'text-dark' : '' }}">&darr;</span>
                            </span>
                        </th>
                        <th wire:click='changeOrder("lokasi")' class="align-middle fs-6 ps-4" style="cursor: pointer;">
                            Lokasi
                            <span class="d-none d-lg-inline">
                                <span class="{{ $orderBy === 'lokasi' && $sort === 'asc' ? 'text-dark' : '' }}">&uarr;</span>
                                <span class="{{ $orderBy === 'lokasi' && $sort === 'desc' ? 'text-dark' : '' }}">&darr;</span>
                            </span>
                        </th>
                        <th wire:click='changeOrder("suhu")' class="align-middle fs-6 ps-4" style="cursor: pointer;">
                            Suhu Tubuh
                            <span class="d-none d-lg-inline">
                                <span class="{{ $orderBy === 'suhu' && $sort === 'asc' ? 'text-dark' : '' }}">&uarr;</span>
                                <span class="{{ $orderBy === 'suhu' && $sort === 'desc' ? 'text-dark' : '' }}">&darr;</span>
                            </span>
                        </th>
                        <th class="align-middle fs-6 ps-4">
                            <button wire:click='resetOrder' type="button" class="btn btn-dark">
                                <span>Reset</span> <span class="d-none d-lg-inline">Urutan</span>
                            </button>
                        </th>
                    </tr>
                </thead>
                <tbody class="border-top-0">
                    @if ($notes->count() > 0)
                        @foreach ($notes as $note)
                            <tr>
                                <td class="align-middle fs-6 ps-4">{{ $note->tanggal }}</td>
                                <td class="align-middle fs-6 ps-4">{{ substr($note->waktu, 0, 5) }}</td>
                                <td class="align-middle fs-6 ps-4">{{ $note->lokasi }}</td>
                                <td class="align-middle fs-6 ps-4">{{ $note->suhu }} °C</td>
                                <td class="align-middle fs-6 ps-4">
                                    <button wire:click='edit("{{ $note->id }}")' type="button" class="btn badge bg-info fs-6 text-white">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                    <button wire:click='destroy("{{ $note->id }}")' type="button" class="btn badge bg-danger fs-6 text-white">
                                        <i class="bi bi-backspace-fill"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr class="flex">
                            <td colspan="5" class="align-middle fs-6 text-center">
                                {{ $search !== '' ? 'Catatan tidak ditemukan!' : 'Catatan masih kosong!' }}
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer bg-white">
        {{ $notes->onEachSide(1)->links() }}
    </div>
</div>

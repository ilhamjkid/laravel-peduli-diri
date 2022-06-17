<div class="d-flex flex-wrap align-items-center">
    <button type="button" class="btn btn-outline-primary me-2" data-bs-toggle="modal" data-bs-target="#modalExport">Download Excel</button>
    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalDelete">Hapus Semua</button>

    <!-- Modal -->
    <div class="modal fade" id="modalExport" tabindex="-1" aria-labelledby="titleModalExport" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="titleModalExport">Download Excel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Pilih data yang ingin diekspor!</h5>
                </div>
                <div class="modal-footer">
                    <button wire:click='exportUsers' type="button" class="btn btn-primary me-1" data-bs-dismiss="modal">Ekspor Pengguna</button>
                    <button wire:click='exportNotes' type="button" class="btn btn-primary" data-bs-dismiss="modal">Ekspor Catatan</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="titleModalDelete" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="titleModalDelete">Hapus Semua Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Pilih data yang ingin dihapus semua!</h5>
                </div>
                <div class="modal-footer">
                    <button wire:click='destUsers' type="button" class="btn btn-primary me-1" data-bs-dismiss="modal">Hapus Pengguna</button>
                    <button wire:click='destNotes' type="button" class="btn btn-primary" data-bs-dismiss="modal">Hapus Catatan</button>
                </div>
            </div>
        </div>
    </div>
</div>

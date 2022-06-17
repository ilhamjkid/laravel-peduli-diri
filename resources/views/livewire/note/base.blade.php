<section>
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
            <strong class="fs-6">{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (!$statusUpdate)
        <livewire:note.index />
    @else
        <livewire:note.update />
    @endif
</section>

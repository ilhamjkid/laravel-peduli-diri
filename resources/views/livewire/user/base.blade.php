<section>
    @if (session()->has('success'))
        <div class="alert alert-success shadow-sm text-center" role="alert">
            <strong class="fs-6">{{ session('success') }}</strong>
        </div>
    @endif
    @if (!$statusUpdate)
        <livewire:user.index />
    @else
        <livewire:user.update />
    @endif
</section>

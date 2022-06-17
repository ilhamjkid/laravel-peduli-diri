<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Features extends Component
{
    public function render()
    {
        return view('livewire.admin.features');
    }
    
    public function destUsers()
    {
        $this->emit('destUsers');
    }

    public function destNotes()
    {
        $this->emit('destNotes');
    }

    public function exportUsers()
    {
        $this->emit('exportUsers');
    }

    public function exportNotes()
    {
        $this->emit('exportNotes');
    }
}

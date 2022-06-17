<?php

namespace App\Http\Livewire\Note;

use Livewire\Component;

class Base extends Component
{
    protected $listeners = ['editNote', 'backToAll'];

    public $statusUpdate = false;

    public function render()
    {
        return view('livewire.note.base');
    }

    public function editNote($note)
    {
        $this->emit('showEditNote', $note);
        $this->statusUpdate = true;
    }

    public function backToAll($message = null)
    {
        if ($message) session()->flash('success', $message);
        $this->statusUpdate = false;
    }
}

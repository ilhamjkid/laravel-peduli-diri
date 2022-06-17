<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class Base extends Component
{
    protected $listeners = ['editUser', 'backToProfile'];

    public $statusUpdate = false;

    public function render()
    {
        return view('livewire.user.base');
    }

    public function editUser($user)
    {
        $this->emit('showEditUser', $user);
        $this->statusUpdate = true;
    }

    public function backToProfile($message = null)
    {
        if ($message) session()->flash('success', $message);
        $this->statusUpdate = false;
    }
}

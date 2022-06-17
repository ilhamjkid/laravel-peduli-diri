<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.user.index', [
            'user' => auth()->user()
        ]);
    }

    public function edit($id)
    {
        $user = User::find($id);
        $this->emit('editUser', $user);
    }
}

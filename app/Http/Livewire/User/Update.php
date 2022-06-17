<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class Update extends Component
{
    use WithFileUploads;

    protected $listeners = ['showEditUser', 'backToProfile'];

    public $user_id;

    public $nik;

    public $nik_lama;

    public $nama;

    public $password_lama;

    public $password;

    public $foto;

    public $foto_lama;

    public function render()
    {
        return view('livewire.user.update');
    }

    public function showEditUser($user)
    {
        $this->user_id = $user['id'];
        $this->nik = $user['nik'];
        $this->nik_lama = $user['nik'];
        $this->nama = $user['nama'];
        $this->foto_lama = $user['foto'];
    }

    public function update()
    {
        $validatedRules = [
            'nama' => ['required', 'string', 'min:3', 'max:25'],
            'password_lama' => ['required', function ($attribute, $value, $fail) {
                $check = Hash::check($value, auth()->user()->password);
                if (!$check) $fail('Password lama salah.');
            }],
        ];
        if ($this->nik != $this->nik_lama) {
            $validatedRules['nik'] = ['required', 'integer', 'digits:16', 'unique:users'];
        }
        if ($this->foto) {
            $validatedRules['foto'] = ['image', 'file', 'max:5120', 'dimensions:ratio=1/1'];
        }
        if ($this->password) {
            $validatedRules['password'] = ['required', 'min:8', 'max:255'];
        }
        $validatedData = $this->validate($validatedRules);
        if ($this->password) {
            $validatedData['password'] = Hash::make($this->password);
        }
        unset($validatedData['password_lama']);
        if ($this->foto) {
            if ($this->foto_lama) Storage::delete($this->foto_lama);
            $path = $this->foto->store('user-images');
            $validatedData['foto'] = $path;
        }
        User::where('id', $this->user_id)->update($validatedData);
        $message = 'User berhasil diupdate';
        $this->emit('backToProfile', $message);
    }

    public function backToProfile()
    {
        $this->emit('backToProfile');
    }
}

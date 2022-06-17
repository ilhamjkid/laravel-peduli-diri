<?php

namespace App\Http\Livewire\Admin;

use App\Models\Note;
use App\Models\User;
use Livewire\Component;
use App\Exports\NotesExport;
use App\Exports\UsersExport;

class Index extends Component
{
    protected $listeners = [
        'destUsers', 'destNotes',
        'exportUsers', 'exportNotes',
    ];

    public function render()
    {
        return view('livewire.admin.index', [
            'users' => User::all(),
            'notes' => Note::all(),
        ]);
    }

    public function destUsers()
    {
        User::where('is_admin', false)->delete();
        $message = 'Semua akun berhasil dihapus! Kecuali admin';
        return session()->flash('success', $message);
    }

    public function destNotes()
    {
        Note::query()->delete();
        $message = 'Semua catatan berhasil dihapus!';
        return session()->flash('success', $message);
    }

    public function exportUsers()
    {
        $message = 'Semua akun pengguna berhasil diekspor!';
        session()->flash('success', $message);
        return (new UsersExport)->download('DaftarPengguna.xlsx');
    }

    public function exportNotes()
    {
        $message = 'Semua catatan berhasil diekspor!';
        session()->flash('success', $message);
        return (new NotesExport)->download('DaftarCatatan.xlsx');
    }
}

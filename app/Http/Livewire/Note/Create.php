<?php

namespace App\Http\Livewire\Note;

use App\Models\Note;
use Livewire\Component;

class Create extends Component
{
    protected $rules = [
        'tanggal' => ['required', 'date'],
        'waktu' => ['required'],
        'lokasi' => ['required'],
        'suhu' => ['required', 'integer', 'min:0', 'max:100'],
    ];

    public $tanggal;

    public $waktu;

    public $lokasi;

    public $suhu;

    public function render()
    {
        return view('livewire.note.create');
    }

    public function store()
    {
        $this->validate();
        Note::create([
            'tanggal' => $this->tanggal,
            'waktu' => $this->waktu,
            'lokasi' => $this->lokasi,
            'suhu' => $this->suhu,
            'user_id' => auth()->user()->id,
        ]);
        $message = 'Catatan berhasil ditambahkan!';
        return redirect()->to('/notes')->with('success', $message);
    }
}

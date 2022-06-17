<?php

namespace App\Http\Livewire\Note;

use App\Models\Note;
use Livewire\Component;

class Update extends Component
{
    protected $rules = [
        'tanggal' => ['required', 'date'],
        'waktu' => ['required'],
        'lokasi' => ['required'],
        'suhu' => ['required', 'integer', 'min:0', 'max:100'],
    ];

    protected $listeners = ['showEditNote'];

    public $note_id;

    public $tanggal;

    public $waktu;

    public $lokasi;

    public $suhu;

    public function render()
    {
        return view('livewire.note.update');
    }

    public function showEditNote($note)
    {
        $this->note_id = $note['id'];
        $this->tanggal = $note['tanggal'];
        $this->waktu = substr($note['waktu'], 0, 5);
        $this->lokasi = $note['lokasi'];
        $this->suhu = $note['suhu'];
    }

    public function backToAll()
    {
        $this->emit('backToAll');
    }

    public function update()
    {
        $this->validate();
        $note = Note::find($this->note_id);
        $note->update([
            'tanggal' => $this->tanggal,
            'waktu' => $this->waktu,
            'lokasi' => $this->lokasi,
            'suhu' => $this->suhu,
        ]);
        $message = 'Catatan berhasil diupdate!';
        $this->emit('backToAll', $message);
    }
}

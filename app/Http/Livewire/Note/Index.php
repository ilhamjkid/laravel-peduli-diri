<?php

namespace App\Http\Livewire\Note;

use App\Models\Note;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    protected $queryString = [
        'search' => ['except' => '', 'as' => 's'],
        'page' => ['except' => 1, 'as' => 'p'],
    ];

    public $search = '';

    public $pagination = 5;

    public $page = 1;

    public $orderBy;

    public $sort;

    public function render()
    {
        $uid = auth()->user()->id;
        $ids = Note::search($this->search)
            ->where('user_id', $uid)->get()->pluck('id');
        if ($this->orderBy) $notes = Note::whereIn('id', $ids)
            ->orderBy($this->orderBy, $this->sort);
        else $notes = Note::whereIn('id', $ids)->latest();
        return view('livewire.note.index', [
            'notes' => $notes->paginate($this->pagination),
        ]);
    }

    public function changeOrder($by)
    {
        if ($this->orderBy === null) {
            $this->orderBy = $by;
            $this->sort = 'asc';
        } else {
            if ($this->orderBy !== $by) {
                $this->orderBy = $by;
                $this->sort = 'asc';
            } else {
                if ($this->sort === 'asc') {
                    $this->sort = 'desc';
                } else $this->sort = 'asc';
            }
        }
    }

    public function resetOrder()
    {
        $this->orderBy = null;
        $this->sort = null;
    }

    public function destroy($id)
    {
        $note = Note::find($id);
        if ($note) $note->delete();
        $message = 'Catatan berhasil dihapus!';
        $this->emit('backToAll', $message);
    }

    public function edit($id)
    {
        $note = Note::find($id);
        $this->emit('editNote', $note);
    }
}

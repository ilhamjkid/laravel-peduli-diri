<?php

namespace App\Models;

use App\Models\User;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Note extends Model
{
    use HasFactory, Searchable;

    protected $guarded = ['id'];
    
    public function toSearchableArray()
    {
        return [
            'tanggal' => $this->tanggal,
            'waktu' => $this->waktu,
            'lokasi' => $this->lokasi,
            'suhu' => $this->suhu,
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

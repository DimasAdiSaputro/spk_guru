<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Jurusan;

class Guru extends Model
{
    protected $fillable = [
        'nama_guru',
        'nip',
        'jurusan_id',
    ];

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }
}

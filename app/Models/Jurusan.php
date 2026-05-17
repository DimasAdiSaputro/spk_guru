<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Guru;

class Jurusan extends Model
{
    protected $fillable = [
        'nama_jurusan',
    ];

    public function gurus()
    {
        return $this->hasMany(Guru::class);
    }
}

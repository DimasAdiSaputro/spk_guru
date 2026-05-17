<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Guru;
use App\Models\Kriteria;

class Penilaian extends Model
{
    protected $fillable = [
        'user_id',
        'guru_id',
        'kriteria_id',
        'nilai',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class);
    }
}

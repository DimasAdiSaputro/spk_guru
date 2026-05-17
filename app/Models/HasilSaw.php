<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Guru;

class HasilSaw extends Model
{
    protected $table = 'hasil_saws';

    protected $fillable = [
        'guru_id',
        'nilai_akhir',
        'ranking',
    ];

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }
}

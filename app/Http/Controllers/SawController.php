<?php
namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\HasilSaw;
use App\Models\Kriteria;
use App\Models\Penilaian;

class SawController extends Controller
{
    public function hitung()
    {
        $gurus     = Guru::all();
        $kriterias = Kriteria::all();

        HasilSaw::truncate();

        $hasil = [];

        foreach ($gurus as $guru) {

            $total = 0;

            foreach ($kriterias as $kriteria) {

                $penilaian = Penilaian::where('guru_id', $guru->id)
                    ->where('kriteria_id', $kriteria->id)
                    ->avg('nilai') ?? 0;

                $max = Penilaian::where('kriteria_id', $kriteria->id)
                    ->max('nilai') ?? 1;

                $min = Penilaian::where('kriteria_id', $kriteria->id)
                    ->min('nilai') ?? 1;

                if ($kriteria->atribut == 'benefit') {

                    $normalisasi = $max ? ($penilaian / $max) : 0;

                } else {

                    $normalisasi = $penilaian ? ($min / $penilaian) : 0;
                }

                $bobot = $kriteria->bobot / 100;

                $total += $normalisasi * $bobot;
            }

            $hasil[] = [
                'guru_id'     => $guru->id,
                'nilai_akhir' => $total,
            ];
        }

        usort($hasil, fn($a, $b) => $b['nilai_akhir'] <=> $a['nilai_akhir']);

        foreach ($hasil as $index => $item) {

            HasilSaw::create([
                'guru_id'     => $item['guru_id'],
                'nilai_akhir' => $item['nilai_akhir'],
                'ranking'     => $index + 1,
            ]);
        }

        return redirect()->back();
    }
}

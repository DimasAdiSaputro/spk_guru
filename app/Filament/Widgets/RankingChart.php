<?php
namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\HasilSaw;

class RankingChart extends ChartWidget
{
    protected ?string $heading = 'Ranking Chart';

    protected function getData(): array
    {
        $hasil = HasilSaw::with('guru')
            ->orderBy('ranking')
            ->get();

        return [
            'datasets' => [
                [
                    'label' => 'Nilai SAW',
                    'data'  => $hasil->pluck('nilai_akhir'),
                ],
            ],

            'labels'   => $hasil->pluck('guru.nama_guru'),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}

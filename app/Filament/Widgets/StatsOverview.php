<?php
namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use App\Models\Guru;
use App\Models\User;
use App\Models\Penilaian;
use App\Models\HasilSaw;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Guru', Guru::count())
                ->description('Jumlah seluruh guru')
                ->descriptionIcon('heroicon-m-user-group'),

            Stat::make('Total Siswa', User::role('siswa')->count())
                ->description('Jumlah siswa')
                ->descriptionIcon('heroicon-m-academic-cap'),

            Stat::make('Total Penilaian', Penilaian::count())
                ->description('Data penilaian masuk')
                ->descriptionIcon('heroicon-m-clipboard-document-list'),

            Stat::make(
                'Guru Terbaik',
                optional(
                    HasilSaw::with('guru')
                        ->orderBy('ranking')
                        ->first()
                )?->guru?->nama_guru ?? '-'
            )
                ->description('Ranking SAW tertinggi')
                ->descriptionIcon('heroicon-m-trophy'),
        ];
    }
}

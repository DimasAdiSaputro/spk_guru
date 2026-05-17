<?php
namespace App\Filament\Resources\Penilaians\Tables;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PenilaiansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('user.name')
                    ->label('Siswa'),

                TextColumn::make('guru.nama_guru')
                    ->label('Guru'),

                TextColumn::make('kriteria.nama_kriteria')
                    ->label('Kriteria'),

                TextColumn::make('nilai'),

                TextColumn::make('status'),

            ]);
    }
}

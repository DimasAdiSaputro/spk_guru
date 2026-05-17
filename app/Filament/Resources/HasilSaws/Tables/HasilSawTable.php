<?php
namespace App\Filament\Resources\HasilSaws\Tables;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class HasilSawTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('guru.nama_guru')
                    ->label('Guru'),

                TextColumn::make('nilai_akhir')
                    ->numeric(decimalPlaces: 3),

                TextColumn::make('ranking')
                    ->badge(),

            ]);
    }
}

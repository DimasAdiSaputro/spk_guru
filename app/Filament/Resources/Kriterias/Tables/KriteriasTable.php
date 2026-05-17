<?php
namespace App\Filament\Resources\Kriterias\Tables;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class KriteriasTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kode'),
                
                TextColumn::make('nama_kriteria')
                    ->searchable(),

                TextColumn::make('bobot'),

                TextColumn::make('atribut'),
            ]);
    }
}

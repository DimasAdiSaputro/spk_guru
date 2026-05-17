<?php
namespace App\Filament\Resources\Gurus\Tables;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class GurusTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_guru')
                    ->searchable(),

                TextColumn::make('nip'),

                TextColumn::make('jurusan.nama_jurusan')
                    ->label('Jurusan'),
            ]);
    }
}

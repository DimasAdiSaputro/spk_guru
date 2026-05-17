<?php

namespace App\Filament\Resources\Penilaians\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

class PenilaianForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),

                Select::make('guru_id')
                    ->relationship('guru', 'nama_guru')
                    ->required(),

                Select::make('kriteria_id')
                    ->relationship('kriteria', 'nama_kriteria')
                    ->required(),

                TextInput::make('nilai')
                    ->numeric()
                    ->required(),

                Select::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'valid' => 'Valid',
                    ])
                    ->default('pending')
                    ->required(),

            ]);
    }
}

<?php
namespace App\Filament\Resources\Kriterias\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class KriteriaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('kode')
                    ->required(),

                TextInput::make('nama_kriteria')
                    ->required(),

                TextInput::make('bobot')
                    ->numeric()
                    ->required(),

                Select::make('atribut')
                    ->options([
                        'benefit' => 'Benefit',
                        'cost'    => 'Cost',
                    ])
                    ->required(),
            ]);
    }
}

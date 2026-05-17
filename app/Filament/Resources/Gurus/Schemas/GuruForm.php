<?php
namespace App\Filament\Resources\Gurus\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class GuruForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_guru')
                    ->required(),

                TextInput::make('nip'),

                Select::make('jurusan_id')
                    ->relationship('jurusan', 'nama_jurusan')
                    ->required(),
            ]);
    }
}

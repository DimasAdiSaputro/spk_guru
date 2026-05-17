<?php

namespace App\Filament\Resources\Jurusans\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class JurusanInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('nama_jurusan'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}

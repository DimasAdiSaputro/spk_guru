<?php

namespace App\Filament\Resources\Kriterias\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class KriteriaInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('kode'),
                TextEntry::make('nama_kriteria'),
                TextEntry::make('bobot')
                    ->numeric(),
                TextEntry::make('atribut')
                    ->badge(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}

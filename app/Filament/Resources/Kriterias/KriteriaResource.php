<?php

namespace App\Filament\Resources\Kriterias;

use App\Filament\Resources\Kriterias\Pages\CreateKriteria;
use App\Filament\Resources\Kriterias\Pages\EditKriteria;
use App\Filament\Resources\Kriterias\Pages\ListKriterias;
use App\Filament\Resources\Kriterias\Pages\ViewKriteria;
use App\Filament\Resources\Kriterias\Schemas\KriteriaForm;
use App\Filament\Resources\Kriterias\Schemas\KriteriaInfolist;
use App\Filament\Resources\Kriterias\Tables\KriteriasTable;
use App\Models\Kriteria;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KriteriaResource extends Resource
{
    protected static ?string $model = Kriteria::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'nama_kriteria';

    public static function form(Schema $schema): Schema
    {
        return KriteriaForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return KriteriaInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KriteriasTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListKriterias::route('/'),
            'create' => CreateKriteria::route('/create'),
            'view' => ViewKriteria::route('/{record}'),
            'edit' => EditKriteria::route('/{record}/edit'),
        ];
    }
}

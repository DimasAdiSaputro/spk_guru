<?php

namespace App\Filament\Resources\HasilSaws;

use App\Filament\Resources\HasilSaws\Pages\CreateHasilSaw;
use App\Filament\Resources\HasilSaws\Pages\EditHasilSaw;
use App\Filament\Resources\HasilSaws\Pages\ListHasilSaws;
use App\Filament\Resources\HasilSaws\Schemas\HasilSawForm;
use App\Filament\Resources\HasilSaws\Tables\HasilSawTable;
use App\Models\HasilSaw;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HasilSawResource extends Resource
{
    protected static ?string $model = HasilSaw::class;

    protected static ?string $navigationLabel = 'Hasil SAW';
    protected static ?string $pluralModelLabel = 'Hasil SAW';
    protected static ?string $modelLabel = 'Hasil SAW';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return HasilSawForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HasilSawTable::configure($table);
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
            'index' => ListHasilSaws::route('/'),
            'create' => CreateHasilSaw::route('/create'),
            'edit' => EditHasilSaw::route('/{record}/edit'),
        ];
    }
}

<?php
namespace App\Filament\Resources\Kelas;

use App\Filament\Resources\Kelas\Pages\CreateKelas;
use App\Filament\Resources\Kelas\Pages\EditKelas;
use App\Filament\Resources\Kelas\Pages\ListKelas;
use App\Filament\Resources\Kelas\Pages\ViewKelas;
use App\Filament\Resources\Kelas\Schemas\KelasInfolist;
use App\Models\Kelas;
use BackedEnum;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class KelasResource extends Resource
{
    protected static ?string $model = Kelas::class;

    protected static ?string $navigationLabel = 'Kelas';
    protected static ?string $pluralModelLabel = 'Kelas';
    protected static ?string $modelLabel = 'Kelas';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'nama_kelas';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_kelas')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function infolist(Schema $schema): Schema
    {
        return KelasInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_kelas')
                    ->searchable(),
            ]);
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
            'index' => ListKelas::route('/'),
            'create' => CreateKelas::route('/create'),
            'view' => ViewKelas::route('/{record}'),
            'edit' => EditKelas::route('/{record}/edit'),
        ];
    }
}

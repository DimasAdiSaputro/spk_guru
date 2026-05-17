<?php
namespace App\Filament\Resources\HasilSaws\Pages;

use App\Filament\Resources\HasilSaws\HasilSawResource;
use Filament\Resources\Pages\ListRecords;

class ListHasilSaws extends ListRecords
{
    protected static string $resource = HasilSawResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}

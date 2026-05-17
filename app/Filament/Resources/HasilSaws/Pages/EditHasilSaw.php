<?php

namespace App\Filament\Resources\HasilSaws\Pages;

use App\Filament\Resources\HasilSaws\HasilSawResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditHasilSaw extends EditRecord
{
    protected static string $resource = HasilSawResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

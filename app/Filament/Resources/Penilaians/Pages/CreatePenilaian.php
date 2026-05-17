<?php

namespace App\Filament\Resources\Penilaians\Pages;

use App\Filament\Resources\Penilaians\PenilaianResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePenilaian extends CreateRecord
{
    protected static string $resource = PenilaianResource::class;

    protected function afterCreate(): void
    {
        app(\App\Http\Controllers\SawController::class)->hitung();
    }
}
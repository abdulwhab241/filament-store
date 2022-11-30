<?php

namespace App\Filament\Resources\MedicalResource\Pages;

use App\Filament\Resources\MedicalResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMedicals extends ListRecords
{
    protected static string $resource = MedicalResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

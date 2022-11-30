<?php

namespace App\Filament\Resources\MedicalResource\Pages;

use App\Filament\Resources\MedicalResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMedical extends EditRecord
{
    protected static string $resource = MedicalResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

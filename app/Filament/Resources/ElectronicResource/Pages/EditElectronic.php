<?php

namespace App\Filament\Resources\ElectronicResource\Pages;

use App\Filament\Resources\ElectronicResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditElectronic extends EditRecord
{
    protected static string $resource = ElectronicResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

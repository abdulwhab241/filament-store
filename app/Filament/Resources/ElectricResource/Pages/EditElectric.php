<?php

namespace App\Filament\Resources\ElectricResource\Pages;

use App\Filament\Resources\ElectricResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditElectric extends EditRecord
{
    protected static string $resource = ElectricResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

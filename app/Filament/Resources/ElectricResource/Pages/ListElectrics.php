<?php

namespace App\Filament\Resources\ElectricResource\Pages;

use App\Filament\Resources\ElectricResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListElectrics extends ListRecords
{
    protected static string $resource = ElectricResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

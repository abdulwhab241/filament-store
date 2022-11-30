<?php

namespace App\Filament\Resources\ElectronicResource\Pages;

use App\Filament\Resources\ElectronicResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListElectronics extends ListRecords
{
    protected static string $resource = ElectronicResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

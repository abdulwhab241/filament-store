<?php

namespace App\Filament\Resources\ModernResource\Pages;

use App\Filament\Resources\ModernResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListModerns extends ListRecords
{
    protected static string $resource = ModernResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

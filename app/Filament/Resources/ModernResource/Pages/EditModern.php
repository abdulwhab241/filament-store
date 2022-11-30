<?php

namespace App\Filament\Resources\ModernResource\Pages;

use App\Filament\Resources\ModernResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditModern extends EditRecord
{
    protected static string $resource = ModernResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

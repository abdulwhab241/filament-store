<?php

namespace App\Filament\Resources\WalletTransactionsResource\Pages;

use App\Filament\Resources\WalletTransactionsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWalletTransactions extends ListRecords
{
    protected static string $resource = WalletTransactionsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

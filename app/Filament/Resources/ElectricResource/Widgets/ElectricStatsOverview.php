<?php

namespace App\Filament\Resources\ElectricResource\Widgets;

use App\Models\Electric;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class ElectricStatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('⚡ عدد المنتجات ', Electric::all()->count()),
        ];
    }
}

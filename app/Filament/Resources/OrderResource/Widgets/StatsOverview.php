<?php

namespace App\Filament\Resources\OrderResource\Widgets;

use App\Models\order;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Orders', order::count()),
            Stat::make('Pending Payment', Order::where('status', 'pending payment')->count()),
            Stat::make('In Progress', Order::where('status', 'In Progress')->count()),
            Stat::make('Active', Order::where('status', 'Active')->count()),
        ];
    }
}

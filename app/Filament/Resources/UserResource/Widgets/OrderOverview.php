<?php

namespace App\Filament\Resources\UserResource\Widgets;

use App\Models\order;
use Carbon\Carbon;
use App\Models\User;
use Filament\Support\RawJs;
use Filament\Widgets\ChartWidget;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Filament\Forms\Components\DatePicker;

class orderOverview extends ChartWidget
{
    protected static ?string $pollingInterval = null;
    protected static bool $isLazy = false;
    protected static ?string $maxHeight = '300px';
    protected static ?string $heading = 'Orders';
    protected int | string | array $columnSpan = 'full';
    public ?string $filter = 'today';
    protected function getFilters(): ?array
        {
            return [
                'today' => 'Today',
                'week' => 'Last week',
                'month' => 'Last month',
                'year' => 'This year',
            ];
        }
    // protected static ?array $options = [
    //     'plugins' => [
    //         'legend' => [
    //             'display' => false,
    //         ],
    //     ],
    // ];

    
// protected function getOptions(): RawJs
// {
//     return RawJs::make(<<<JS
//         {
//             scales: {
//                 y: {
//                     ticks: {
//                         callback: (value) => 'Rp.' + value,
//                     },
//                 },
//             },
//         }
//     JS);
// }


 
    protected function getData(): array
    {
        $activeFilter = $this->filter;
        $data = Trend::model(order::class)
        ->between(
            start: now()->startOfMonth(),
            end: now()->endOfMonth(),
        )
        ->perWeek()
        ->count();
        
        return [
            'datasets' => [
                [
                    'label' => 'Orders',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                    'fill' => true,
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => $value->date),
        ];
    }
 
    protected function getType(): string
    {
        return 'line';
    }
}

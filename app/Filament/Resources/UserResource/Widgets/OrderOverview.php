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
use Filament\Widgets\Concerns\InteractsWithPageFilters;

class orderOverview extends ChartWidget
{
    use InteractsWithPageFilters;

    protected static ?string $pollingInterval = null;
    protected static bool $isLazy = false;
    protected static ?string $maxHeight = '300px';
    protected static ?string $heading = 'Orders';
    protected int | string | array $columnSpan = 'full';
   
    // protected function getFilters(): ?array
    //     {
    //         return [
    //             'today' => 'Today',
    //             'week' => 'Last week',
    //             'month' => 'Last month',
    //             'year' => 'This year',
    //         ];
    //     }
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
        $start= $this->filters['StartDate'];
        $end= $this->filters['EndDate'];
        $data = Trend::model(order::class)
        ->between(
            start: $start ? Carbon::parse($start): now()->subDays(6),
            end: $end ? Carbon::parse($end): now(),
        )
        ->perDay()
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

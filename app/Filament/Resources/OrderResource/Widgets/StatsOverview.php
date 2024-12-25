<?php

namespace App\Filament\Resources\OrderResource\Widgets;

use App\Models\Order;
use Carbon\Carbon;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    use InteractsWithPageFilters;
    protected static ?string $pollingInterval = null;
    protected static bool $isLazy = false;

    protected function getStats(): array
    {
        // $start= $this->filters['StartDate'];
        // $end= $this->filters['EndDate'];
        $start = $this->filters['StartDate'] ? Carbon::parse($this->filters['StartDate']): now()->subDays(6);
        $end = $this->filters['EndDate'] ? Carbon::parse($this->filters['EndDate']) : now();

        // dd($start);

       
        $statuses = [
            'Paying' => 'Paying',
            'Developing' => 'Developing',
            'Online' => 'Online',
            'Renewing' => 'Renewing',
            // 'Offline' => 'Offline',
        ];

        return array_map(fn($description, $status) => 
            $this->createStat($status, $description, $start, $end), 
            $statuses, array_keys($statuses)
        );


    }

        protected function createStat(string $status, string $description, Carbon $start, Carbon $end): Stat
    {
        // Ambil jumlah order berdasarkan status dan rentang tanggal
        $orderCount = Order::where('status', $status)
        ->whereBetween('updated_at', [$start->startOfDay(), $end->endOfDay()])
        ->count();

        // Jika tidak ada order, pastikan count tetap 0 (menggunakan `?:`)
        $orderCount = $orderCount ?: 0;


        // Ambil data untuk chart
        $data = $this->getOrderData($status, $start, $end);
        $color = $this->determineColor($data);

        return Stat::make('', $orderCount . ' Orders')
            ->description($description)
            ->chart($data)
            ->color($color);
    }


    protected function getOrderData(string $status, Carbon $start, Carbon $end): array
    {
        $daysRange = $start->diffInDays($end) + 1;

        return collect(range(0, $daysRange - 1))->mapWithKeys(function ($day) use ($start) {
            // $date = $start->copy()->addDays($day)->format('Y-m-d');
            $date = Carbon::now()->subDays(6 - $day)->format('Y-m-d');
            return [$date => 0];
        })->merge(
            Order::where('status', $status)
                // ->whereBetween('created_at', [$start->startOfDay(), $end->endOfDay()])
                ->whereDate('created_at', '>=', Carbon::now()->subDays(7))
                ->selectRaw('DATE(created_at) as date, count(*) as total')
                ->groupBy('date')
                ->orderBy('date')
                ->pluck('total', 'date')
        )->values()->toArray();
    }


    protected function determineColor(array $data): string
    {
        $color = 'success'; // Default color
        $previousValue = null;

        foreach ($data as $value) {
            if ($previousValue !== null) {
                // Set warna berdasarkan perubahan nilai
                $color = $value < $previousValue ? 'danger' : 'success';
            }
            $previousValue = $value; // Update nilai sebelumnya
        }

        return $color; // Kembalikan warna
    }
}

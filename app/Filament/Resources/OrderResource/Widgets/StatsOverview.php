<?php

namespace App\Filament\Resources\OrderResource\Widgets;

use App\Models\Order;
use Carbon\Carbon;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected static ?string $pollingInterval = null;
    protected static bool $isLazy = false;

    protected function getStats(): array
    {
        $statuses = [
            'pending payment' => 'Pending Payment',
            'In Progress' => 'In Progress',
            'Active' => 'Active',
            'Pending Renewal' => 'Pending Renewal',
        ];

        return array_map(fn($description, $status) => $this->createStat($status, $description), $statuses, array_keys($statuses));
    }

    protected function createStat(string $status, string $description): Stat
    {
        $data = $this->getOrderData($status);
        $color = $this->determineColor($data);

        return Stat::make('', Order::where('status', $status)->count() . ' Orders')
            // ->descriptionIcon('heroicon-m-' . strtolower(str_replace(' ', '-', $description)))
            ->description($description)
            ->chart($data)
            ->color($color);
    }

    protected function getOrderData(string $status): array
    {
        // Mengumpulkan data dari 7 hari terakhir
        return collect(range(0, 6))->mapWithKeys(function ($day) {
            $date = Carbon::now()->subDays(6 - $day)->format('Y-m-d');
            return [$date => 0]; // Default value 0
        })->merge(
            Order::where('status', $status)
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

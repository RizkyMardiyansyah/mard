<?php

namespace App\Filament\Resources\OrderResource\Pages;

use App\Filament\Resources\OrderResource;
use App\Models\order;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;  

class ListOrders extends ListRecords
{
    protected static string $resource = OrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    

    public function getTabs(): array
        {
            return [
                'All' => Tab::make()
                    ->badge(order::query()->count())
                    ->badgeColor('primary'),
                'Paying' => Tab::make()
                    ->modifyQueryUsing(fn (Builder $query) => $query->where('status', 'Paying'))
                    ->badge(order::query()->where('status', 'Paying')->count())
                    ->badgeColor('primary'),
                'Developing' => Tab::make()
                    ->modifyQueryUsing(fn (Builder $query) => $query->where('status', 'Developing'))
                    ->badge(order::query()->where('status', 'Developing')->count())
                    ->badgeColor('primary'),
                'Online' => Tab::make()
                    ->modifyQueryUsing(fn (Builder $query) => $query->where('status', 'Online'))
                    ->badge(order::query()->where('status', 'Online')->count())
                    ->badgeColor('primary'),
                'Renewing' => Tab::make()
                    ->modifyQueryUsing(fn (Builder $query) => $query->where('status', 'Renewing'))
                    ->badge(order::query()->where('status', 'Renewing')->count())
                    ->badgeColor('primary'),
                'Offline' => Tab::make()
                    ->modifyQueryUsing(fn (Builder $query) => $query->where('status', 'Offline'))
                    ->badge(order::query()->where('status', 'Offline')->count())
                    ->badgeColor('primary'),
            ];
        }
        
}

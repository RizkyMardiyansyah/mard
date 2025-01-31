<?php

namespace App\Filament\Resources\MessageResource\Pages;

use App\Filament\Resources\MessageResource;
use App\Models\message;
use Filament\Actions;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;

class ListMessages extends ListRecords
{
    protected static string $resource = MessageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            'Unread' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('status', 'unread'))
                ->badge(message::query()->where('status', 'unread')->count())
                ->badgeColor('primary'),
            'Read' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('status', 'read'))
                ->badge(message::query()->where('status', 'read')->count())
                ->badgeColor('primary'),
            'Responded' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('status', 'responded'))
                ->badge(message::query()->where('status', 'responded')->count())
                ->badgeColor('primary'),
        ]; 
    }
}

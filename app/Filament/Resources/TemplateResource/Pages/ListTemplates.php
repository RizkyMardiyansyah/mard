<?php

namespace App\Filament\Resources\TemplateResource\Pages;

use App\Filament\Resources\TemplateResource;
use App\Models\template;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListTemplates extends ListRecords
{
    protected static string $resource = TemplateResource::class;

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
                    ->badge(template::query()->count())
                    ->badgeColor('primary'),
                'Basic' => Tab::make()
                    ->modifyQueryUsing(fn (Builder $query) => $query->where('type', 'Basic'))
                    ->badge(template::query()->where('type', 'Basic')->count())
                    ->badgeColor('primary'),
                'Premium' => Tab::make()
                    ->modifyQueryUsing(fn (Builder $query) => $query->where('type', 'Premium'))
                    ->badge(template::query()->where('type', 'Premium')->count())
                    ->badgeColor('primary'),
            
            ];
        }
}

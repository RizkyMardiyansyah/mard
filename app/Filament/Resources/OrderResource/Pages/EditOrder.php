<?php

namespace App\Filament\Resources\OrderResource\Pages;

use App\Filament\Resources\OrderResource;
use App\Models\order;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditOrder extends EditRecord
{
    protected static string $resource = OrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
            ->after(
                function (order $record) {
                    if ($record->ktp) {
                        Storage::disk('public')->delete($record->ktp);
                    }
                    if ($record->npwp) {
                        Storage::disk('public')->delete($record->npwp);
                    }
                    if ($record->siup) {
                        Storage::disk('public')->delete($record->siup);
                    }
                }
            ),
        ];
    }
}

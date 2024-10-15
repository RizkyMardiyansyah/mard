<?php

namespace App\Filament\Resources\TemplateResource\Pages;

use App\Filament\Resources\TemplateResource;
use App\Models\partner;
use App\Models\template;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditTemplate extends EditRecord
{
    protected static string $resource = TemplateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
            ->after(
                function (template $record) {
                    // Hapus thumbnail jika ada
                    if ($record->image) {
                        Storage::disk('public')->delete($record->image);
                    }
                }
            ),
        ];
    }
}

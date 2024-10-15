<?php

namespace App\Filament\Resources\SectionResource\Pages;

use App\Filament\Resources\SectionResource;
use App\Models\section;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
// use Illuminate\Container\Attributes\Storage;
use Illuminate\Support\Facades\Storage;


class EditSection extends EditRecord
{
    protected static string $resource = SectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
            ->after(
                function (Section $record) {
                    // Hapus thumbnail jika ada
                    if ($record->thumbnail) {
                        Storage::disk('public')->delete($record->thumbnail);
                    }
                }
            ),
            
        ];
    }
}

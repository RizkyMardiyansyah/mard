<?php

namespace App\Filament\Resources\MessageResource\Pages;

use App\Filament\Resources\MessageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMessage extends EditRecord
{
    protected static string $resource = MessageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\Action::make('send_email')
                ->label('Email')
                ->url(fn ($record) => 'mailto:' . $record->email)
                ->openUrlInNewTab(),
            Actions\Action::make('send_whatsapp')
                ->label('WhatsApp')
                ->url(fn ($record) => 'https://wa.me/' . preg_replace('/^0/', '62', $record->phone))
                ->openUrlInNewTab(),
        ];
        
    }
}

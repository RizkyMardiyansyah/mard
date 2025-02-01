<?php

namespace App\Filament\Resources\MessageResource\Pages;

use App\Filament\Resources\MessageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMessage extends EditRecord
{
    protected static string $resource = MessageResource::class;

    protected function beforeFill(): void
    {
        $this->record->update(['status' => 'read']);
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\Action::make('send_email')
                ->label('Email')
                ->url(fn ($record) => 'https://mail.google.com/mail/?view=cm&to=' . $record->email)
                ->openUrlInNewTab()

                ->openUrlInNewTab(),
            Actions\Action::make('send_whatsapp')
                ->label('WhatsApp')
                ->url(fn ($record) => 'https://wa.me/' . preg_replace('/^0/', '62', $record->phone))
                ->openUrlInNewTab(),
        ];
        
    }
}

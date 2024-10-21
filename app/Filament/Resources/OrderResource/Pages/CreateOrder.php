<?php

namespace App\Filament\Resources\OrderResource\Pages;

use App\Filament\Resources\OrderResource;
use App\Models\User;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateOrder extends CreateRecord
{
    protected static string $resource = OrderResource::class;
    // protected function afterCreate():void
    // {
    //     $recepient=User::all();
    //     Notification::make()
    //     ->title('New Order')
    //     ->body('New Order Created, waiting to proccess')
    //     ->success()
    //     ->sendToDatabase($recepient); 
         
    // }
}

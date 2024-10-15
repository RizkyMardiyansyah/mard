<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Support\ServiceProvider;

class FilamentServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Filament::serving(function () {
            Filament::registerNavigationItems([
                // Tambahkan navigation menu baru
                \Filament\Navigation\NavigationItem::make('Themes')  // Nama di sidebar
                    ->url('/admin/themes')  // Alamat route
                    ->icon('heroicon-o-color-swatch') // (Opsional) Icon
                    ->group('Settings') // (Opsional) Grouping sidebar
                    ->sort(2), // (Opsional) Urutan tampilan
            ]);
        });
    }
}

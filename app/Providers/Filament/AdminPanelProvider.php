<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\MenuItem;
use Filament\Navigation\NavigationItem;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Joaopaulolndev\FilamentEditProfile\FilamentEditProfilePlugin;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->colors([
                'primary' => Color::Amber,
            ])
            ->font('poppins')
            ->brandLogo(asset('img/MardBlue.svg'))
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            // ->pages([
            //     Pages\Dashboard::class,
            // ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                Widgets\FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
                \Hasnayeen\Themes\Http\Middleware\SetTheme::class,
            ])
            ->databaseNotifications()
            ->authMiddleware([
                Authenticate::class,
            ])
            ->plugins([
                FilamentEditProfilePlugin::make()
                ->slug('my-profile')
                ->setTitle('My Profile')
                ->setSort(3)
                ->setNavigationLabel('My Profile')
                ->setIcon('heroicon-s-user-circle')                
                ->shouldShowDeleteAccountForm(false)
                ->shouldShowBrowserSessionsForm()
                ->shouldShowAvatarForm(),
                \Hasnayeen\Themes\ThemesPlugin::make(), // Memasukkan plugin tema dengan benar
            ])

            ->userMenuItems([
                MenuItem::make()
                    ->label('My Profile')
                    ->url('/admin/my-profile')
                    ->icon('heroicon-o-user-circle'),
                // ...
            ])

            ->navigationItems([
                NavigationItem::make('Themes')
                    ->url('/admin/themes')
                    ->icon('heroicon-s-swatch')
                    ->isActiveWhen(fn () => request()->is('admin/themes'))
                    // ->group('Reports')
                    ->sort(4),
                
            ]);
             
            
            
            
    }
    
}

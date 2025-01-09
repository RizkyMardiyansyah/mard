<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Models\order;
use App\Models\subscription;
use App\Models\template;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Section;
use Filament\Resources\Components\Tab;
use Filament\Tables\Actions\ExportBulkAction;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction as TablesExportBulkAction;
use pxlrbt\FilamentExcel\Exports\ExcelExport;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Enums\FiltersLayout;
use Malzariey\FilamentDaterangepickerFilter\Filters\DateRangeFilter;

class OrderResource extends Resource
{
    protected static ?string $model = order::class;

    protected static ?string $navigationIcon = 'heroicon-m-shopping-bag';
    
    protected static ?string $navigationGroup = 'Operations';
    protected static ?int $navigationSort = 1;
    // public static function getNavigationBadge(): ?string
    // {
    //     return static::getModel()::where('status', 'Developing')->count();
    // }

    public static function getNavigationBadge(): ?string
    {
        $count = static::getModel()::where('status', 'Developing')->count();

        return $count > 0 ? (string) $count : null;
    }

    


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Section::make('Order')->schema([
                    Section::make('Website Information')->schema([
                        Forms\Components\TextInput::make('domain')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Select::make('template')
                            ->required()
                            ->options(template::pluck('title', 'id')->toArray())
                            ->reactive(),
                        Forms\Components\Select::make('status')
                            ->options(
                                [
                                    'Paying' => 'Paying',
                                    'Developing' => 'Developing',
                                    'Online' => 'Online',
                                    'Renewing' => 'Renewing',
                                    'Offline' => 'Offline',
                                ]
                            )
                            ->default('Paying')
                            ->required(),
                    ]),
                    Section::make('Personal Information')->schema([
                        Forms\Components\TextInput::make('nik')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('email')
                            ->email()
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('phone_number')
                            ->tel()
                            ->required()
                            ->maxLength(255),
                    ]),
                    Section::make('Supporting Document')->schema([
                        Forms\Components\FileUpload::make('ktp')
                            ->disk('public')
                            ->image()
                            ->default(null),
                        Forms\Components\FileUpload::make('siup')
                            ->disk('public')
                            ->image()
                            ->default(null),
                        Forms\Components\FileUpload::make('npwp')
                            ->disk('public')
                            ->image()
                            ->default(null),
                    ]),
                    Section::make('Paymet Information')->schema([                        
                        Forms\Components\Select::make('subscription')
                            ->options(subscription::pluck('title', 'id')->toArray())
                            ->reactive(),
                        Forms\Components\TextInput::make('initial_domain_cost')
                            ->label('Domain Cost')
                            ->numeric()
                            ->default(null),
                        Forms\Components\TextInput::make('renewal_cost')
                            ->label('Template Cost')
                            ->numeric()
                            ->default(null),
                        // Forms\Components\TextInput::make('hosting_cost')
                        //     ->numeric()
                        //     ->default(null),
                        Forms\Components\TextInput::make('total_payment')
                            ->numeric()
                            ->default(null),
                        Forms\Components\TextInput::make('va')
                            ->label('Payment Link')
                            ->maxLength(255)
                            ->default(null),
                    ]),
                // ]),
            ]);
    }
    
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('domain')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                ->sortable()->sortable()
                    ->searchable(),
                Tables\Columns\BadgeColumn::make('status')
                    ->sortable()
                    ->colors([
                        'warning',
                        'primary' => 'Developing',
                        'success' => 'Online',
                        'danger' => 'Offline',
                        
                    ])
                    ->icons([
                        'heroicon-m-x',
                        'heroicon-m-currency-dollar' => 'Paying',
                        'heroicon-m-code-bracket' => 'Developing',
                        'heroicon-m-globe-alt' => 'Online',
                        'heroicon-m-receipt-percent' => 'Renewing',
                        'heroicon-m-x-circle' => 'Offline',
                    ]),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: false),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                DateRangeFilter::make('created_at'),
                DateRangeFilter::make('updated_at'),
            ])
            // ],layout: FiltersLayout::AboveContentCollapsible)
            
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            
            ->bulkActions([
                TablesExportBulkAction::make()->exports([
                    
                    ExcelExport::make('form')
                    ->fromForm()
                    ->withFilename(date('Y-m-d') . ' - Orders'),
                ]),
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                    ->after(
                        function (Collection $record) {
                            foreach($record as $key => $value){
                            if ($value->ktp) {
                                Storage::disk('public')->delete($value->ktp);
                            }
                            if ($value->npwp) {
                                Storage::disk('public')->delete($value->npwp);
                            }
                            if ($value->siup) {
                                Storage::disk('public')->delete($value->siup);
                            }
                        }
                        }
                    ),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }
}

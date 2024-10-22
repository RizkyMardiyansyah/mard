<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Models\Order;
use App\Models\subscription;
use App\Models\template;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-s-shopping-bag';
    
    protected static ?string $navigationGroup = 'Operations';
    public static function getNavigationBadge(): ?string
        {
            return static::getModel()::where('status', 'In Progress')->count();
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
                                    'Pending Payment'=>'Pending Payment',
                                    'In Progress'=>'In Progress',
                                    'Active'=>'Active',
                                    'Pending Renewal'=>'Pending Renewal',
                                ]
                            )
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
                    Section::make('Additional Documents')->schema([
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
                            ->numeric()
                            ->default(null),
                        Forms\Components\TextInput::make('renewal_cost')
                            ->numeric()
                            ->default(null),
                        Forms\Components\TextInput::make('hosting_cost')
                            ->numeric()
                            ->default(null),
                        Forms\Components\TextInput::make('total_payment')
                            ->numeric()
                            ->default(null),
                        Forms\Components\TextInput::make('va')
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
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
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

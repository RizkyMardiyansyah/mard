<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TemplateResource\Pages;
use App\Filament\Resources\TemplateResource\RelationManagers;
use App\Models\template;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;



class TemplateResource extends Resource
{
    protected static ?string $model = template::class;

    protected static ?string $navigationIcon = 'heroicon-m-command-line';
    
    protected static ?string $navigationGroup = 'Operations';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form

    
    {
        return $form
        ->schema([
            Section::make('Template Form')->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('link')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Radio::make('type')
                    ->required()
                    ->options([
                        'Basic' => 'Basic',
                        'Premium' => 'Premium',
                    ])
                    ->default('Basic')
                    ->inline(), 
                Forms\Components\FileUpload::make('image')
                    ->required()
                    ->disk('public')
                    ->image(),
                
                Forms\Components\TextInput::make('like')
                    ->nullable()
                    ->numeric(),
                Forms\Components\TextInput::make('buy')
                    ->nullable()
                    ->numeric(),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('link')
                    ->sortable()
                    ->searchable(),    
                Tables\Columns\BadgeColumn::make('type')
                    ->sortable()
                    ->colors([
                        'primary',
                        // 'success' => 'Basic',
                        'warning' => 'Premium',                     
                    ])
                    ->icons([
                        'heroicon-m-x',
                        'heroicon-m-document-duplicate' => 'Basic',
                        'heroicon-m-star' => 'Premium',
                    ]),  
                Tables\Columns\TextColumn::make('buy')
                    ->numeric()
                    ->sortable()
                    ->alignRight()
                    ->getStateUsing(fn (Template $record) => $record->total_pembelian),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->after(function (Collection $record) {
                            foreach ($record as $key => $value) {
                                if ($value->image) {
                                    Storage::disk('public')->delete($value->image);
                                }                           
                            }
                        }),
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
            'index' => Pages\ListTemplates::route('/'),
            'create' => Pages\CreateTemplate::route('/create'),
            'edit' => Pages\EditTemplate::route('/{record}/edit'),
        ];
    }
}

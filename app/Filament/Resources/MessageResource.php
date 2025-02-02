<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MessageResource\Pages;
use App\Filament\Resources\MessageResource\RelationManagers;
use App\Models\message;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use PhpParser\Node\Stmt\Label;

class MessageResource extends Resource
{
    protected static ?string $model = message::class;
    protected static ?string $navigationIcon = 'heroicon-m-chat-bubble-bottom-center-text';
    protected static ?string $navigationGroup = 'Operations';
    protected static ?int $navigationSort = 4;

    public static function getNavigationBadge(): ?string
    {
        $count = static::getModel()::where('status', 'unread')->count();

        return $count > 0 ? (string) $count : null;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Section::make('Message')->schema([
                // Section::make('')->schema([
                // Forms\Components\DateTimePicker::make('created_at')
                //     ->disabled()
                //     ->date()
                //     ->label(''),
                // ])
                // ->columns(2)
                // ->compact(),
                
                Forms\Components\TextInput::make('name')
                    ->disabled()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->disabled()
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone')
                    ->disabled()
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('company')
                    ->disabled()
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Textarea::make('message')
                    ->disabled()
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Radio::make('status')
                    ->required()
                    ->columnSpanFull()
                    ->options([
                        'unread' => 'unread',
                        'read' => 'Read',
                        'responded' => 'Responded',
                    ])
                    ->default('unread')
                    ->inline(),
                ])
                ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    { 
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->formatStateUsing(fn ($state) => ucwords($state))
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->formatStateUsing(fn ($state) => ucwords($state))
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->formatStateUsing(fn ($state) => ucwords($state))
                    ->sortable()    
                    ->searchable(),
                Tables\Columns\TextColumn::make('company')
                    ->formatStateUsing(fn ($state) => ucwords($state))
                    ->sortable()
                    ->searchable(),
                Tables\Columns\BadgeColumn::make('status')
                    ->sortable()
                    ->formatStateUsing(fn ($state) => ucwords($state))
                    ->colors([
                        'warning',
                        'primary' => 'read',
                        'success' => 'responded', 
                    ])
                    ->icons([
                        'heroicon-m-check-circle'
                    ]),
                Tables\Columns\TextColumn::make('created_at')
                    ->Label('Date')
                    ->dateTime()
                    ->sortable(),
                    // ->toggleable(isToggledHiddenByDefault: true),
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
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListMessages::route('/'),
            'create' => Pages\CreateMessage::route('/create'),
            'edit' => Pages\EditMessage::route('/{record}/edit'),
        ];
    }
}

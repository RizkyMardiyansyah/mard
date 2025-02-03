<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TemplateResource\Pages;
use App\Filament\Resources\TemplateResource\RelationManagers;
use App\Models\template;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\RawJs;
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
                    ->columnSpanFull()
                    ->maxLength(255),
                Forms\Components\TextInput::make('link')
                    ->required()
                    ->columnSpanFull()
                    ->maxLength(255),
                
                Forms\Components\FileUpload::make('image')
                    ->required()
                    ->disk('public')
                    ->downloadable()
                    ->columnSpanFull(),             

                Forms\Components\select::make('type')
                    ->required()
                    ->options([
                        'Basic' => 'Basic',
                        'Premium' => 'Premium',
                    ])
                    ->default('Basic'),
                Forms\Components\select::make('category')
                    ->required()
                    ->options([
                        'Website' => 'Website',
                        'System' => 'System',
                    ])
                    ->default('Website'),
                Forms\Components\select::make('tag')
                    ->multiple()
                    ->options([
                        'Landing Page' => 'Landing Page',
                        'Company Profile' => 'Company Profile',
                        'Website' => 'Website',
                        'System' => 'System',
                        'E-commerce' => 'E-commerce',
                        'Blog' => 'Blog',
                        'Portfolio' => 'Portfolio',
                        'Business Solutions' => 'Business Solutions',
                        'Custom Development' => 'Custom Development',
                        'Mobile App' => 'Mobile App',
                        'Desktop App' => 'Desktop App',
                        'Digital Marketing' => 'Digital Marketing',
                        'SEO' => 'SEO',
                        'Social Media' => 'Social Media',
                        'Cloud Solutions' => 'Cloud Solutions',
                        'Data Analytics' => 'Data Analytics',
                        'AI Solutions' => 'AI Solutions',
                        'IoT Solutions' => 'IoT Solutions',
                        'Blockchain' => 'Blockchain',
                        'Security Solutions' => 'Security Solutions',
                        'Automation' => 'Automation',
                        'Integration' => 'Integration',
                        'Consulting' => 'Consulting',
                        'Support' => 'Support',
                        'Training' => 'Training',
                        'API Development' => 'API Development',
                        'Project Management' => 'Project Management',
                        'Task Management' => 'Task Management',
                        'Team Collaboration' => 'Team Collaboration',
                        'Time Tracking' => 'Time Tracking',
                        'Document Management' => 'Document Management',
                        'Client Portal' => 'Client Portal',
                        'Employee Portal' => 'Employee Portal',
                        'Customer Support' => 'Customer Support',
                        'Inventory Management' => 'Inventory Management',
                        'Human Resources' => 'Human Resources',
                        'Payroll Management' => 'Payroll Management',
                        'CRM' => 'CRM',
                        'Supply Chain Management' => 'Supply Chain Management',
                        'CMS' => 'CMS',
                        'LMS' => 'LMS',
                        'Business Intelligence' => 'Business Intelligence',
                        'ERP' => 'ERP',
                        'Customer Feedback' => 'Customer Feedback',
                        'Employee Scheduling' => 'Employee Scheduling',
                        'Productivity Tools' => 'Productivity Tools',
                        'Collaboration Tools' => 'Collaboration Tools',
                        'Project Dashboard' => 'Project Dashboard',
                        'Task Automation' => 'Task Automation',
                        'Online Booking' => 'Online Booking',
                        'Event Management' => 'Event Management',
                        'Client Management' => 'Client Management',
                        'Financial Management' => 'Financial Management',
                        'Procurement Management' => 'Procurement Management',
                        'Marketing Automation' => 'Marketing Automation',
                        'Inventory Control' => 'Inventory Control',
                        'Reatail Management' => 'Retail Management',
                        'Online Payments' => 'Online Payments',
                        'Subscription Management' => 'Subscription Management',
                        'Business Workflow Automation' => 'Business Workflow Automation',
                        'Order Management' => 'Order Management',
                        'Enterprise Solutions' => 'Enterprise Solutions',
                        'Cloud-based Management' => 'Cloud-based Management',
                        'Multi-user Access' => 'Multi-user Access',
                        'Customer Service Tools' => 'Customer Service Tools',
                        'Sales Management' => 'Sales Management',
                        'B2B Solutions' => 'B2B Solutions',
                        'B2C Solutions' => 'B2C Solutions',
                        'Lead Generation' => 'Lead Generation',
                        'Real-time Reporting' => 'Real-time Reporting',
                        'Task Assignment' => 'Task Assignment',
                        'Resource Allocation' => 'Resource Allocation',
                        'Document Sharing' => 'Document Sharing',
                        'Employee Performance' => 'Employee Performance',
                        'Business Automation' => 'Business Automation',
                        'Enterprise Integration' => 'Enterprise Integration',
                        'Customizable Dashboards' => 'Customizable Dashboards',
                        'Project Tracking' => 'Project Tracking',
                        'Employee Management' => 'Employee Management',
                    ])
                    ->searchable()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('purchases')
                    ->nullable()
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('price')
                    ->mask(RawJs::make('$money($input)'))
                    ->required()
                    ->prefix('IDR')
                    ->default(0),
            ])->columns(2),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title')
                    ->formatStateUsing(fn ($state) => ucwords($state))
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('link')
                    ->sortable()
                    ->searchable(),     
                Tables\Columns\BadgeColumn::make('type')
                    ->formatStateUsing(fn ($state) => ucwords($state))
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
                Tables\Columns\TextColumn::make('purchases')
                    ->numeric()
                    ->sortable()
                    ->alignRight(),
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

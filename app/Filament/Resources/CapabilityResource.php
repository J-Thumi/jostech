<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CapabilityResource\Pages;
use App\Models\Capability;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CapabilityResource extends Resource
{
    protected static ?string $model = Capability::class;
    protected static ?string $navigationIcon = 'heroicon-o-wrench-screwdriver';
    protected static ?string $navigationGroup = 'Services & Capabilities';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Capability Details')
                    ->schema([
                        Forms\Components\Select::make('page')
                            ->options([
                                'home' => 'Home Page',
                                'services' => 'Services Page',
                            ])
                            ->required()
                            ->native(false),
                        Forms\Components\TextInput::make('title')
                            ->required(),
                        Forms\Components\TextInput::make('icon')
                            ->placeholder('code-bracket'),
                        Forms\Components\TextInput::make('color')
                            ->placeholder('text-primary-500'),
                        Forms\Components\TextInput::make('bg_color')
                            ->placeholder('bg-primary-500/10'),
                        Forms\Components\TextInput::make('check_color')
                            ->placeholder('text-emerald-500'),
                        Forms\Components\TextInput::make('sort_order')
                            ->numeric()
                            ->default(0),
                        Forms\Components\Textarea::make('description')
                            ->rows(3)
                            ->columnSpanFull(),
                    ])->columns(2),

                Forms\Components\Section::make('Features & Tags')
                    ->schema([
                        Forms\Components\HasManyRepeater::make('features')
                            ->relationship('features')
                            ->schema([
                                Forms\Components\TextInput::make('feature')
                                    ->required()
                                    ->columnSpanFull(),
                                Forms\Components\Hidden::make('sort_order')
                                    ->default(0),
                            ])
                            ->orderColumn('sort_order')
                            ->collapsible()
                            ->itemLabel(fn (array $state): ?string => $state['feature'] ?? null),

                        Forms\Components\HasManyRepeater::make('tags')
                            ->relationship('tags')
                            ->schema([
                                Forms\Components\TextInput::make('tag')
                                    ->required()
                                    ->columnSpanFull(),
                                Forms\Components\Hidden::make('sort_order')
                                    ->default(0),
                            ])
                            ->orderColumn('sort_order')
                            ->collapsible()
                            ->itemLabel(fn (array $state): ?string => $state['tag'] ?? null),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('page')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'home' => 'info',
                        'services' => 'success',
                        default => 'gray',
                    })
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('icon')
                    ->placeholder('N/A'),
                Tables\Columns\TextColumn::make('sort_order')
                    ->sortable(),
            ])
            ->defaultSort('sort_order', 'asc')
            ->filters([
                Tables\Filters\SelectFilter::make('page')
                    ->options([
                        'home' => 'Home Page',
                        'services' => 'Services Page',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCapabilities::route('/'),
            'create' => Pages\CreateCapability::route('/create'),
            'edit' => Pages\EditCapability::route('/{record}/edit'),
        ];
    }
}
<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProcessPhaseResource\Pages;
use App\Models\ProcessPhase;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ProcessPhaseResource extends Resource
{
    protected static ?string $model = ProcessPhase::class;
    protected static ?string $navigationIcon = 'heroicon-o-cpu-chip';
    protected static ?string $navigationGroup = 'Process Page';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Phase Info')
                    ->schema([
                        Forms\Components\TextInput::make('number')
                            ->required()
                            ->placeholder('01'),
                        Forms\Components\TextInput::make('label')
                            ->placeholder('Phase I'),
                        Forms\Components\TextInput::make('title')
                            ->required(),
                        Forms\Components\TextInput::make('bg_color')
                            ->placeholder('bg-primary/10'),
                        Forms\Components\TextInput::make('text_color')
                            ->placeholder('text-primary'),
                        Forms\Components\TextInput::make('shadow_color')
                            ->placeholder('shadow-primary/20'),
                        Forms\Components\TextInput::make('sort_order')
                            ->numeric()
                            ->default(0),
                        Forms\Components\Textarea::make('description')
                            ->rows(3)
                            ->columnSpanFull(),
                    ])->columns(3),

                Forms\Components\Section::make('Checklist Items')
                    ->schema([
                        Forms\Components\HasManyRepeater::make('checklistItems')
                            ->relationship('checklistItems')
                            ->schema([
                                Forms\Components\TextInput::make('item')
                                    ->required()
                                    ->columnSpanFull(),
                                Forms\Components\Hidden::make('sort_order')
                                    ->default(0),
                            ])
                            ->orderColumn('sort_order')
                            ->collapsible()
                            ->itemLabel(fn (array $state): ?string => $state['item'] ?? null)
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('number')
                    ->badge(),
                Tables\Columns\TextColumn::make('label'),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sort_order')
                    ->sortable(),
            ])
            ->defaultSort('sort_order', 'asc')
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProcessPhases::route('/'),
            'create' => Pages\CreateProcessPhase::route('/create'),
            'edit' => Pages\EditProcessPhase::route('/{record}/edit'),
        ];
    }
}
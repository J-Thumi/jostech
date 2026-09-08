<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutMetricResource\Pages;
use App\Models\AboutMetric;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class AboutMetricResource extends Resource
{
    protected static ?string $model = AboutMetric::class;
    protected static ?string $navigationIcon = 'heroicon-o-chart-bar-square';
    protected static ?string $navigationGroup = 'About Page';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Metric Item')
                    ->schema([
                        Forms\Components\TextInput::make('value')
                            ->required()
                            ->placeholder('e.g., 99.9%'),
                        Forms\Components\TextInput::make('label')
                            ->required()
                            ->placeholder('e.g., Uptime SLA'),
                        Forms\Components\TextInput::make('color')
                            ->placeholder('e.g., text-emerald-400'),
                        Forms\Components\TextInput::make('sort_order')
                            ->numeric()
                            ->default(0),
                        Forms\Components\Textarea::make('detail')
                            ->rows(3)
                            ->columnSpanFull(),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('value')
                    ->badge()
                    ->sortable(),
                Tables\Columns\TextColumn::make('label')
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
            'index' => Pages\ListAboutMetrics::route('/'),
            'create' => Pages\CreateAboutMetric::route('/create'),
            'edit' => Pages\EditAboutMetric::route('/{record}/edit'),
        ];
    }
}
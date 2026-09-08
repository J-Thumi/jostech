<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProcessQualityFeatureResource\Pages;
use App\Models\ProcessQualityFeature;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ProcessQualityFeatureResource extends Resource
{
    protected static ?string $model = ProcessQualityFeature::class;
    protected static ?string $navigationIcon = 'heroicon-o-check-badge';
    protected static ?string $navigationGroup = 'Process Page';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Quality Feature')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required(),
                        Forms\Components\TextInput::make('icon')
                            ->placeholder('e.g., check-circle'),
                        Forms\Components\TextInput::make('bg_color')
                            ->placeholder('e.g., bg-emerald-500/10'),
                        Forms\Components\TextInput::make('icon_color')
                            ->placeholder('e.g., text-emerald-400'),
                        Forms\Components\TextInput::make('sort_order')
                            ->numeric()
                            ->default(0),
                        Forms\Components\Textarea::make('description')
                            ->rows(3)
                            ->columnSpanFull(),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('icon')
                    ->placeholder('N/A'),
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
            'index' => Pages\ListProcessQualityFeatures::route('/'),
            'create' => Pages\CreateProcessQualityFeature::route('/create'),
            'edit' => Pages\EditProcessQualityFeature::route('/{record}/edit'),
        ];
    }
}
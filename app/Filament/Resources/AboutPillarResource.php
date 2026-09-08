<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutPillarResource\Pages;
use App\Models\AboutPillar;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class AboutPillarResource extends Resource
{
    protected static ?string $model = AboutPillar::class;
    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    protected static ?string $navigationGroup = 'About Page';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Pillar Information')
                    ->schema([
                        Forms\Components\TextInput::make('title')->required(),
                        Forms\Components\TextInput::make('icon')->default('shield-check'),
                        // Forms\Components\TextInput::make('bg_color')->default('bg-primary/10'),
                        // Forms\Components\TextInput::make('icon_color')->default('text-primary'),
                        Forms\Components\TextInput::make('sort_order')->numeric()->default(0),
                        Forms\Components\Textarea::make('description')->required()->columnSpanFull(),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->searchable(),
                Tables\Columns\TextColumn::make('icon'),
                Tables\Columns\TextColumn::make('sort_order')->sortable(),
            ])
            ->defaultSort('sort_order', 'asc')
            ->actions([Tables\Actions\EditAction::make(), Tables\Actions\DeleteAction::make()]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAboutPillars::route('/'),
            'create' => Pages\CreateAboutPillar::route('/create'),
            'edit' => Pages\EditAboutPillar::route('/{record}/edit'),
        ];
    }
}
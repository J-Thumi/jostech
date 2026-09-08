<?php
namespace App\Filament\Resources;

use App\Filament\Resources\HomeHeroStatResource\Pages;
use App\Models\HomeHeroStat;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class HomeHeroStatResource extends Resource
{
    protected static ?string $model = HomeHeroStat::class;
    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';
    protected static ?string $navigationGroup = 'Homepage';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Hero Metric Data')
                    ->schema([
                        Forms\Components\TextInput::make('value')
                            ->required()
                            ->placeholder('100%'),
                        Forms\Components\TextInput::make('label')
                            ->required()
                            ->placeholder('Production Uptime'),
                        // Forms\Components\TextInput::make('subtext')
                            // ->placeholder('across all microservices'),
                        Forms\Components\TextInput::make('sort_order')
                            ->numeric()
                            ->default(0),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('value')->badge(),
                Tables\Columns\TextColumn::make('label')->searchable(),
                // Tables\Columns\TextColumn::make('subtext'),
                Tables\Columns\TextColumn::make('sort_order')->sortable(),
            ])
            ->defaultSort('sort_order', 'asc')
            ->actions([Tables\Actions\EditAction::make(), Tables\Actions\DeleteAction::make()]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHomeHeroStats::route('/'),
            'create' => Pages\CreateHomeHeroStat::route('/create'),
            'edit' => Pages\EditHomeHeroStat::route('/{record}/edit'),
        ];
    }
}
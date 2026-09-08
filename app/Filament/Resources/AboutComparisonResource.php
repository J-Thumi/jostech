<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutComparisonResource\Pages;
use App\Models\AboutComparison;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class AboutComparisonResource extends Resource
{
    protected static ?string $model = AboutComparison::class;
    protected static ?string $navigationIcon = 'heroicon-o-arrows-right-left';
    protected static ?string $navigationGroup = 'About Page';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Comparison Metric')
                    ->schema([
                        Forms\Components\TextInput::make('metric')
                            ->required()
                            ->placeholder('e.g., Deployment Speed'),
                        Forms\Components\TextInput::make('sort_order')
                            ->numeric()
                            ->default(0),
                        Forms\Components\Textarea::make('traditional')
                            ->label('Traditional Agency Approach')
                            ->rows(3),
                        Forms\Components\Textarea::make('jostech')
                            ->label('Jostech Approach')
                            ->rows(3),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('metric')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('traditional')
                    ->limit(30),
                Tables\Columns\TextColumn::make('jostech')
                    ->limit(30),
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
            'index' => Pages\ListAboutComparisons::route('/'),
            'create' => Pages\CreateAboutComparison::route('/create'),
            'edit' => Pages\EditAboutComparison::route('/{record}/edit'),
        ];
    }
}
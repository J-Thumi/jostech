<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutCorePhilosophyResource\Pages;
use App\Models\AboutCorePhilosophy;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class AboutCorePhilosophyResource extends Resource
{
    protected static ?string $model = AboutCorePhilosophy::class;
    protected static ?string $navigationIcon = 'heroicon-o-light-bulb';
    protected static ?string $navigationGroup = 'About Page';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Core Philosophy')
                    ->schema([
                        Forms\Components\TextInput::make('tag')
                            ->placeholder('e.g., Engineering First'),
                        Forms\Components\TextInput::make('heading')
                            ->required(),
                        Forms\Components\Textarea::make('description')
                            ->rows(4)
                            ->columnSpanFull(),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tag')
                    ->badge()
                    ->placeholder('N/A'),
                Tables\Columns\TextColumn::make('heading')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAboutCorePhilosophies::route('/'),
            'create' => Pages\CreateAboutCorePhilosophy::route('/create'),
            'edit' => Pages\EditAboutCorePhilosophy::route('/{record}/edit'),
        ];
    }
}
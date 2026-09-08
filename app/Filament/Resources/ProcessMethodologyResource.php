<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProcessMethodologyResource\Pages;
use App\Models\ProcessMethodology;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ProcessMethodologyResource extends Resource
{
    protected static ?string $model = ProcessMethodology::class;
    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    protected static ?string $navigationGroup = 'Process Page';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Methodology Overview')
                    ->schema([
                        Forms\Components\TextInput::make('badge')
                            ->placeholder('e.g., Agile Core'),
                        Forms\Components\TextInput::make('title')
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
                Tables\Columns\TextColumn::make('badge')
                    ->badge()
                    ->placeholder('N/A'),
                Tables\Columns\TextColumn::make('title')
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
            'index' => Pages\ListProcessMethodologies::route('/'),
            'create' => Pages\CreateProcessMethodology::route('/create'),
            'edit' => Pages\EditProcessMethodology::route('/{record}/edit'),
        ];
    }
}
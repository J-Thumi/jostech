<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProcessQualityAssuranceResource\Pages;
use App\Models\ProcessQualityAssurance;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ProcessQualityAssuranceResource extends Resource
{
    protected static ?string $model = ProcessQualityAssurance::class;
    protected static ?string $navigationIcon = 'heroicon-o-shield-check';
    protected static ?string $navigationGroup = 'Process Page';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Quality Assurance Section')
                    ->schema([
                        Forms\Components\TextInput::make('badge')
                            ->placeholder('e.g., Testing Standard'),
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
            'index' => Pages\ListProcessQualityAssurances::route('/'),
            'create' => Pages\CreateProcessQualityAssurance::route('/create'),
            'edit' => Pages\EditProcessQualityAssurance::route('/{record}/edit'),
        ];
    }
}
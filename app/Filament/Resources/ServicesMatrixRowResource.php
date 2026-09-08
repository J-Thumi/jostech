<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServicesMatrixRowResource\Pages;
use App\Models\ServicesMatrixRow;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ServicesMatrixRowResource extends Resource
{
    protected static ?string $model = ServicesMatrixRow::class;
    protected static ?string $navigationIcon = 'heroicon-o-table-cells';
    protected static ?string $navigationGroup = 'Services & Capabilities';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Service Matrix Item')
                    ->schema([
                        Forms\Components\TextInput::make('area')
                            ->required()
                            ->placeholder('Backend Architecture'),
                        Forms\Components\TextInput::make('stack')
                            ->placeholder('Laravel • Python • Docker'),
                        Forms\Components\TextInput::make('sort_order')
                            ->numeric()
                            ->default(0),
                        Forms\Components\Textarea::make('deliverables')
                            ->rows(3)
                            ->placeholder('REST APIs, Microservices, Database Migrations')
                            ->columnSpanFull(),
                        Forms\Components\Textarea::make('use_case')
                            ->rows(3)
                            ->placeholder('High-throughput enterprise portals and SAAS backends')
                            ->columnSpanFull(),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('area')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('stack')
                    ->badge()
                    ->searchable(),
                Tables\Columns\TextColumn::make('deliverables')
                    ->limit(40),
                Tables\Columns\TextColumn::make('use_case')
                    ->limit(40),
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
            'index' => Pages\ListServicesMatrixRows::route('/'),
            'create' => Pages\CreateServicesMatrixRow::route('/create'),
            'edit' => Pages\EditServicesMatrixRow::route('/{record}/edit'),
        ];
    }
}
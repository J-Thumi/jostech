<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProcessCodePreviewResource\Pages;
use App\Models\ProcessCodePreview;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ProcessCodePreviewResource extends Resource
{
    protected static ?string $model = ProcessCodePreview::class;
    protected static ?string $navigationIcon = 'heroicon-o-code-bracket-square';
    protected static ?string $navigationGroup = 'Process Page';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Code Preview Details')
                    ->schema([
                        Forms\Components\TextInput::make('filename')
                            ->required()
                            ->placeholder('OrderController.php'),
                        Forms\Components\TextInput::make('status')
                            ->placeholder('200 OK'),
                        Forms\Components\TextInput::make('class_name')
                            ->placeholder('OrderController'),
                        Forms\Components\TextInput::make('extends_class')
                            ->placeholder('Controller'),
                        Forms\Components\TextInput::make('comment')
                            ->placeholder('Process inbound webhook request'),
                        Forms\Components\TextInput::make('method_name')
                            ->placeholder('store()'),
                        Forms\Components\TextInput::make('endpoint')
                            ->placeholder('POST /api/v1/orders'),
                        Forms\Components\TextInput::make('table_name')
                            ->placeholder('orders'),
                        Forms\Components\TextInput::make('test_summary')
                            ->placeholder('12 passed, 0 failed'),
                        Forms\Components\TextInput::make('coverage')
                            ->placeholder('100%'),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('filename')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('endpoint')
                    ->badge()
                    ->placeholder('N/A'),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('coverage')
                    ->badge(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProcessCodePreviews::route('/'),
            'create' => Pages\CreateProcessCodePreview::route('/create'),
            'edit' => Pages\EditProcessCodePreview::route('/{record}/edit'),
        ];
    }
}
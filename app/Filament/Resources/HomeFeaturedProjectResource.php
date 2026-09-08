<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomeFeaturedProjectResource\Pages;
use App\Models\HomeFeaturedProject;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class HomeFeaturedProjectResource extends Resource
{
    protected static ?string $model = HomeFeaturedProject::class;
    protected static ?string $navigationIcon = 'heroicon-o-star';
    protected static ?string $navigationGroup = 'Homepage';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Project Overview')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required(),
                        Forms\Components\TextInput::make('badge')
                            ->placeholder('e.g., Flagship System'),
                        Forms\Components\TextInput::make('badge_color')
                            ->placeholder('e.g., text-emerald-400'),
                        Forms\Components\TextInput::make('icon')
                            ->placeholder('e.g., cpu-chip'),
                        Forms\Components\TextInput::make('sort_order')
                            ->numeric()
                            ->default(0),
                        Forms\Components\Textarea::make('subtitle')
                            ->rows(2)
                            ->columnSpanFull(),
                        Forms\Components\Textarea::make('description')
                            ->rows(3)
                            ->columnSpanFull(),
                    ])->columns(2),

                Forms\Components\Section::make('Project Tags')
                    ->schema([
                        Forms\Components\HasManyRepeater::make('tags')
                            ->relationship('tags')
                            ->schema([
                                Forms\Components\TextInput::make('tag')
                                    ->required()
                                    ->columnSpanFull(),
                                Forms\Components\Hidden::make('sort_order')
                                    ->default(0),
                            ])
                            ->orderColumn('sort_order')
                            ->collapsible()
                            ->itemLabel(fn (array $state): ?string => $state['tag'] ?? null)
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('badge')
                    ->badge()
                    ->placeholder('N/A'),
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
            'index' => Pages\ListHomeFeaturedProjects::route('/'),
            'create' => Pages\CreateHomeFeaturedProject::route('/create'),
            'edit' => Pages\EditHomeFeaturedProject::route('/{record}/edit'),
        ];
    }
}
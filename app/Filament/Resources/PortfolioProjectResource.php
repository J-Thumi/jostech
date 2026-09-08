<?php
namespace App\Filament\Resources;

use App\Filament\Resources\PortfolioProjectResource\Pages;
use App\Models\PortfolioProject;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PortfolioProjectResource extends Resource
{
    protected static ?string $model = PortfolioProject::class;
    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    protected static ?string $navigationGroup = 'Portfolio & Case Studies';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Project Overview')
                    ->schema([
                        Forms\Components\TextInput::make('title')->required(),
                        // Forms\Components\TextInput::make('slug')->required()->unique(ignoreRecord: true),
                        Forms\Components\TextInput::make('category')->required(),
                        Forms\Components\TextInput::make('status')->required(),
                        Forms\Components\TextInput::make('status_color')->default('text-emerald-400'),
                        Forms\Components\TextInput::make('tech_stack')->placeholder('Laravel • Tailwind • MySQL'),
                        Forms\Components\Textarea::make('description')->required()->columnSpanFull(),
                    ])->columns(2),

                Forms\Components\Section::make('Links & Display Options')
                    ->schema([
                        Forms\Components\TextInput::make('url')->url(),
                        Forms\Components\Toggle::make('external')->default(true),
                        // Forms\Components\Toggle::make('is_featured')->default(false),
                        Forms\Components\TextInput::make('sort_order')->numeric()->default(0),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('category')->badge(),
                Tables\Columns\TextColumn::make('status')->badge(),
                // Tables\Columns\IconColumn::make('is_featured')->boolean(),
                Tables\Columns\TextColumn::make('sort_order')->sortable(),
            ])
            ->defaultSort('sort_order', 'asc')
            ->actions([Tables\Actions\EditAction::make()])
            ->bulkActions([Tables\Actions\DeleteBulkAction::make()]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPortfolioProjects::route('/'),
            'create' => Pages\CreatePortfolioProject::route('/create'),
            'edit' => Pages\EditPortfolioProject::route('/{record}/edit'),
        ];
    }
}
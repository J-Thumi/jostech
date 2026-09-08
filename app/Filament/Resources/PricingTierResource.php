<?php
namespace App\Filament\Resources;

use App\Filament\Resources\PricingTierResource\Pages;
use App\Models\PricingTier;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PricingTierResource extends Resource
{
    protected static ?string $model = PricingTier::class;
    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';
    protected static ?string $navigationGroup = 'Pricing';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Tier Details')
                    ->schema([
                        Forms\Components\TextInput::make('badge')->required()->placeholder('Scope Build'),
                        Forms\Components\TextInput::make('title')->required()->placeholder('MVP / Custom Feature'),
                        Forms\Components\Textarea::make('description')->required()->columnSpanFull(),
                        Forms\Components\TextInput::make('price')->required()->placeholder('$2,500'),
                        Forms\Components\TextInput::make('billing_period')->required()->placeholder('/ starting flat rate'),
                    ])->columns(2),

                Forms\Components\Section::make('Styling & Visibility')
                    ->schema([
                        Forms\Components\Toggle::make('is_featured')->default(false),
                        Forms\Components\TextInput::make('featured_badge')->placeholder('Most Popular'),
                        Forms\Components\TextInput::make('badge_color')->default('text-primary'),
                        Forms\Components\TextInput::make('border_style')->default('border-border/80'),
                        Forms\Components\TextInput::make('icon_color')->default('text-primary'),
                        Forms\Components\TextInput::make('button_text')->required()->default('Choose MVP Scope'),
                        Forms\Components\TextInput::make('button_class')->required(),
                        Forms\Components\TextInput::make('sort_order')->numeric()->default(0),
                    ])->columns(2),

                Forms\Components\Section::make('Tier Features')
                    ->schema([
                        Forms\Components\HasManyRepeater::make('features')
                            ->relationship('features')
                            ->schema([
                                Forms\Components\TextInput::make('feature')->required()->columnSpanFull(),
                                Forms\Components\TextInput::make('sort_order')->numeric()->default(0),
                            ])
                            ->orderColumn('sort_order')
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->searchable(),
                Tables\Columns\TextColumn::make('price'),
                Tables\Columns\TextColumn::make('billing_period'),
                Tables\Columns\IconColumn::make('is_featured')->boolean(),
                Tables\Columns\TextColumn::make('sort_order')->sortable(),
            ])
            ->defaultSort('sort_order', 'asc')
            ->actions([Tables\Actions\EditAction::make()]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPricingTiers::route('/'),
            'create' => Pages\CreatePricingTier::route('/create'),
            'edit' => Pages\EditPricingTier::route('/{record}/edit'),
        ];
    }
}
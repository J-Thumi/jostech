<?php
namespace App\Filament\Resources;

use App\Filament\Resources\ProcessPhaseResource\Pages;
use App\Models\ProcessPhase;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ProcessPhaseResource extends Resource
{
    protected static ?string $model = ProcessPhase::class;
    protected static ?string $navigationIcon = 'heroicon-o-cpu-chip';
    protected static ?string $navigationGroup = 'Process';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Phase Details')
                    ->schema([
                        Forms\Components\TextInput::make('phase_number')->required()->placeholder('01'),
                        Forms\Components\TextInput::make('phase_label')->required()->placeholder('Phase I'),
                        Forms\Components\TextInput::make('title')->required()->placeholder('Discovery & Specs'),
                        Forms\Components\Textarea::make('description')->required()->columnSpanFull(),
                    ])->columns(3),

                Forms\Components\Section::make('Theme Styling')
                    ->schema([
                        Forms\Components\TextInput::make('bg_color')->default('bg-primary'),
                        Forms\Components\TextInput::make('text_color')->default('text-primary'),
                        Forms\Components\TextInput::make('shadow_color')->default('shadow-primary/20'),
                        Forms\Components\TextInput::make('sort_order')->numeric()->default(0),
                    ])->columns(2),

                Forms\Components\Section::make('Checklist Deliverables')
                    ->schema([
                        Forms\Components\HasManyRepeater::make('checklistItems')
                            ->relationship('checklistItems')
                            ->schema([
                                Forms\Components\TextInput::make('item')->required()->columnSpanFull(),
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
                Tables\Columns\TextColumn::make('phase_number')->badge(),
                Tables\Columns\TextColumn::make('phase_label'),
                Tables\Columns\TextColumn::make('title')->searchable(),
                Tables\Columns\TextColumn::make('sort_order')->sortable(),
            ])
            ->defaultSort('sort_order', 'asc')
            ->actions([Tables\Actions\EditAction::make()]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProcessPhases::route('/'),
            'create' => Pages\CreateProcessPhase::route('/create'),
            'edit' => Pages\EditProcessPhase::route('/{record}/edit'),
        ];
    }
}
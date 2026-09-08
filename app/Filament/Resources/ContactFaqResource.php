<?php
namespace App\Filament\Resources;

use App\Filament\Resources\ContactFaqResource\Pages;
use App\Models\ContactFaq;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ContactFaqResource extends Resource
{
    protected static ?string $model = ContactFaq::class;
    protected static ?string $navigationIcon = 'heroicon-o-question-mark-circle';
    protected static ?string $navigationGroup = 'Inquiries';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('FAQ Content')
                    ->schema([
                        Forms\Components\TextInput::make('question')->required()->columnSpanFull(),
                        Forms\Components\Textarea::make('answer')->required()->columnSpanFull(),
                        Forms\Components\TextInput::make('sort_order')->numeric()->default(0),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('question')->searchable()->limit(50),
                Tables\Columns\TextColumn::make('sort_order')->sortable(),
            ])
            ->defaultSort('sort_order', 'asc')
            ->actions([Tables\Actions\EditAction::make(), Tables\Actions\DeleteAction::make()]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContactFaqs::route('/'),
            'create' => Pages\CreateContactFaq::route('/create'),
            'edit' => Pages\EditContactFaq::route('/{record}/edit'),
        ];
    }
}
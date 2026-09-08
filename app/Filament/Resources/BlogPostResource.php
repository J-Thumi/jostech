<?php
namespace App\Filament\Resources;

use App\Filament\Resources\BlogPostResource\Pages;
use App\Models\BlogPost;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class BlogPostResource extends Resource
{
    protected static ?string $model = BlogPost::class;
    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $navigationGroup = 'Blog';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Article Content')
                    ->schema([
                        Forms\Components\TextInput::make('title')->required(),
                        Forms\Components\TextInput::make('slug')->required()->unique(ignoreRecord: true),
                        Forms\Components\TextInput::make('category')->required(),
                        Forms\Components\TextInput::make('read_time')->placeholder('5 min read'),
                        Forms\Components\Textarea::make('excerpt')->required()->columnSpanFull(),
                        Forms\Components\RichEditor::make('content')->required()->columnSpanFull(),
                    ])->columns(2),

                Forms\Components\Section::make('Metadata & Publishing')
                    ->schema([
                        Forms\Components\TextInput::make('author_name')->default('Josphat Thumi'),
                        Forms\Components\TextInput::make('author_role')->default('Lead Backend Engineer'),
                        Forms\Components\DatePicker::make('published_at')->default(now()),
                        Forms\Components\Toggle::make('is_published')->default(true),
                        Forms\Components\Toggle::make('is_featured')->default(false),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('category')->badge(),
                Tables\Columns\TextColumn::make('published_at')->date(),
                Tables\Columns\IconColumn::make('is_published')->boolean(),
                Tables\Columns\IconColumn::make('is_featured')->boolean(),
            ])
            ->defaultSort('published_at', 'desc')
            ->actions([Tables\Actions\EditAction::make()]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBlogPosts::route('/'),
            'create' => Pages\CreateBlogPost::route('/create'),
            'edit' => Pages\EditBlogPost::route('/{record}/edit'),
        ];
    }
}
<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Category;
use App\Models\Post;
use Filament\Forms\Get;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->afterStateUpdated(function (Get $get, Set $set, ?string $state) {
                        if (!$get('is_slug_changed_manually') && filled($state)) {
                            $set('slug', str($state)->slug());
                        }
                    })
                    ->label('Titulo')
                    ->required(),
                Forms\Components\TextInput::make('slug')
                    ->label('Url')
                    // ->readOnly()
                    ->required(),
                Select::make('categories')
                    ->label('Categoria')
                    // ->options(Category::all()->pluck('name', 'id'))
                    ->relationship('categories', 'name')
                    ->preload()
                    ->multiple()
                    ->columnSpan([
                        'lg' => 2,
                    ]),
                Forms\Components\MarkdownEditor::make('body')
                    ->label('Conteúdo')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('teaser')
                    ->label('Decrição')
                    ->columnSpanFull(),
                Forms\Components\Toggle::make('published')
                    ->label('Publicado')
                    ->default(true)
                    ->required(),
                // SpatieMediaLibraryFileUpload::make('images')
                //     ->collection('images')
                //     ->conversion('medium')
                //     ->disk('media-library')
                //     ->downloadable()
                //     ->imageEditor()
                //     ->imageResizeMode('cover')
                //     ->multiple()
                //     ->visibility('public'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                // Tables\Columns\TextColumn::make('slug')
                //     ->searchable(),
                Tables\Columns\ToggleColumn::make('published'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Category;
use App\Models\Post;
use Filament\Forms\Get;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
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
                    ->multiple(),

                SpatieMediaLibraryFileUpload::make('image')
                    ->collection('image')
                    ->conversion('medium')
                    ->disk('media')
                    ->downloadable()
                    ->imageCropAspectRatio('16:9')
                    ->imageEditor()
                    ->imageResizeMode('cover')
                    ->imageResizeTargetHeight('1080')
                    ->imageResizeTargetWidth('1920')
                    ->visibility('public'),

                Forms\Components\Toggle::make('published')
                    ->label('Publicado')
                    ->default(true)
                    ->required(),

                Forms\Components\Textarea::make('teaser')
                    ->label('Decrição')
                    ->maxLength(65535)
                    ->columnSpanFull()
                    ->helperText('Uma visão geral do artigo usado no feed com a intenção de motivar os leitores a clicarem.'),

                Forms\Components\MarkdownEditor::make('body')
                    ->label('Conteúdo')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\SpatieMediaLibraryImageColumn::make('image')
                    ->collection('image')
                    ->disk('media')
                    ->circular(),

                Tables\Columns\TextColumn::make('title')
                    ->label('Nome')
                    ->searchable(),

                // Tables\Columns\TextColumn::make('slug')
                //     ->searchable(),

                Tables\Columns\ToggleColumn::make('published')
                    ->label('Publicado'),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Publicado em')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Atualizado em')
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

<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Berita;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\BeritaResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BeritaResource\RelationManagers;

class BeritaResource extends Resource
{
    protected static ?string $model = Berita::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $navigationLabel = 'Berita';

    protected static ?string $navigationGroup = 'Berita';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make()
                    ->tabs([
                        Tab::make('Post Data')->icon('heroicon-o-folder')->schema([
                            Grid::make(3)
                                ->schema([
                                    Section::make('Create a Post')->schema([
                                        Forms\Components\TextInput::make('title')
                                            ->required()
                                            ->maxLength(255),
                                        Forms\Components\TextInput::make('slug')
                                            ->required()
                                            ->maxLength(255),
                                        Forms\Components\Select::make('category_id')
                                            ->relationship('categoryBerita', 'name') // memastikan relationship name dan title attribute
                                            ->searchable()
                                            ->preload()
                                            ->createOptionForm(function ($component) {
                                                return [
                                                    TextInput::make('name')
                                                        ->required()
                                                        ->label('Category Name'),
                                                    TextInput::make('slug')
                                                        ->required()
                                                        ->label('Slug'),
                                                ];
                                            })
                                            ->required(),
                                    ])->columns(1)->columnSpan(2), // Kolom pertama, span 2

                                    Section::make('Meta')->schema([
                                        FileUpload::make('thumbnail')
                                            ->disk('public')
                                            ->required()
                                            ->directory('Berita')
                                            ->columnSpan('full'),
                                        Forms\Components\Select::make('author_id')
                                            ->relationship('authorBerita', 'name') // memastikan relationship name dan title attribute
                                            ->searchable()
                                            ->preload()
                                            ->createOptionForm(function ($component) {
                                                return [
                                                    TextInput::make('name')
                                                        ->required()
                                                        ->label('Author Name'),
                                                    FileUpload::make('authorImage')
                                                        ->disk('public')
                                                        ->required()
                                                        ->directory('authorImage'),
                                                ];
                                            })
                                            ->required(),
                                        Toggle::make('published')
                                            ->columnSpan('full'),
                                    ])->columns(1)->columnSpan(1), // Kolom kedua, span 1
                                ]),
                        ]),
                        Tab::make('Content')->icon('heroicon-o-pencil-square')->schema([
                            Section::make('Make a Post')->schema([
                                RichEditor::make('content')
                                    ->required()
                                    ->columnSpan('full'),
                            ])->columns(1),
                        ]),
                    ]),
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('author_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('category_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('published')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListBeritas::route('/'),
            'create' => Pages\CreateBerita::route('/create'),
            'edit' => Pages\EditBerita::route('/{record}/edit'),
        ];
    }
}

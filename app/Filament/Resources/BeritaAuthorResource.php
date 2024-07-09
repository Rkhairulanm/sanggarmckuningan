<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\BeritaAuthor;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BeritaAuthorResource\Pages;
use App\Filament\Resources\BeritaAuthorResource\RelationManagers;

class BeritaAuthorResource extends Resource
{
    protected static ?string $model = BeritaAuthor::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';
    protected static ?string $navigationLabel = 'Author Berita';

    protected static ?string $navigationGroup = 'Berita';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make('Author Name')->schema([
                    Forms\Components\Grid::make(2)->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\FileUpload::make('authorImage')
                            ->disk('public')
                            ->required()
                            ->directory('authorImage'),
                    ]),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('authorImage')
                ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
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
            'index' => Pages\ListBeritaAuthors::route('/'),
            'create' => Pages\CreateBeritaAuthor::route('/create'),
            'edit' => Pages\EditBeritaAuthor::route('/{record}/edit'),
        ];
    }
}

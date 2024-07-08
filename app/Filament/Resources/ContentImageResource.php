<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\ContentImage;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ContentImageResource\Pages;
use App\Filament\Resources\ContentImageResource\RelationManagers;

class ContentImageResource extends Resource
{
    protected static ?string $model = ContentImage::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationLabel = 'Content Image';

    protected static ?string $navigationGroup = 'Page Control';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Card::make() // Tambahkan komponen Card
                ->schema([
                    Forms\Components\TextInput::make('type')
                        ->readonly()
                        ->required(),
                    Forms\Components\FileUpload::make('image')
                        ->disk('public')
                        ->required()
                        ->directory('gallery'),
                ]),
        ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('type'),
                Tables\Columns\ImageColumn::make('image'),
                // Tables\Columns\TextColumn::make('created_at')
                //     ->dateTime()
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
                // Tables\Columns\TextColumn::make('updated_at')
                //     ->dateTime()
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\BulkActionGroup::make([
                //     Tables\Actions\DeleteBulkAction::make(),
                // ]),
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
            'index' => Pages\ListContentImages::route('/'),
            'create' => Pages\CreateContentImage::route('/create'),
            'edit' => Pages\EditContentImage::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Info;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\InfoResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\InfoResource\RelationManagers;

class InfoResource extends Resource
{
    protected static ?string $model = Info::class;

    protected static ?string $navigationIcon = 'heroicon-o-identification';
    protected static ?string $navigationLabel = 'Information';

    protected static ?string $navigationGroup = 'Page Control';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Card::make() // Tambahkan komponen Card
                ->schema([
                    TextInput::make('type')
                        ->readonly()
                        ->required(),
                    TextInput::make('content')
                        ->required()
                        ->columnSpanFull()
                        ->placeholder(function ($get) {
                            return $get('type') === 'Phone Number' ? 'Masukkan awalan 08' : null;
                        })
                        ->rules(function ($get) {
                            return $get('type') === 'Phone Number' ? ['regex:/^[0-9]+$/'] : [];
                        }),
                ]),
        ]);
    }
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('type'),
                Tables\Columns\TextColumn::make('content')
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
            'index' => Pages\ListInfos::route('/'),
            'create' => Pages\CreateInfo::route('/create'),
            'edit' => Pages\EditInfo::route('/{record}/edit'),
        ];
    }
}

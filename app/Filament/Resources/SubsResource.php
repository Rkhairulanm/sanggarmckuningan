<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubsResource\Pages;
use App\Filament\Resources\SubsResource\RelationManagers;
use App\Models\Subs;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SubsResource extends Resource
{
    protected static ?string $model = Subs::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-plus';
    protected static ?string $navigationLabel = 'Berlangganan';

    protected static ?string $navigationGroup = 'Kontak Masuk';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('email')
                    ->disableClick() // Menonaktifkan klik pada kolom
                    ->disabled()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListSubs::route('/'),
            'create' => Pages\CreateSubs::route('/create'),
            'edit' => Pages\EditSubs::route('/{record}/edit'),
        ];
    }
}

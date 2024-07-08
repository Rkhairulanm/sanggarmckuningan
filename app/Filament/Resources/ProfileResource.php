<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Profile;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ProfileResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProfileResource\RelationManagers;

class ProfileResource extends Resource
{
    protected static ?string $model = Profile::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationLabel = 'MC Profile';

    protected static ?string $navigationGroup = 'Media';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Form Profile MC')
                    ->tabs([
                        Tabs\Tab::make('Details')
                            ->schema([
                                Grid::make(1)
                                    ->schema([
                                        Grid::make(3)
                                            ->schema([
                                                TextInput::make('name')
                                                    ->placeholder('Masukan Nama Lengkap')
                                                    ->label('Nama')
                                                    ->required()
                                                    ->maxLength(255),
                                                Forms\Components\Select::make('tag')
                                                    ->label('Kategori')
                                                    ->options([
                                                        'AllEvent' => 'All Event',
                                                        'Wedding' => 'Wedding',
                                                        'Graduation' => 'Graduation',
                                                        'Event' => 'Event',
                                                        'Others' => 'Others',
                                                    ])
                                                    ->required(),
                                                Forms\Components\TextInput::make('facebook')
                                                    ->placeholder('Masukan Tautan Facebook')
                                                    ->label('Facebook')
                                                    ->maxLength(255)
                                                    ->default(null),
                                            ])
                                            ->columnSpan(2), // Baris pertama

                                        Grid::make(3)
                                            ->schema([
                                                Forms\Components\TextInput::make('instagram')
                                                    ->label('Instagram')
                                                    ->placeholder('Masukan Tautan Instagram')
                                                    ->maxLength(255)
                                                    ->default(null),
                                                Forms\Components\TextInput::make('twitter')
                                                    ->placeholder('Masukan Tautan Twitter')
                                                    ->label('Twitter')
                                                    ->maxLength(255)
                                                    ->default(null),
                                                Forms\Components\TextInput::make('linkedin')
                                                    ->placeholder('Masukan Tautan Linkedin')
                                                    ->label('LinkedIn')
                                                    ->maxLength(255)
                                                    ->default(null),
                                            ])
                                            ->columnSpan(3), // Baris kedua

                                        Grid::make(1)
                                            ->schema([
                                                Card::make()
                                                    ->schema([
                                                        FileUpload::make('image')
                                                            ->label('Foto')
                                                            ->disk('public')
                                                            ->required()
                                                            ->directory('profileMC')
                                                            ->columnSpanFull(),
                                                    ]),
                                            ])
                                            ->columnSpan(3), // Baris ketiga
                                    ])
                                    ->columns(1) // Mengatur grid dengan 1 kolom agar layout rapi
                                    ->columnSpanFull(),
                            ]),
                        Tabs\Tab::make('Content')
                            ->schema([
                                Card::make()
                                    ->schema([
                                        RichEditor::make('content')
                                            ->label('Tentang MC')
                                            ->required()
                                            ->columnSpanFull(),
                                    ])
                                    ->columns(1)
                                    ->columnSpan('full'),
                            ]),
                    ])
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tag')
                ->searchable(),
                Tables\Columns\TextColumn::make('facebook')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                Tables\Columns\TextColumn::make('instagram')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                Tables\Columns\TextColumn::make('twitter')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                Tables\Columns\TextColumn::make('linkedin')
                    ->toggleable(isToggledHiddenByDefault: true)
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
            'index' => Pages\ListProfiles::route('/'),
            'create' => Pages\CreateProfile::route('/create'),
            'edit' => Pages\EditProfile::route('/{record}/edit'),
        ];
    }
}

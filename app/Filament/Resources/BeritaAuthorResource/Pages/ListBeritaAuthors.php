<?php

namespace App\Filament\Resources\BeritaAuthorResource\Pages;

use App\Filament\Resources\BeritaAuthorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBeritaAuthors extends ListRecords
{
    protected static string $resource = BeritaAuthorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

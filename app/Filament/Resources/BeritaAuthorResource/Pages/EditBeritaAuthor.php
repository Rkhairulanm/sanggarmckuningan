<?php

namespace App\Filament\Resources\BeritaAuthorResource\Pages;

use App\Filament\Resources\BeritaAuthorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBeritaAuthor extends EditRecord
{
    protected static string $resource = BeritaAuthorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

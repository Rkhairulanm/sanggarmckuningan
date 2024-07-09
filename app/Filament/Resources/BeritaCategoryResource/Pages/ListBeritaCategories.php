<?php

namespace App\Filament\Resources\BeritaCategoryResource\Pages;

use App\Filament\Resources\BeritaCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBeritaCategories extends ListRecords
{
    protected static string $resource = BeritaCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

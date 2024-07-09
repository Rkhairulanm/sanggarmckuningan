<?php

namespace App\Filament\Resources\SubsResource\Pages;

use App\Filament\Resources\SubsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSubs extends ListRecords
{
    protected static string $resource = SubsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}

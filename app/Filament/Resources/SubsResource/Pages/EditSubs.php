<?php

namespace App\Filament\Resources\SubsResource\Pages;

use App\Filament\Resources\SubsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSubs extends EditRecord
{
    protected static string $resource = SubsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

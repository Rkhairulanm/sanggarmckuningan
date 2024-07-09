<?php

namespace App\Filament\Resources\SubsResource\Pages;

use App\Filament\Resources\SubsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSubs extends CreateRecord
{
    protected static string $resource = SubsResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

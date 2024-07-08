<?php

namespace App\Filament\Resources\ContentImageResource\Pages;

use App\Filament\Resources\ContentImageResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateContentImage extends CreateRecord
{
    protected static string $resource = ContentImageResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

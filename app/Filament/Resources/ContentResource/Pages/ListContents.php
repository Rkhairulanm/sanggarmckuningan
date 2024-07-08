<?php

namespace App\Filament\Resources\ContentResource\Pages;

use App\Filament\Resources\ContentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\ListRecords\Tab;

class ListContents extends ListRecords
{
    protected static string $resource = ContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
    // public function getTabs(): array
    // {
    //     return [
    //         'All' => Tab::make(),
    //         'Info' => Tab::make()->modifyQueryUsing(function ($query) {
    //             $query->whereIn('type', ['Address', 'Phone Number', 'Email']);
    //         }),
    //         'Sosmed' => Tab::make()->modifyQueryUsing(function ($query) {
    //             $query->whereIn('type', ['Instagram', 'Youtube']);
    //         }),
    //         'Content' => Tab::make()->modifyQueryUsing(function ($query) {
    //             $query->whereIn('type', ['Hero Title Beranda', 'About Section']);
    //         }),
    //     ];
    // }
}

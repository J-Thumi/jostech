<?php

namespace App\Filament\Resources\AboutHighlightResource\Pages;

use App\Filament\Resources\AboutHighlightResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAboutHighlights extends ListRecords
{
    protected static string $resource = AboutHighlightResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

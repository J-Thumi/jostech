<?php

namespace App\Filament\Resources\AboutComparisonResource\Pages;

use App\Filament\Resources\AboutComparisonResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAboutComparisons extends ListRecords
{
    protected static string $resource = AboutComparisonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

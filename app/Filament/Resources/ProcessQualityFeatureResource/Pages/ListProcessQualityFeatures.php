<?php

namespace App\Filament\Resources\ProcessQualityFeatureResource\Pages;

use App\Filament\Resources\ProcessQualityFeatureResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProcessQualityFeatures extends ListRecords
{
    protected static string $resource = ProcessQualityFeatureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\AboutMetricResource\Pages;

use App\Filament\Resources\AboutMetricResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAboutMetrics extends ListRecords
{
    protected static string $resource = AboutMetricResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

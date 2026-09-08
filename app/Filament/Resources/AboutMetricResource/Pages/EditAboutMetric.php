<?php

namespace App\Filament\Resources\AboutMetricResource\Pages;

use App\Filament\Resources\AboutMetricResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutMetric extends EditRecord
{
    protected static string $resource = AboutMetricResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

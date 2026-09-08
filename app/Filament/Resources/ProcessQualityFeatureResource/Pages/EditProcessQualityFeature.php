<?php

namespace App\Filament\Resources\ProcessQualityFeatureResource\Pages;

use App\Filament\Resources\ProcessQualityFeatureResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProcessQualityFeature extends EditRecord
{
    protected static string $resource = ProcessQualityFeatureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

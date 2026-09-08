<?php

namespace App\Filament\Resources\ProcessQualityAssuranceResource\Pages;

use App\Filament\Resources\ProcessQualityAssuranceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProcessQualityAssurance extends EditRecord
{
    protected static string $resource = ProcessQualityAssuranceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

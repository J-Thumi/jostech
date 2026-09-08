<?php

namespace App\Filament\Resources\ProcessQualityAssuranceResource\Pages;

use App\Filament\Resources\ProcessQualityAssuranceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProcessQualityAssurances extends ListRecords
{
    protected static string $resource = ProcessQualityAssuranceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\ServicesMatrixRowResource\Pages;

use App\Filament\Resources\ServicesMatrixRowResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListServicesMatrixRows extends ListRecords
{
    protected static string $resource = ServicesMatrixRowResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

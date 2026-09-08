<?php

namespace App\Filament\Resources\ServicesMatrixRowResource\Pages;

use App\Filament\Resources\ServicesMatrixRowResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditServicesMatrixRow extends EditRecord
{
    protected static string $resource = ServicesMatrixRowResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

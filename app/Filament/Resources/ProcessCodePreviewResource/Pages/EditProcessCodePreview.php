<?php

namespace App\Filament\Resources\ProcessCodePreviewResource\Pages;

use App\Filament\Resources\ProcessCodePreviewResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProcessCodePreview extends EditRecord
{
    protected static string $resource = ProcessCodePreviewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

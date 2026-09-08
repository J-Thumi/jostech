<?php

namespace App\Filament\Resources\ProcessCodePreviewResource\Pages;

use App\Filament\Resources\ProcessCodePreviewResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProcessCodePreviews extends ListRecords
{
    protected static string $resource = ProcessCodePreviewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

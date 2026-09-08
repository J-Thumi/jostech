<?php

namespace App\Filament\Resources\AboutComparisonResource\Pages;

use App\Filament\Resources\AboutComparisonResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutComparison extends EditRecord
{
    protected static string $resource = AboutComparisonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

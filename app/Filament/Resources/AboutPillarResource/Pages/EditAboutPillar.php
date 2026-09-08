<?php

namespace App\Filament\Resources\AboutPillarResource\Pages;

use App\Filament\Resources\AboutPillarResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutPillar extends EditRecord
{
    protected static string $resource = AboutPillarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

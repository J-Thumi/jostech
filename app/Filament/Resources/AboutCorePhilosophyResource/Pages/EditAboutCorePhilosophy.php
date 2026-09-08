<?php

namespace App\Filament\Resources\AboutCorePhilosophyResource\Pages;

use App\Filament\Resources\AboutCorePhilosophyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutCorePhilosophy extends EditRecord
{
    protected static string $resource = AboutCorePhilosophyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

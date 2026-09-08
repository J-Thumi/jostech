<?php

namespace App\Filament\Resources\AboutCorePhilosophyResource\Pages;

use App\Filament\Resources\AboutCorePhilosophyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAboutCorePhilosophies extends ListRecords
{
    protected static string $resource = AboutCorePhilosophyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

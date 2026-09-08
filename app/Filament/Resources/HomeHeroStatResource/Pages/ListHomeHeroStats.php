<?php

namespace App\Filament\Resources\HomeHeroStatResource\Pages;

use App\Filament\Resources\HomeHeroStatResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHomeHeroStats extends ListRecords
{
    protected static string $resource = HomeHeroStatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

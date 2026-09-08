<?php

namespace App\Filament\Resources\ProcessPhaseResource\Pages;

use App\Filament\Resources\ProcessPhaseResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProcessPhases extends ListRecords
{
    protected static string $resource = ProcessPhaseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

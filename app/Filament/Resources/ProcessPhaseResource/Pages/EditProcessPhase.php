<?php

namespace App\Filament\Resources\ProcessPhaseResource\Pages;

use App\Filament\Resources\ProcessPhaseResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProcessPhase extends EditRecord
{
    protected static string $resource = ProcessPhaseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

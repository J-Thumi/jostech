<?php

namespace App\Filament\Resources\ProcessMethodologyResource\Pages;

use App\Filament\Resources\ProcessMethodologyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProcessMethodology extends EditRecord
{
    protected static string $resource = ProcessMethodologyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

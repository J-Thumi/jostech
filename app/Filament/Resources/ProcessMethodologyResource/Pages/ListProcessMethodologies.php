<?php

namespace App\Filament\Resources\ProcessMethodologyResource\Pages;

use App\Filament\Resources\ProcessMethodologyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProcessMethodologies extends ListRecords
{
    protected static string $resource = ProcessMethodologyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

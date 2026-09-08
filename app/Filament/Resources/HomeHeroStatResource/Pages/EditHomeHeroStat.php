<?php

namespace App\Filament\Resources\HomeHeroStatResource\Pages;

use App\Filament\Resources\HomeHeroStatResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHomeHeroStat extends EditRecord
{
    protected static string $resource = HomeHeroStatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

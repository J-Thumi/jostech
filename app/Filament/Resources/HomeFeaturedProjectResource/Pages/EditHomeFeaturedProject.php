<?php

namespace App\Filament\Resources\HomeFeaturedProjectResource\Pages;

use App\Filament\Resources\HomeFeaturedProjectResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHomeFeaturedProject extends EditRecord
{
    protected static string $resource = HomeFeaturedProjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

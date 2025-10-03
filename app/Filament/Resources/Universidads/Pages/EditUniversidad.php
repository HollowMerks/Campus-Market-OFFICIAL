<?php

namespace App\Filament\Resources\Universidads\Pages;

use App\Filament\Resources\Universidads\UniversidadResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditUniversidad extends EditRecord
{
    protected static string $resource = UniversidadResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

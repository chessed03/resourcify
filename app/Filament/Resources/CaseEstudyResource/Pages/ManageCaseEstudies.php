<?php

namespace App\Filament\Resources\CaseEstudyResource\Pages;

use App\Filament\Resources\CaseEstudyResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCaseEstudies extends ManageRecords
{
    protected static string $resource = CaseEstudyResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

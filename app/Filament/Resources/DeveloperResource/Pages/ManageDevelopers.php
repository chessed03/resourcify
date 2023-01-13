<?php

namespace App\Filament\Resources\DeveloperResource\Pages;

use App\Filament\Resources\DeveloperResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageDevelopers extends ManageRecords
{
    protected static string $resource = DeveloperResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

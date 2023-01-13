<?php

namespace App\Filament\Resources\FrameworkResource\Pages;

use App\Filament\Resources\FrameworkResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageFrameworks extends ManageRecords
{
    protected static string $resource = FrameworkResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

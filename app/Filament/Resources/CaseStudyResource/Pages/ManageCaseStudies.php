<?php

namespace App\Filament\Resources\CaseStudyResource\Pages;

use App\Filament\Resources\CaseStudyResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCaseStudies extends ManageRecords
{
    protected static string $resource = CaseStudyResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

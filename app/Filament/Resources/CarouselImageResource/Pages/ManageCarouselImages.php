<?php

namespace App\Filament\Resources\CarouselImageResource\Pages;

use App\Filament\Resources\CarouselImageResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCarouselImages extends ManageRecords
{
    protected static string $resource = CarouselImageResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

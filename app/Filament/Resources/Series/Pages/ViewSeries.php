<?php

namespace App\Filament\Resources\Series\Pages;

use App\Filament\Resources\Series\SeriesResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewSeries extends ViewRecord
{
    protected static string $resource = SeriesResource::class;

    public function getTitle(): string
    {
        return 'Youtube Series Preview';
    }

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}

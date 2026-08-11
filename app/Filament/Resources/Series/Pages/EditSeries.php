<?php

namespace App\Filament\Resources\Series\Pages;

use App\Filament\Resources\Series\SeriesResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditSeries extends EditRecord
{
    protected static string $resource = SeriesResource::class;

    public function getTitle(): string
    {
        return 'Edit Series';
    }

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}

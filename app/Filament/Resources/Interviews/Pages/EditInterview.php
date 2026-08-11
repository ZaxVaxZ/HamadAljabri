<?php

namespace App\Filament\Resources\Interviews\Pages;

use App\Filament\Resources\Interviews\InterviewResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditInterview extends EditRecord
{
    protected static string $resource = InterviewResource::class;

    public function getTitle(): string
    {
        return 'Edit Interview';
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

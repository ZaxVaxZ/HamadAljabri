<?php

namespace App\Filament\Resources\Photos\Pages;

use App\Filament\Resources\Photos\PhotoResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePhoto extends CreateRecord
{
    protected static string $resource = PhotoResource::class;

	protected function mutateFormDataBeforeCreate(array $data): array
	{
		$data['origin'] = \Carbon\Carbon::parse($data['created_at'])->year;

		return $data;
	}
}

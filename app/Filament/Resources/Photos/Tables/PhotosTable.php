<?php

namespace App\Filament\Resources\Photos\Tables;

use App\Filament\Shared\BaseTable;

class PhotosTable extends BaseTable
{
	public static function getMediaType(): string
	{
		return 'photo';
	}
}
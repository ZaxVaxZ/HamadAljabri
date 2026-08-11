<?php

namespace App\Filament\Resources\Series\Tables;

use App\Filament\Shared\BaseTable;

class SeriesTable extends BaseTable
{
	public static function getMediaType(): string
	{
		return 'series';
	}
}

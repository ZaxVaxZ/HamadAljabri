<?php

namespace App\Filament\Resources\Interviews\Tables;

use App\Filament\Shared\BaseTable;

class InterviewsTable extends BaseTable
{
	public static function getMediaType(): string
	{
		return 'interview';
	}
}

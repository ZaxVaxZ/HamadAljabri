<?php

namespace App\Filament\Resources\Articles\Tables;

use App\Filament\Shared\BaseTable;

class ArticlesTable extends BaseTable
{
	public static function getMediaType(): string
	{
		return 'article';
	}
}

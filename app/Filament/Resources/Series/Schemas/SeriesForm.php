<?php

namespace App\Filament\Resources\Series\Schemas;

use App\Filament\Shared\BaseForm;

class SeriesForm extends BaseForm
{
	public static function getMediaType(): string
	{
		return 'series';
	}
}

<?php

namespace App\Filament\Resources\Photos\Schemas;

use App\Filament\Shared\BaseForm;

class PhotoForm extends BaseForm
{
	public static function getMediaType(): string
	{
		return 'photo';
	}
}

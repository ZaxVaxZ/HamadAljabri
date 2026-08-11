<?php

namespace App\Filament\Resources\Interviews\Schemas;

use App\Filament\Shared\BaseForm;

class InterviewForm extends BaseForm
{
	public static function getMediaType(): string
	{
		return 'interview';
	}
}

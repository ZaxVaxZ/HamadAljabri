<?php

namespace App\Filament\Resources\Articles\Schemas;

use App\Filament\Shared\BaseForm;

class ArticleForm extends BaseForm
{
    public static function getMediaType(): string
	{
		return 'article';
	}
}

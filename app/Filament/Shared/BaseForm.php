<?php

namespace App\Filament\Shared;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

abstract class BaseForm
{
	public static function getMediaType(): string
	{
		return 'none';
	}

    public static function configure(Schema $schema): Schema
    {
		$origin = [
			Hidden::make('origin')->default('No where'),
			Select::make('locale')
				->label('Language')
				->options([
					'en' => 'English',
					'ar' => 'Arabic',
				])
				->default('ar')
				->required(),
			TextInput::make('title')
				->columnSpanFull()
				->required(),
			Textarea::make('description')
				->columnSpanFull(),
		];
		$mediatype = static::getMediaType();
		$extra_fields = [
			Hidden::make('content')
				->default(''),
			TextInput::make('link')
				->required(),
			Toggle::make('featured')
				->default(false),
		];
		if ($mediatype == 'article' || $mediatype == 'interview')
		{
			$origin = [
				TextInput::make('origin')->required(),
				DatePicker::make('created_at')
					->label('Publish date')
					->default(now())
					->native(false)
					->displayFormat('d/m/Y'),
				TextInput::make('title')
					->columnSpanFull()
					->required(),
				Textarea::make('description')
					->columnSpanFull(),
			];
			if ($mediatype == 'article')
			{
				$extra_fields = [
					FileUpload::make('content')
						->label('Article PDF')
						->disk('public')
						->directory('images')
						->visibility('public')
						->maxSize(20480)
						->validationMessages([
							'max' => 'File must not exceed 5 MB.',
						]),
					TextInput::make('link'),
					Select::make('locale')
						->label('Language')
						->options([
							'en' => 'English',
							'ar' => 'Arabic',
						])
						->default('ar')
						->required(),
					Toggle::make('featured')
						->default(false),
				];
			}
			else
			{
				$extra_fields = [
					Select::make('locale')
						->label('Language')
						->options([
							'en' => 'English',
							'ar' => 'Arabic',
						])
						->default('ar')
						->required(),
					TextInput::make('link')
						->required(),
					Toggle::make('featured')
						->default(false),
				];
			}
		}
		if ($mediatype == 'advert')
		{
			$extra_fields = [
				FileUpload::make('content')
					->image()
					->label('Full Advert')
					->disk('public')
					->directory('images')
					->visibility('public')
					->maxSize(20480)
					->validationMessages([
						'max' => 'Image must not exceed 5 MB.',
					]),
				Hidden::make('link')
					->default('/advert/'),
				Toggle::make('featured')
					->default(false),
			];
		}
		if ($mediatype == 'photo')
		{
			$origin = [
				Hidden::make('origin')->default('No where'),
				DatePicker::make('created_at')
					->label('Publish date')
					->default(now())
					->native(false)
					->displayFormat('d/m/Y'),
				Hidden::make('locale')
					->default('ar'),
				TextInput::make('title')
					->columnSpanFull()
					->required(),
			];
			$extra_fields = [
				Hidden::make('content')
					->default(''),
				Hidden::make('link')
					->default('https://hamadaljabri.com'),
				Hidden::make('featured')
					->default(false),
			];
		}
        return $schema
            ->components([
                Hidden::make('type')
    				->default(static::getMediaType()),
				Hidden::make('order')
					->default(0),
				...$origin,
				FileUpload::make('thumbnail')
					->image()
					->disk('public')
					->directory('images')
					->visibility('public')
					->maxSize(20480)
					->validationMessages([
						'max' => 'Image must not exceed 5 MB.',
					]),
				...$extra_fields,
                Hidden::make('active')
                    ->default(true),
            ]);
    }
}

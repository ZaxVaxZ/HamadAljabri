<?php

namespace App\Filament\Shared;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

abstract class BaseInfoList
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

				Grid::make(1)
				->schema([
					TextEntry::make('title')
						->weight('bold')
						->size('lg')
						->extraAttributes(fn ($record) => [
							'dir' => $record->isRTL() ? 'rtl' : 'ltr',
							'class' => $record->isRTL() ? 'text-right' : 'text-left',
						])
						->hiddenLabel(),
					ImageEntry::make('thumbnail')
						->disk('public')
						->extraImgAttributes([
							'style' => 'width: 100%; height: auto; object-fit: cover;',
						])
						->hiddenLabel(),
					ImageEntry::make('content')
						->disk('public')
						->extraImgAttributes([
							'style' => 'width: 100%; height: auto; object-fit: cover;',
						])
						->hiddenLabel(),
				]),

                Section::make()
                    ->schema([
						TextEntry::make('locale')
							->label('Language')
							->formatStateUsing(fn ($state) => match ($state) {
								'en' => 'English',
								'ar' => 'Arabic',
								default => $state,
							}),

						TextEntry::make('origin')
							->label('Origin'),

						TextEntry::make('link')
							->label('Link')
							->limit(100)
							->url(fn ($state) => $state)
							->openUrlInNewTab(),

						TextEntry::make('created_at')
							->label('Publish Date')
							->date(),

						IconEntry::make('featured')
							->label('Featured in the sliding banner')
							->boolean()
							->trueIcon('heroicon-o-check-circle')
							->falseIcon('heroicon-o-x-circle')
							->color(fn ($state) => $state ? 'success' : 'danger'),
                    ])
            ]);
    }
}

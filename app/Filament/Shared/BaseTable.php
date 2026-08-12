<?php

namespace App\Filament\Shared;

use App\Models\ContentBlock;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

abstract class BaseTable
{
	public static function getMediaType(): string
	{
		return 'none';
	}

    public static function configure(Table $table): Table
    {
		$lang = [
			TextColumn::make('locale')
				->label('Language')
				->formatStateUsing(fn ($state) => match ($state) {
					'ar' => 'Arabic',
					'en' => 'English',
					default => $state,
				})
				->color(fn ($state) => match ($state) {
					'ar' => 'success',
					'en' => 'info',
					default => 'gray',
				})
				->sortable()
		];
		$origin = [
			TextColumn::make('title')
				->limit(60)
				->extraAttributes(fn ($record) => [
					'dir' => $record->isRTL() ? 'rtl' : 'ltr',
					'class' => $record->isRTL() ? 'text-right' : 'text-left',
				])
				->searchable(),
			CheckboxColumn::make('featured')->sortable(),
			TextColumn::make('created_at')
				->label('Publish date')
				->date()
				->toggleable(isToggledHiddenByDefault: true)
				->sortable()
		];
		$mediatype = static::getMediaType();
		if ($mediatype == 'article' || $mediatype == 'interview')
		{
			$origin = [
				TextColumn::make('origin')
					->searchable()
					->sortable(),
				TextColumn::make('title')
					->limit(60)
					->extraAttributes(fn ($record) => [
						'dir' => $record->isRTL() ? 'rtl' : 'ltr',
						'class' => $record->isRTL() ? 'text-right' : 'text-left',
					])
					->searchable(),
				CheckboxColumn::make('featured')->sortable(),
				TextColumn::make('created_at')
					->label('Publish date')
					->date()
					->toggleable(isToggledHiddenByDefault: true)
					->sortable()
			];
		}
		if ($mediatype == 'photo')
		{
			$lang = [];
			$origin = [
				TextColumn::make('title')
					->limit(60)
					->extraAttributes(fn ($record) => [
						'dir' => $record->isRTL() ? 'rtl' : 'ltr',
						'class' => $record->isRTL() ? 'text-right' : 'text-left',
					])
					->searchable(),
				TextColumn::make('created_at')
					->label('Publish date')
					->date()
					->sortable()
			];
		}
	
        return $table
            ->columns([
                	...$lang,
                ImageColumn::make('thumbnail')
					->disk('public'),
					...$origin
            ])
            ->filters([
                SelectFilter::make('locale')
                ->label('Language')
                ->options([
                    'en' => 'English',
                    'ar' => 'Arabic',
                ]),

				TernaryFilter::make('featured'),

				TernaryFilter::make('active')
					->default(true),
            ])
            ->recordActions([
				ViewAction::make()
					->iconButton()
					->extraAttributes(['style' => 'display: none;']),

				EditAction::make(),

				DeleteAction::make()
					->visible(fn ($record) => $record->active)
					->action(fn ($record) => $record->update([
						'active' => false,
					])),
			
				Action::make('restore')
					->label('Restore')
					->icon('heroicon-o-arrow-path')
					->color('success')
					->visible(fn ($record) => ! $record->active)
					->action(fn ($record) => $record->update([
						'active' => true,
					])),

            ])
			->recordAction('view')
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}

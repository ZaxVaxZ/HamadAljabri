<?php

namespace App\Filament\Resources\Series;

use App\Filament\Resources\Series\Pages\CreateSeries;
use App\Filament\Resources\Series\Pages\EditSeries;
use App\Filament\Resources\Series\Pages\ListSeries;
use App\Filament\Resources\Series\Pages\ViewSeries;
use App\Filament\Resources\Series\Schemas\SeriesForm;
use App\Filament\Resources\Series\Schemas\SeriesInfolist;
use App\Filament\Resources\Series\Tables\SeriesTable;
use App\Models\ContentBlock;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SeriesResource extends Resource
{
    protected static ?string $model = ContentBlock::class;

	protected static ?string $slug = 'series';

	protected static ?string $navigationLabel = 'Youtube Series';

	protected static ?string $modelLabel = 'Series';

	protected static ?string $pluralModelLabel = 'Series';
	
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
	
    protected static ?string $recordTitleAttribute = 'title';

	public static function getEloquentQuery(): Builder
	{
		return parent::getEloquentQuery()
			->where('type', 'series');
	}
	
    public static function form(Schema $schema): Schema
    {
        return SeriesForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return SeriesInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SeriesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSeries::route('/'),
            'create' => CreateSeries::route('/create'),
            'view' => ViewSeries::route('/{record}'),
            'edit' => EditSeries::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}

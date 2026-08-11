<?php

namespace App\Filament\Resources\Interviews;

use App\Filament\Resources\Interviews\Pages\CreateInterview;
use App\Filament\Resources\Interviews\Pages\EditInterview;
use App\Filament\Resources\Interviews\Pages\ListInterviews;
use App\Filament\Resources\Interviews\Pages\ViewInterview;
use App\Filament\Resources\Interviews\Schemas\InterviewForm;
use App\Filament\Resources\Interviews\Schemas\InterviewInfolist;
use App\Filament\Resources\Interviews\Tables\InterviewsTable;
use App\Models\ContentBlock;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class InterviewResource extends Resource
{
    protected static ?string $model = ContentBlock::class;

	protected static ?string $slug = 'interviews';

	protected static ?string $navigationLabel = 'Interviews';

	protected static ?string $modelLabel = 'Interview';

	protected static ?string $pluralModelLabel = 'Interviews';
	
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
	
    protected static ?string $recordTitleAttribute = 'title';

	public static function getEloquentQuery(): Builder
	{
		return parent::getEloquentQuery()
			->where('type', 'interview');
	}

    public static function form(Schema $schema): Schema
    {
        return InterviewForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return InterviewInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return InterviewsTable::configure($table);
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
            'index' => ListInterviews::route('/'),
            'create' => CreateInterview::route('/create'),
            'view' => ViewInterview::route('/{record}'),
            'edit' => EditInterview::route('/{record}/edit'),
        ];
    }
}

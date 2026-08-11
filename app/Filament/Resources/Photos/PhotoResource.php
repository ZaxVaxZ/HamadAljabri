<?php

namespace App\Filament\Resources\Photos;

use App\Filament\Resources\Photos\Pages\CreatePhoto;
use App\Filament\Resources\Photos\Pages\EditPhoto;
use App\Filament\Resources\Photos\Pages\ListPhotos;
use App\Filament\Resources\Photos\Pages\ViewPhoto;
use App\Filament\Resources\Photos\Schemas\PhotoForm;
use App\Filament\Resources\Photos\Schemas\PhotoInfolist;
use App\Filament\Resources\Photos\Tables\PhotosTable;
use App\Models\ContentBlock;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class PhotoResource extends Resource
{
    protected static ?string $model = ContentBlock::class;

	protected static ?string $slug = 'photos';

	protected static ?string $navigationLabel = 'Photos';

	protected static ?string $modelLabel = 'Photo';

	protected static ?string $pluralModelLabel = 'Photos';
	
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
	
    protected static ?string $recordTitleAttribute = 'title';

	public static function getEloquentQuery(): Builder
	{
		return parent::getEloquentQuery()
			->where('type', 'photo');
	}

    public static function form(Schema $schema): Schema
    {
        return PhotoForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PhotoInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PhotosTable::configure($table);
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
            'index' => ListPhotos::route('/'),
            'create' => CreatePhoto::route('/create'),
            'view' => ViewPhoto::route('/{record}'),
            'edit' => EditPhoto::route('/{record}/edit'),
        ];
    }
}

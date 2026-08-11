<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentBlock extends Model
{
    /** @use HasFactory<\Database\Factories\ContentBlockFactory> */
    use HasFactory;
	protected $guarded = [];

	// Scopes
    public function scopeOfType(Builder $query, string $type): Builder
    {
        return $query->where('type', $type);
    }

    public function scopeForLocale(Builder $query, string $locale): Builder
    {
        return $query->where('locale', $locale);
    }

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('active', true);
    }

    public function scopeOrdered(Builder $query): Builder
    {
        return $query->orderBy('order');
    }

	protected function link(): Attribute
	{
		return Attribute::make(
			get: fn ($value) => $this->type === 'advert'
				? "/advert/{$this->id}"
				: $value,
		);
	}

	public function isRTL(): bool
	{
		return $this->locale == 'ar';
	}
}

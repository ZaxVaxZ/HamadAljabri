<?php

namespace App\Livewire;

use App\Models\ContentBlock;
use Livewire\Component;
use Livewire\WithPagination;

new class extends Component
{
    use WithPagination;

    public int $perPage = 15;

    public string $origin;
    public string $type;
    public string $logo = '';
    public string $latest = 'true';
	public string $lang = '';
    public bool $others = false;

    public function render()
    {
		$locale = ($this->lang == '' ? app()->getLocale() : $this->lang);
        if ($this->latest == 'true') {
			$items = ContentBlock::forLocale($locale)
				->ofType($this->type)
				->active()
				->where('origin', $this->origin)
				->latest()
				->orderByDesc('id')
				->paginate($this->perPage);
		}
		else {
			$items = ContentBlock::forLocale($locale)
				->ofType($this->type)
				->active()
				->where('origin', $this->origin)
				->oldest()
				->orderByDesc('id')
				->paginate($this->perPage);
		}
		
		if ($items->isEmpty() && $items->currentPage() > 1) {
            $this->setPage($items->lastPage());

            return $this->render();
        }

        if ($items->isEmpty() && $items->currentPage() === 1) {
            abort(404);
        }

        return $this->view([
            'items' => $items,
        ]);
    }
};
?>

<div id="pager" class="pager d-flex flex-column"
	wire:loading.class="is-loading"
	wire:target="gotoPage, nextPage, previousPage"
	dir="rtl">
	<div class="listicle row">
		@foreach($items as $item)
			@php
				$exception = $item->type === 'article' || str_contains($item->link, 'syrianmemory');
			@endphp

			<a href="{{ $exception ? $item->link : '/watch/' . $item->id }}"
				target="{{ $exception ? '_blank' : '_self' }}"
				class="listicle-item col-12 col-md-6 col-lg-4"
				aria-label="{{ $item->title }}">

				<div class="athumb d-flex justify-content-center">
					<div class="item-img-bg d-flex flex-row justify-content-center">
						<img loading="eager" src="{{ Storage::url($item->thumbnail) }}" alt="" />
						<img loading="eager" src="{{ Storage::url($item->thumbnail) }}" alt="" />
						<img loading="eager" src="{{ Storage::url($item->thumbnail) }}" alt="" />
					</div>

					<div class="item-img-fg">
						<img loading="eager" src="{{ Storage::url($item->thumbnail) }}" alt="" />
					</div>
				</div>

				<div class="atext">
					<span class="truncate-3">{{ $item->title }}</span>
					<p style="padding-top: 4px; font-size: 16px;">
						{{ $item->created_at->format('d/m/Y') }}
					</p>
				</div>
			</a>
		@endforeach
		@if ($items->hasPages())
			<div class="pagination-sect">
				<div class="listicle-pagination d-flex flex-row justify-content-between align-items-center" dir="ltr">
					{{-- First page --}}
					<button
						wire:click="gotoPage(1)"
						wire:loading.attr="disabled"
						wire:target="gotoPage, nextPage, previousPage"
						@disabled($items->onFirstPage())
					>
						<i class="bi bi-skip-backward-fill"></i>
					</button>
				
					{{-- Previous page --}}
					<button
						wire:click="previousPage"
						wire:loading.attr="disabled"
						wire:target="gotoPage, nextPage, previousPage"
						@disabled($items->onFirstPage())
					>
						<i class="bi bi-caret-left-fill"></i>
					</button>
				
				
					{{-- Page numbers --}}
					@php
						$current = $items->currentPage();
						$last = $items->lastPage();
				
						if ($last <= 5) {
							$start = 1;
							$end = $last;
						} elseif ($current <= 3) {
							$start = 1;
							$end = 5;
						} elseif ($current >= $last - 2) {
							$start = $last - 4;
							$end = $last;
						} else {
							$start = $current - 2;
							$end = $current + 2;
						}
					@endphp
				
					@for ($page = $start; $page <= $end; $page++)
						<button
							wire:click="gotoPage({{ $page }})"
							wire:loading.attr="disabled"
							wire:target="gotoPage, nextPage, previousPage"
							@class(['active' => $page === $current])
						>
							{{ $page }}
						</button>
					@endfor
				
				
					{{-- Next page --}}
					<button
						wire:click="nextPage"
						wire:loading.attr="disabled"
						wire:target="gotoPage, nextPage, previousPage"
						@disabled(!$items->hasMorePages())
					>
						<i class="bi bi-caret-right-fill"></i>
					</button>
				
					{{-- Last page --}}
					<button
						wire:click="gotoPage({{ $last }})"
						wire:loading.attr="disabled"
						wire:target="gotoPage, nextPage, previousPage"
						@disabled($current === $last)
					>
						<i class="bi bi-skip-forward-fill"></i>
					</button>
				</div>
			</div>
		@endif
	</div>
</div>
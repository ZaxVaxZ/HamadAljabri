@props(['items'])

<div class="listicle row">
	@foreach($items as $item)
		@php
			$exception = $item->type == 'article' || str_contains($item->link, 'syrianmemory');
		@endphp
		<a href="{{ $exception == true ? $item->link : '/watch/' . $item->id }}"
			target="{{ $exception == true ? '_blank' : '_self' }}"
			class="listicle-item col-12 col-md-6 col-lg-4"
			aria-label="{{ $item->title }}">
			<div class="athumb d-flex justify-content-center">
				<div class="item-img-bg d-flex flex-row justify-content-center" >
					<img src="{{ Storage::url($item->thumbnail) }}" alt="" />
					<img src="{{ Storage::url($item->thumbnail) }}" alt="" />
					<img src="{{ Storage::url($item->thumbnail) }}" alt="" />
				</div>
				<div class="item-img-fg" ><img src="{{ Storage::url($item->thumbnail) }}" alt="" /></div>
			</div>
			<div class="atext">
				<span>{{ $item->title }}</span>
				<p style="padding-top: 4px; font-size: 16px;">{{ $item->created_at->format('d/m/Y') }}</p>
			</div>
		</a>
	@endforeach
</div>
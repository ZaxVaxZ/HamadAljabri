<x-layouts::mainpage langret="true">
	<div class="player-page d-flex flex-row justify-content-evenly align-items-center">
		<div class="player-right d-flex flex-row justify-content-center align-items-center center">
			@if ($nextID != -1)
				<a href="/watch/{{ $nextID }}" class="player-arrow" aria-label="__('messages.nextVid')">❮</a>
				<span>{{ __('messages.nextVid') }}</span>
			@endif
		</div>
		<div class="player d-flex flex-row justify-content-center"><iframe class="videoplayer" src="{{ $link }}" title="{{ $episode->title }}" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>
		<div class="player-left d-flex flex-row justify-content-center align-items-center center">
			@if ($prevID != -1)
				<a href="/watch/{{ $prevID }}" class="player-arrow" aria-label="__('messages.previousVid')">❯</a>
				<span>{{ __('messages.previousVid') }}</span>
			@endif
		</div>
	</div>
</x-layouts::mainpage>
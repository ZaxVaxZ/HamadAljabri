@props(['serieses'])

<section class="gallery-section d-flex flex-column justify-content-center align-content-center">
	<div class="sect-header w-full d-flex flex-row justify-content-center"><h2>{{ __('messages.photos') }}</h2></div>
	<div class="orbiter w-full d-flex flex-row justify-content-center">
		<div class="orbit-stage">
			@foreach ($serieses as $series)
				<div class="orbit-item">
					<img src="{{ Storage::url($series->thumbnail) }}" alt="" />
				</div>
			@endforeach
		</div>
	</div>
</section>
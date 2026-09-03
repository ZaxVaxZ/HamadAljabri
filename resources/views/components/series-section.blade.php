@props(['side' => 'right', 'dark' => 'false', 'series', 'sect_id' => ''])

<section id="{{ $sect_id }}" class="{{ $dark == 'true' ? 'dark-sect' : '' }}">
	<div class="series-section d-flex flex-column flex-md-row">
		@if($side == 'right')
			<div class="img-part col-12 col-md-6">
				<img src="{{ Storage::url($series->thumbnail) }}" />
			</div>
		@endif
		<div class="text-part col-12 col-md-6">
			<p class="section-type">{{ __('messages.series') }}</p>
			<h2>{{ $series->title }}</h2>
			<p class="section-desc">{{ $series->description }}</p>
			<a href="/episodes/{{ $series->id }}">{{ __('messages.watchonyoutube') }}</a>
		</div>
		@if($side == 'left')
			<div class="img-part col-12 col-md-6">
				<img src="{{ Storage::url($series->thumbnail) }}" />
			</div>
		@endif
	</div>
</section>

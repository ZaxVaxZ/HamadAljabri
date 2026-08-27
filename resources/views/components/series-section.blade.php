@props(['side' => 'right', 'dark' => 'false', 'series', 'sect_id' => ''])

<section id="{{ $sect_id }}" class="{{ $dark == 'true' ? 'dark-sect' : '' }}">
	<div class="series-section d-flex flex-column flex-md-row">
		@if($side == 'right')
			<div class="img-part col-12 col-md-6">
				<img src="{{ Storage::url($series->thumbnail) }}" />
			</div>
		@endif
		<div class="text-part col-12 col-md-6">
			<h2>{{ $series->title }}</h2>
			<p>{{ $series->description }}</p>
		</div>
		@if($side == 'left')
			<div class="img-part col-12 col-md-6">
				<img src="{{ Storage::url($series->thumbnail) }}" />
			</div>
		@endif
	</div>
</section>

@props(['photos'])

<section class="gallery-section d-flex flex-column justify-content-center align-content-center">
	<div class="sect-header w-full d-flex flex-row justify-content-center"><h2>{{ __('messages.photos') }}</h2></div>
	<div class="orbiter w-full d-flex flex-row justify-content-center" dir="ltr">
		<div class="orbit-stage">
			@foreach ($photos as $photo)
				<div class="orbit-item">
					<img src="{{ Storage::url($photo) }}" alt="" />
				</div>
			@endforeach
		</div>
	</div>
	<div class="morelink d-flex flex-row justify-content-center">
		<a href="/gallery">{{ __('messages.more_photos') }}</a>
	</div>
</section>
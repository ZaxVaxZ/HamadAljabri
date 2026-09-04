@props(['years'])

<div class="albums row">
	@foreach ($years as $year)
		<a href="/gallery/{{ $year }}" class="year-album col-6 col-lg-3 d-flex flex-column">
			<img src="{{ Storage::url('/images/gallery.png') }}" alt="" />
			<p class="album-title">{{ __('messages.photos_of') . ' ' . $year }}</p>
		</a>
	@endforeach
</div>
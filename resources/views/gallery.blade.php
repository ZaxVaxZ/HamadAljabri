<x-layouts::mainpage darkfoot="true" highlight="photos">
	<div class="gallery-view d-flex flex-column align-items-center">
		<h2 style="margin-bottom: 30px; margin-top: 50px;">{{ $year == -1 ? __('messages.photos') : __('messages.photos_of') . ' ' . $year }}</h2>
		@if($year == -1)
			<x-albums :years="$album" />
		@else
			<x-gallery :photos="$album" />
		@endif
	</div>
</x-layouts::mainpage>
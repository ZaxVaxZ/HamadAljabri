<x-layouts::mainpage langret="true" darkfoot="true">
	<div class="articles-page container">
		<div class="apage-header d-flex flex-row justify-content-center">
			<h2>{{ $series }}</h2>
		</div>
		<livewire:listicle type="interview" :origin="$series" lang="ar" latest="{{ $oldest ? 'true' : 'false' }}" />
	</div>
</x-layouts::mainpage>
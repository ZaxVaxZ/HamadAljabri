<x-layouts::mainpage>
	<script>
		window.__content = @json($recs);
	</script>

	<x-hero />
	<x-about :pointers="$recs['pointers']" />
	<x-series-section dark="true" :series="$recs['series'][0]"/>
	<x-series-section side="left" :series="$recs['series'][1]" />
	<x-series-section dark="true" :series="$recs['series'][2]" />
	<x-books-section dark="false" />
	<x-books-section />
	<x-videos-section />
	<x-books-section />
	<x-books-section />
	<x-books-section />
	<x-books-section />
	<x-books-section />
</x-layouts::mainpage>
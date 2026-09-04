<x-layouts::mainpage>
	<script>
		window.__content = @json($recs);
	</script>

	<x-hero />
	<x-about :pointers="$recs['pointers']" />
	<x-series-section dark="true" :series="$recs['series'][0]" sect_id="imaps" />
	<x-series-section side="left" :series="$recs['series'][1]" sect_id="3yal" />
	<x-series-section dark="true" :series="$recs['series'][2]" sect_id="world" />
	<x-videos-section :s1="$recs['series'][3]" :s2="$recs['series'][6]" :s3="$recs['series'][7]" />
	<x-series-section dark="true" :series="$recs['series'][8]" sect_id="hamadai" />
	<x-series-section side="left" :series="$recs['series'][4]" sect_id="movies" />
	<x-series-section dark="true" :series="$recs['series'][5]" sect_id="interviews" />
	<x-gallery-section :photos="$recs['photos']" />
	<x-articles :recs="$recs" />
</x-layouts::mainpage>
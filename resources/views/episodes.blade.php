@php
	$highlights = [
		'خرائط i' => 'contentcreation1',
		'عيال زايد' => 'contentcreation2',
		'عالم حمد' => 'contentcreation3',
		'حمد والذكاء الاصطناعي' => 'contentcreation4',
		'الأفلام التجريبية' => 'media1',
		'المقابلات' => 'media2',
		'دورة التقديم التلفزيوني' => 'media3',
		'التوست ماستر' => 'media4',
		'الرحلات والسفر' => 'travel'
	];
@endphp

<x-layouts::mainpage langret="true" darkfoot="true" highlight="{{ $highlights[$series] }}">
	<div class="articles-page container">
		<div class="apage-header d-flex flex-row justify-content-center">
			<h2>{{ $series }}</h2>
		</div>
		<livewire:listicle type="interview" :origin="$series" lang="ar" latest="{{ $latest ? 'true' : 'false' }}" />
	</div>
</x-layouts::mainpage>
@php
	$highlights = [
		'خرائط i' => 'contentcreation1',
		'عيال زايد' => 'contentcreation2',
		'عالم حمد' => 'contentcreation3',
		'حمد والذكاء الاصطناعي' => 'contentcreation4',
		'مشاركات' => 'media1',
		'الأفلام التجريبية' => 'media2',
		'المقابلات' => 'media3',
		'دورة التقديم التلفزيوني' => 'media4',
		'التوست ماستر' => 'media5',
		'الرياضة' => 'media6',
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
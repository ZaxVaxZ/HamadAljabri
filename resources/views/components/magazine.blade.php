@props(['mag', 'recs'])

@php
	$magazines = [['Syriawise', 'images/Syriawise.png'], ['صحيفة الثورة السورية', 'images/Thawra.svg'], ['تلفزيون سوريا', 'images/SyriaTV.svg'], ['other articles', 'other']];
	$ind = (int)$mag;
	if ($ind < 1 || $ind > 4)
		$ind = 1;
	$origin = $magazines[$ind - 1][0];
	$mag = $magazines[$ind - 1][1];
	$locale = app()->getLocale();
@endphp

<div class="magazine col-12 col-lg-6">
	<div class="w-full">
		<div class="w-full d-flex flex-row justify-content-center">
			@if ($ind < 4)
				<img class="magbanner" src="{{ Storage::url($mag) }}" alt="{{ $origin }}" />
			@else
				<p class="others-heading">{{ __('messages.otherarticles') }}</p>
			@endif
		</div>
	</div>
	<div class="w-full">
		@foreach($recs['articles'][$origin] as $article)
			<div class="article w-full d-flex flex-sm-row flex-column">
				<img class="apic" src="{{ Storage::url($article->thumbnail) }}" alt="" />
				<a class="atitle truncate-3" href="{{ $article->link }}" target="_blank" aria-label="{{ $article->title }}"><p>{{ $article->title }}</p></a>
				<hr />
			</div>
		@endforeach
		<div class="w-full text-center pt-5">
			<a class="morearticles" href="/articles/{{ $ind }}" aria-label="{{ __('messages.more_articles') }}">{{ __('messages.more_articles') }}</a>
		</div>
	</div>
</div>
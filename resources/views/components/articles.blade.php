@props(['recs'])

<section class="articles" dir="rtl">
	<div class="sect-header w-full d-flex flex-row justify-content-center"><h2>{{ __('messages.articles') }}</h2></div>
	<x-arabic-others :recs="$recs" />
</section>
@props(['recs'])

<div class="magazine col-12">
	<div class="w-full d-flex flex-column flex-lg-row">
		<div class="col-12 col-lg-6 d-flex flex-column">
			@foreach($recs['articles'] as $idx => $article)
				@if ($idx > 1)
					@break
				@endif
				<div class="article d-flex flex-sm-row flex-column">
					<img class="apic" src="{{ Storage::url($article->thumbnail) }}" alt="" />
					<a class="atitle truncate-3" href="{{ $article->link }}" target="_blank" aria-label="{{ $article->title }}"><p>{{ $article->title }}</p></a>
					<hr />
				</div>
			@endforeach
		</div>
		<div class="col-12 col-lg-6 d-flex flex-column">
			@foreach($recs['articles'] as $idx => $article)
				@if ($idx < 2)
					@continue
				@endif
				<div class="article d-flex flex-sm-row flex-column">
					<img class="apic" src="{{ Storage::url($article->thumbnail) }}" alt="" />
					<a class="atitle truncate-3" href="{{ $article->link }}" target="_blank" aria-label="{{ $article->title }}"><p>{{ $article->title }}</p></a>
					<hr />
				</div>
			@endforeach
		</div>
	</div>
	<div class="w-full text-center pt-5">
		<a class="morearticles" href="/articles" aria-label="{{ __('messages.more_articles') }}">{{ __('messages.more_articles') }}</a>
	</div>
</div>
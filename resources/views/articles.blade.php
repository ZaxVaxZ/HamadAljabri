<x-layouts::mainpage langret="true" darkfoot="true" highlight="articles">
	<div class="articles-page container">
		<div class="apage-header d-flex flex-row justify-content-center">
			<h2 class="article_header">{{ __('messages.articles') }}</h2>
		</div>
		<livewire:listicle origin="مقالات" type="article" lang="ar" />
	</div>
</x-layouts::mainpage>
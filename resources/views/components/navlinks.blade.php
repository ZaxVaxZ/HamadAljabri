@props(['type' => 'desktop'])

@if($type == 'desktop')
	<div class="navlinks d-none d-lg-flex flex-row justify-content-between align-items-center" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
		<a class="nav-item active" href="{{ request()->path() == '/' ? '#about' : '/#about' }}" aria-label="about">
			{{ __('messages.aboutsection') }}
		</a>
		<span class="nav-item" aria-label="contentcreation">
			{{ __('messages.contentcreation') }}
			<div class="menu-dropdown">
				<a href="/episodes/2">{{ __('messages.imaps') }}</a>
				<a href="/episodes/3">{{ __('messages.3yal') }}</a>
				<a href="/episodes/4">{{ __('messages.world') }}</a>
				<a href="/episodes/229">{{ __('messages.hamadai') }}</a>
			</div>
		</span>
		<span class="nav-item">
			{{ __('messages.media') }}
			<div class="menu-dropdown">
				<a href="/episodes/6">{{ __('messages.movies') }}</a>
				<a href="/episodes/7">{{ __('messages.tvinterviews') }}</a>
				<a href="/episodes/8">{{ __('messages.tvcourse') }}</a>
				<a href="/episodes/9">{{ __('messages.toastmasters') }}</a>
			</div>
		</span>
		<a class="nav-item" href="/episodes/5" aria-label="travel">
			{{ __('messages.travel') }}
		</a>
		<a class="nav-item" href="{{ request()->path() == '/' ? '#photos' : '/#photos' }}" aria-label="photos">
			{{ __('messages.photos') }}
		</a>
		<a class="nav-item" href="/articles" aria-label="articles">
			{{ __('messages.articles') }}
		</a>
		<a class="nav-item" href="{{ request()->path() == '/' ? '#contact' : '/#contact' }}" aria-label="contact">
			{{ __('messages.contact') }}
		</a>
	</div>
@else
	<div class="mobile-navlinks d-flex d-lg-none flex-column justify-content-between gap-1 align-items-start" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
		<a class="nav-item active" href="{{ request()->path() == '/' ? '#about' : '/#about' }}" aria-label="about">
			{{ __('messages.aboutsection') }}
		</a>
		<span class="nav-item" aria-label="contentcreation">
			{{ __('messages.contentcreation') }}
			<div class="menu-dropdown">
				<a href="/episodes/2">{{ __('messages.imaps') }}</a>
				<a href="/episodes/3">{{ __('messages.3yal') }}</a>
				<a href="/episodes/4">{{ __('messages.world') }}</a>
				<a href="/episodes/229">{{ __('messages.hamadai') }}</a>
			</div>
		</span>
		<span class="nav-item">
			{{ __('messages.media') }}
			<div class="menu-dropdown">
				<a href="/episodes/6">{{ __('messages.movies') }}</a>
				<a href="/episodes/7">{{ __('messages.tvinterviews') }}</a>
				<a href="/episodes/8">{{ __('messages.tvcourse') }}</a>
				<a href="/episodes/9">{{ __('messages.toastmasters') }}</a>
			</div>
		</span>
		<a class="nav-item" href="/episodes/5" aria-label="travel">
			{{ __('messages.travel') }}
		</a>
		<a class="nav-item" href="{{ request()->path() == '/' ? '#photos' : '/#photos' }}" aria-label="photos">
			{{ __('messages.photos') }}
		</a>
		<a class="nav-item" href="/articles" aria-label="articles">
			{{ __('messages.articles') }}
		</a>
		<a class="nav-item" href="{{ request()->path() == '/' ? '#contact' : '/#contact' }}" aria-label="contact">
			{{ __('messages.contact') }}
		</a>
	</div>
@endif
@props(['type' => 'desktop', 'highlight' => 'about'])

@if($type == 'desktop')
	<div class="navlinks d-none d-lg-flex flex-row justify-content-between align-items-center" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
		<a class="nav-item {{ $highlight == 'about' ? 'active' : '' }}" href="{{ request()->path() == '/' ? '#about' : '/#about' }}" aria-label="about">
			{{ __('messages.aboutsection') }}
		</a>
		<span class="nav-item {{ str_contains($highlight, 'contentcreation') ? 'active' : '' }}" aria-label="contentcreation">
			{{ __('messages.contentcreation') }}
			<div class="menu-dropdown">
				<a class="subnav {{ $highlight == 'contentcreation1' ? 'active' : '' }}" href="/episodes/2">{{ __('messages.imaps') }}</a>
				<a class="subnav {{ $highlight == 'contentcreation2' ? 'active' : '' }}" href="/episodes/3">{{ __('messages.3yal') }}</a>
				<a class="subnav {{ $highlight == 'contentcreation3' ? 'active' : '' }}" href="/episodes/4">{{ __('messages.world') }}</a>
				<a class="subnav {{ $highlight == 'contentcreation4' ? 'active' : '' }}" href="/episodes/229">{{ __('messages.hamadai') }}</a>
			</div>
		</span>
		<span class="nav-item {{ str_contains($highlight, 'media') ? 'active' : '' }}">
			{{ __('messages.media') }}
			<div class="menu-dropdown">
				<a class="subnav {{ $highlight == 'media1' ? 'active' : '' }}" href="/episodes/6">{{ __('messages.movies') }}</a>
				<a class="subnav {{ $highlight == 'media2' ? 'active' : '' }}" href="/episodes/7">{{ __('messages.tvinterviews') }}</a>
				<a class="subnav {{ $highlight == 'media3' ? 'active' : '' }}" href="/episodes/8">{{ __('messages.tvcourse') }}</a>
				<a class="subnav {{ $highlight == 'media4' ? 'active' : '' }}" href="/episodes/9">{{ __('messages.toastmasters') }}</a>
			</div>
		</span>
		<a class="nav-item {{ $highlight == 'travel' ? 'active' : '' }}" href="/episodes/5" aria-label="travel">
			{{ __('messages.travel') }}
		</a>
		<a class="nav-item {{ $highlight == 'photos' ? 'active' : '' }}" href="/gallery" aria-label="photos">
			{{ __('messages.photos') }}
		</a>
		<a class="nav-item {{ $highlight == 'articles' ? 'active' : '' }}" href="/articles" aria-label="articles">
			{{ __('messages.articles') }}
		</a>
		<a class="nav-item {{ $highlight == 'contact' ? 'active' : '' }}" href="#contact" aria-label="contact">
			{{ __('messages.contact') }}
		</a>
	</div>
@else
	<div class="mobile-navlinks d-flex d-lg-none flex-column justify-content-between gap-1" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
		<a class="nav-item {{ $highlight == 'about' ? 'active' : '' }}" href="{{ request()->path() == '/' ? '#about' : '/#about' }}" aria-label="about">
			{{ __('messages.aboutsection') }}
		</a>
		<span class="nav-item {{ str_contains($highlight, 'contentcreation') ? 'active' : '' }}" aria-label="contentcreation">
			{{ __('messages.contentcreation') }}
			<div class="menu-dropdown">
				<a class="subnav {{ $highlight == 'contentcreation1' ? 'active' : '' }}" href="/episodes/2">{{ __('messages.imaps') }}</a>
				<a class="subnav {{ $highlight == 'contentcreation2' ? 'active' : '' }}" href="/episodes/3">{{ __('messages.3yal') }}</a>
				<a class="subnav {{ $highlight == 'contentcreation3' ? 'active' : '' }}" href="/episodes/4">{{ __('messages.world') }}</a>
				<a class="subnav {{ $highlight == 'contentcreation4' ? 'active' : '' }}" href="/episodes/229">{{ __('messages.hamadai') }}</a>
			</div>
		</span>
		<span class="nav-item {{ str_contains($highlight, 'media') ? 'active' : '' }}">
			{{ __('messages.media') }}
			<div class="menu-dropdown">
				<a class="subnav {{ $highlight == 'media1' ? 'active' : '' }}" href="/episodes/6">{{ __('messages.movies') }}</a>
				<a class="subnav {{ $highlight == 'media2' ? 'active' : '' }}" href="/episodes/7">{{ __('messages.tvinterviews') }}</a>
				<a class="subnav {{ $highlight == 'media3' ? 'active' : '' }}" href="/episodes/8">{{ __('messages.tvcourse') }}</a>
				<a class="subnav {{ $highlight == 'media4' ? 'active' : '' }}" href="/episodes/9">{{ __('messages.toastmasters') }}</a>
			</div>
		</span>
		<a class="nav-item {{ $highlight == 'travel' ? 'active' : '' }}" href="/episodes/5" aria-label="travel">
			{{ __('messages.travel') }}
		</a>
		<a class="nav-item {{ $highlight == 'photos' ? 'active' : '' }}" href="/gallery" aria-label="photos">
			{{ __('messages.photos') }}
		</a>
		<a class="nav-item {{ $highlight == 'articles' ? 'active' : '' }}" href="/articles" aria-label="articles">
			{{ __('messages.articles') }}
		</a>
		<a class="nav-item {{ $highlight == 'contact' ? 'active' : '' }}" href="{{ request()->path() == '/' ? '#contact' : '/#contact' }}" aria-label="contact">
			{{ __('messages.contact') }}
		</a>
	</div>
@endif
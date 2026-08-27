@props(['type' => 'desktop'])

@if($type == 'desktop')
	<div class="navlinks d-none d-lg-flex flex-row justify-content-between align-items-center" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
		<a class="nav-item active" href="#about" aria-label="about">
			{{ __('messages.aboutsection') }}
		</a>
		<a class="nav-item" href="#media" aria-label="media">
			{{ __('messages.media') }}
		</a>
		<a class="nav-item" href="#travel" aria-label="travel">
			{{ __('messages.travel') }}
		</a>
		<a class="nav-item" href="#contentcreation" aria-label="contentcreation">
			{{ __('messages.contentcreation') }}
		</a>
		<a class="nav-item" href="#photos" aria-label="photos">
			{{ __('messages.photos') }}
		</a>
		<a class="nav-item" href="#articles" aria-label="articles">
			{{ __('messages.articles') }}
		</a>
		<a class="nav-item" href="#contact" aria-label="contact">
			{{ __('messages.contact') }}
		</a>
	</div>
@else
	<div class="mobile-navlinks d-flex flex-column justify-content-between gap-1 align-items-start">
		<a class="nav-item active" href="#about" aria-label="about">
			{{ __('messages.about') }}
		</a>
		<a class="nav-item" href="#videos" aria-label="videos">
			{{ __('messages.videos') }}
		</a>
		<a class="nav-item" href="#photos" aria-label="photos">
			{{ __('messages.photos') }}
		</a>
		<a class="nav-item" href="#articles" aria-label="articles">
			{{ __('messages.articles') }}
		</a>
		<a class="nav-item" href="#contact" aria-label="contact">
			{{ __('messages.contact') }}
		</a>
	</div>
@endif
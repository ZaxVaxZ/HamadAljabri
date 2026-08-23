@props(['type' => 'desktop'])

@if($type == 'desktop')
	<div class="navlinks d-none d-md-flex flex-row justify-content-between gap-4 align-items-center">
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
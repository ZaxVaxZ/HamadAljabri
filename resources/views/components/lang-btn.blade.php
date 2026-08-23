@props(['ret' => 'false'])

@php
        $appUrl = config('app.url');
        $baseDomain = parse_url($appUrl, PHP_URL_HOST);
        $scheme = parse_url($appUrl, PHP_URL_SCHEME);
@endphp

<a href="{{ $scheme }}://{{ app()->getLocale() == 'ar' ? 'en.' : ''  }}{{ $baseDomain . ($ret == 'true' ? '' : request()->getRequestUri())  }}" class="lang-btn" aria-label="{{ __('messages.switchlang') }}">
	<i class="bi bi-globe"></i> {{ __('messages.lang') }}
</a>
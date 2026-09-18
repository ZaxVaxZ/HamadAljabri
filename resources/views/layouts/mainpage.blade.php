@props(['langret' => 'false', 'darkfoot' => 'false', 'highlight' => 'about'])

<!doctype html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="{{ __('messages.name') }}">
        <meta name="description" content="{{ __('messages.description') }}">

		<link rel="icon" href="{{ asset('favicon.png') }}" sizes="any">
		<link rel="apple-touch-icon" href="{{ asset('favicon.png') }}">
		<title>{{ __('messages.name') }}</title>

			<!-- Open Graph / Facebook -->
		<meta property="og:site_name" content="{{ __('messages.name') }}">
		<meta property="og:title" content="{{ __('messages.name') }}">
		<meta property="og:url" content="{{ request()->url() }}">
		<meta property="og:type" content="website">
		<meta property="og:description" content="{{ __('messages.description') }}">
		<meta property="og:image" content="{{ Storage::url('images/SiteImage.png') }}">
		<meta property="og:image:width" content="630">
		<meta property="og:image:height" content="630">

		<!-- Twitter Card -->
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:url" content="{{ request()->url() }}">
		<meta name="twitter:title" content="{{ __('messages.name') }}">
		<meta name="twitter:description" content="{{ __('messages.description') }}">
		<meta name="twitter:image" content="{{ Storage::url('images/SiteImage.png') }}">

		<script type="application/ld+json">
			{
				"@context": "https://schema.org",
				"@type": "WebSite",
				"name": "{{ __('messages.name') }}",
				"url": "{{ url('/') }}"
			}
		</script>
		<script type="application/ld+json">
			{
				"@context": "https://schema.org",
				"@type": "Person",
				"name": "{{ __('messages.name') }}",
				"url": "{{ url('/') }}",
				"image": "{{ Storage::url('images/SiteImage.png') }}",
				"jobTitle": "…",
				"sameAs": [
					"https://facebook.com/hamad.aljabri",
					"https://instagram.com/hamad_al_jabri",
					"https://x.com/Hamad_AL_Jabri",
				]
			}
		</script>

		<link rel="canonical" href="{{ request()->url() }}">
		<link rel="alternate" hreflang="en" href="https://en.hamadaljabri.com{{ request()->getRequestUri() }}">
		<link rel="alternate" hreflang="ar" href="https://ar.hamadaljabri.com{{ request()->getRequestUri() }}">
		<link rel="alternate" hreflang="x-default" href="https://hamadaljabri.com{{ request()->getRequestUri() }}">
	
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>        
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

		@livewireStyles
		@vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    
    <body>

        <x-navbar :highlight="$highlight" />

        <main>
			{{ $slot }}
        </main>

		<button id="backToTop" class="back-to-top" aria-label="{{ __('messages.backtotop') }}" title="{{ __('messages.backtotop') }}">
			<i class="fas fa-arrow-up"></i>
		</button>

		<x-footer dark="{{ $darkfoot }}" />

		@livewireScripts
    </body>
</html>
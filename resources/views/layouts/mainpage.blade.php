@props(['langret' => 'false', 'darkfoot' => 'false', 'highlight' => 'about'])

<!doctype html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="{{ __('messages.name') }}">
        <meta name="description" content="{{ __('messages.description') }}">

		<link rel="icon" type="image/svg+xml" href="{{ asset('logo.svg') }}">
		<link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">
		<link rel="apple-touch-icon" href="{{ asset('logo.png') }}">
		<title>{{ __('messages.name') }}</title>

			<!-- Open Graph / Facebook -->
		<meta property="og:site_name" content="{{ __('messages.name') }}">
		<meta property="og:title" content="{{ __('messages.name') }}">
		<meta property="og:url" content="{{ request()->url() }}">
		<meta property="og:type" content="website">
		<meta property="og:description" content="{{ __('messages.description') }}">
		<meta property="og:image" content="{{ asset('assets/images/SelfImage.jpeg') }}">
		<meta property="og:image:width" content="630">
		<meta property="og:image:height" content="630">

		<!-- Twitter Card -->
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:url" content="{{ request()->url() }}">
		<meta name="twitter:title" content="{{ __('messages.name') }}">
		<meta name="twitter:description" content="{{ __('messages.description') }}">
		<meta name="twitter:image" content="{{ asset('assets/images/SelfImage.jpeg') }}">

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

		<x-footer dark="{{ $darkfoot }}" />

		@livewireScripts
    </body>
</html>
@props(['dark' => 'false'])

@php
	$pointersAR = [
		'صانع محتوى',
		'مدرب رياضي',
		'مغامر ورحالة',
		'متخصص في دول أمريكا اللاتينية',
		'متحدث تحفيزي',
		'دكتوراه في الذكاء الاصطناعي',
		'رسالتي: عالم متسامح'
	];
	$pointersEN = [
		'Content Creator',
		'Sports Coach',
		'Traveler and Adventurer',
		'Specialized in Latin American Countries',
		'Motivational Speaker',
		'PhD in A.I',
		'My Message: Peaceful Coexistence'
	];
	if(app()->getLocale() == 'ar')
		$pointers = $pointersAR;
	else
		$pointers = $pointersEN;
@endphp

<footer class="site-footer {{ $dark == 'true' ? 'dark' : '' }}">
	<div class="container">
		<div class="row align-items-center">

			<div id="aboutme" class="col-lg-5 col-md-7 col-12" style="{{ app()->getLocale() == 'ar' ? 'padding-left: 60px;' : 'padding-right: 100px;' }}">
				<div>
					<p id="footertitle">{{ __('messages.name') }}</p>
					<ul>
						@foreach ($pointers as $pointer)
							<li>{{ $pointer }}</li>
						@endforeach
					</ul>
				</div>
			</div>

			<div id="contact" class="socials col-lg-4 col-md-5 col-12" dir="ltr" style="{{ app()->getLocale() == 'ar' ? 'padding-left: 150px;' : '' }}">
				<div class="d-flex flex-column">
					<a href="mailto:hamad.aljabri.uae@gmail.com" class="d-flex flex-row align-items-center mb-3 text-white" aria-label="{{ __('messages.contactwith') }} {{ __('messages.name')  }} Email">
						<i class="footer-icon fa-solid fa-envelope"></i>
						<span style="font-size: 18px; text-align: left;">hamad.aljabri.uae@gmail.com</span>
					</a>
					<a target="_blank" href="https://facebook.com/hamad.aljabri" class="d-flex flex-row align-items-center mb-3 text-white" aria-label="{{ __('messages.contactwith') }} {{ __('messages.name')  }} Facebook">
						<i class="footer-icon fa-brands fa-square-facebook"></i>
						<span style="font-size: 18px; text-align: left;">hamad.aljabri</span>
					</a>
					<a target="_blank" href="https://instagram.com/hamad_al_jabri" class="d-flex flex-row align-items-center mb-3 text-white" aria-label="{{ __('messages.contactwith') }} {{ __('messages.name')  }} Instagram">
						<i class="footer-icon fa-brands fa-instagram"></i>
						<span style="font-size: 18px; text-align: left;">hamad_al_jabri</span>
					</a>
					<a target="_blank" href="https://x.com/Hamad_AL_Jabri" class="d-flex flex-row align-items-center mb-3 text-white" aria-label="{{ __('messages.contactwith') }} {{ __('messages.name')  }} Twitter">
						<i class="footer-icon fa-brands fa-x"></i>
						<span style="font-size: 18px; text-align: left;">Hamad_AL_Jabri</span>
					</a>
				</div>
			</div>

				
			<div id="rights" class="col-12 col-lg-3 mt-4">
				<p>
					{{ __('messages.copyright') }}2026{{ now()->year != 2026 ? ' - ' . now()->year : '' }} {{ __('messages.name') }}
					<br>
					{{ __('messages.rights') }}
				</p>
			</div>
		</div>
	</div>
</footer>

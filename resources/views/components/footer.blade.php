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

<footer class="site-footer">
	<div class="container">
		<div class="row align-items-center">

			<div id="aboutme" class="col-lg-5 col-12" style="{{ app()->getLocale() == 'ar' ? 'padding-left: 60px;' : 'padding-right: 100px;' }}">
				<div class="d-col align-items-center">
					<p id="footertitle">{{ __('messages.name') }}</p>
					<ul>
						@foreach ($pointers as $pointer)
							<li>{{ $pointer }}</li>
						@endforeach
					</ul>
				</div>
			</div>

			<div id="socials" class="col-lg-4 col-md-6 col-12" style="{{ app()->getLocale() == 'ar' ? 'padding-right: 30px;' : 'padding-left: 40px;' }}">
				<div class="col">
					{{--<a href="mailto:osama@osamakadi.com" class="d-flex flex-row align-items-center mb-4 text-white" aria-label="{{ __('messages.contactwith') }} {{ __('messages.name')  }} Email">
						<i class="fa-solid fa-envelope"></i>
						<span style="font-size: 18px;"><strong>osama@osamakadi.com</strong></span>
					</a>--}}
					<a target="_blank" href="https://facebook.com/hamad.aljabri" class="d-flex flex-row align-items-center mb-4 text-white" aria-label="{{ __('messages.contactwith') }} {{ __('messages.name')  }} Facebook">
						<i class="fa-brands fa-square-facebook"></i>
						<span style="font-size: 18px;"><strong>@hamad.aljabri</strong></span>
					</a>
					<a target="_blank" href="https://instagram.com/hamad_al_jabri" class="d-flex flex-row align-items-center mb-4 text-white" aria-label="{{ __('messages.contactwith') }} {{ __('messages.name')  }} Instagram">
						<i class="fa-brands fa-instagram"></i>
						<span style="font-size: 18px;"><strong>@hamad_al_jabri</strong></span>
					</a>
					<a target="_blank" href="https://x.com/Hamad_AL_Jabri" class="d-flex flex-row align-items-center mb-4 text-white" aria-label="{{ __('messages.contactwith') }} {{ __('messages.name')  }} Twitter">
						<i class="fa-brands fa-x"></i>
						<span style="font-size: 18px;"><strong>@Hamad_AL_Jabri</strong></span>
					</a>
				</div>
			</div>

				
			<div id="rights" class="col-lg-3 col-md-6 col-12">
				<p>
					{{ __('messages.copyright') }}2026{{ now()->year != 2026 ? ' - ' . now()->year : '' }} {{ __('messages.name') }}
					<br>
					{{ __('messages.rights') }}
				</p>
			</div>
		</div>
	</div>
</footer>

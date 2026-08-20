<footer id="footer" class="site-footer">
	<div class="container">
		<div class="row align-items-center">

			<div id="aboutme" class="col-lg-5 col-12" style="{{ app()->getLocale() == 'ar' ? 'padding-left: 60px;' : 'padding-right: 100px;' }}">
				<div class="d-col align-items-center">
					<p id="footertitle">{{ __('messages.name') }}</p>
					<p>{{ __('messages.footerabout') }}</p>
				</div>
			</div>

			<div id="socials" class="col-lg-4 col-md-6 col-12" style="{{ app()->getLocale() == 'ar' ? 'padding-right: 30px;' : 'padding-left: 40px;' }}">
				<div class="col">
					<a href="mailto:osama@hamadaljabri.com" class="d-flex flex-row align-items-center mb-2 text-white" aria-label="{{ __('messages.contactwith') }} {{ __('messages.name')  }} Email">
						<i class="fa-solid fa-envelope"></i>
						<span style="font-size: 18px;"><strong>osama@hamadaljabri.com</strong></span>
					</a>
					<a target="_blank" href="https://youtube.com/@hamadaljabri2064" class="d-flex flex-row align-items-center mb-2 text-white" aria-label="{{ __('messages.name')  }} Youtube">
						<i class="fa-brands fa-youtube"></i>
						<span style="font-size: 18px;"><strong>@hamadaljabri2064</strong></span>
					</a>
					<a target="_blank" href="https://facebook.com/osama.kadi.94" class="d-flex flex-row align-items-center mb-2 text-white" aria-label="{{ __('messages.contactwith') }} {{ __('messages.name')  }} Facebook">
						<i class="fa-brands fa-square-facebook"></i>
						<span style="font-size: 18px;"><strong>@osama.kadi.94</strong></span>
					</a>
					<a target="_blank" href="https://instagram.com/okadi_econ" class="d-flex flex-row align-items-center mb-2 text-white" aria-label="{{ __('messages.contactwith') }} {{ __('messages.name')  }} Instagram">
						<i class="fa-brands fa-instagram"></i>
						<span style="font-size: 18px;"><strong>@okadi_econ</strong></span>
					</a>
					<a target="_blank" href="https://x.com/osama_kadi_" class="d-flex flex-row align-items-center mb-2 text-white" aria-label="{{ __('messages.contactwith') }} {{ __('messages.name')  }} Twitter">
						<i class="fa-brands fa-x"></i>
						<span style="font-size: 18px;"><strong>@osama_kadi_</strong></span>
					</a>
					<a target="_blank" href="https://tiktok.com/osama_kadi" class="d-flex flex-row align-items-center mb-2 text-white" aria-label="{{ __('messages.contactwith') }} {{ __('messages.name')  }} Tiktok">
						<i class="fa-brands fa-tiktok"></i>
						<span style="font-size: 18px;"><strong>@osama_kadi</strong></span>
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

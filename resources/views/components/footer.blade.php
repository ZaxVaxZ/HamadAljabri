<footer class="site-footer">
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

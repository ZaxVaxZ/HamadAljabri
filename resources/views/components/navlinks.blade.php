@props(['type' => 'desktop'])

@if($type == 'desktop')
	<div class="navlinks d-none d-lg-flex flex-row justify-content-between align-items-center" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
		<a class="nav-item active" href="#about" aria-label="about">
			{{ __('messages.aboutsection') }}
		</a>
		<span class="nav-item" href="#contentcreation" aria-label="contentcreation">
			{{ __('messages.contentcreation') }}
			<div class="menu-dropdown">
				<a href="#imaps">خرائط i</a>
				<a href="#3yal">عيال زايد</a>
				<a href="#world">عالم حمد</a>
				<a href="#hamadai">حمد والذكاء الاصطناعي</a>
			</div>
		</span>
		<span class="nav-item">
			{{ __('messages.media') }}
			<div class="menu-dropdown">
				<a href="#movies">الأفلام التجريبية</a>
				<a href="#interviews">المقابلات التلفزيونية</a>
				<a href="#tvcourse">الدورة التلفزيونية التدريبية</a>
				<a href="#toast">التوستماستر</a>
			</div>
		</span>
		<a class="nav-item" href="#travels" aria-label="travel">
			{{ __('messages.travel') }}
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
	<div class="mobile-navlinks d-flex flex-column justify-content-between gap-1 align-items-start" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
		<a class="nav-item active" href="#about" aria-label="about">
			{{ __('messages.aboutsection') }}
		</a>
		<a class="nav-item" href="#contentcreation" aria-label="contentcreation">
			{{ __('messages.contentcreation') }}
		</a>
		<span class="nav-item">
			{{ __('messages.media') }}
			<div class="menu-dropdown">
				<a>الأفلام التجريبية</a>
				<a>المقابلات التلفزيونية</a>
				<a>التوستماستر</a>
				<a>الدورة التلفزيونية التدريبية</a>
			</div>
		</span>
		<a class="nav-item" href="#travel" aria-label="travel">
			{{ __('messages.travel') }}
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
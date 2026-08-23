<div class="navbar align-items-start" dir="ltr">
	<div class="col-11 col-md-2" style="padding: 0;">
		<a class="logo-text" href="/">HAMAD</a>
	</div>
	<div class="col-8 d-none d-md-flex flex-row justify-content-center" style="padding: 0;">
		<x-navlinks />
	</div>
	<div class="col-2 d-none d-md-flex flex-row justify-content-end" style="padding: 0;">
		<x-lang-btn />
	</div>
	<div class="navmenu-bars col-1 d-flex d-md-none justify-content-center align-items-center">
		<button
			class="menu-toggle"
			type="button"
			aria-expanded="false"
			aria-controls="mobile-menu">
			<span></span>
			<span></span>
			<span></span>
		</button>
	</div>
	<div id="mobile-menu" class="mobile-menu">
		<x-navlinks type="mobile" />
	</div>
</div>
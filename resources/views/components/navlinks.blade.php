@props(['type' => 'desktop'])

@if($type == 'desktop')
	<div class="navlinks d-none d-md-flex flex-row justify-content-between gap-4 align-items-center">
		<a class="nav-item active" href="#about" aria-label="about">
			About
		</a>
		<a class="nav-item" href="#videos" aria-label="videos">
			Videos
		</a>
		<a class="nav-item" href="#photos" aria-label="photos">
			Photos
		</a>
		<a class="nav-item" href="#articles" aria-label="articles">
			Articles
		</a>
	</div>
@else
	<div class="mobile-navlinks d-flex flex-column justify-content-between gap-1 align-items-start">
		<a class="nav-item active" href="#about" aria-label="about">
			About
		</a>
		<a class="nav-item" href="#videos" aria-label="videos">
			Videos
		</a>
		<a class="nav-item" href="#photos" aria-label="photos">
			Photos
		</a>
		<a class="nav-item" href="#articles" aria-label="articles">
			Articles
		</a>
		<button class="contact-btn">
			Contact
		</button>
	</div>
@endif
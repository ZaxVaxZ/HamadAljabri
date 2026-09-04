@props(['pointers'])

<section id="about" class="about-section">
	<div class="d-block d-lg-flex">
		<div class="about-right col-12 col-lg-5">
			<ul class="scroll-list">
				@foreach($pointers as $pointer)
					<li class="scroll-item" style="--i: {{ $loop->index }};">
						{{ $pointer }}
					</li>
				@endforeach
			</ul>
		</div>
		<div class="about-left col-12 col-lg-7 d-flex flex-row justify-content-center" style="{{ app()->getLocale() == 'ar' ? 'transform: scaleX(-1);' : '' }}">
			<div class="self-bg"></div>
			<img class="self-fg" src="{{ Storage::url('images/HamadNoBg.png') }}" />
		</div>
	</div>
</section>
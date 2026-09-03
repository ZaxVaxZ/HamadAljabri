@props(['s1', 's2', 's3'])

<!--
	============================================================
	SCROLL-FLIP BOOK — accurate curl port
  
	Usage:
	- .scrollflip wraps everything; set --scroll-per-page inline to
	  tune flip speed.
	- .pf-stage-outer / .pf-stage hold the fixed 680x480 reference
	  geometry; set --pf-scale on .pf-stage-outer to resize uniformly.
	- Each .pf-window is one page flip. Stack as many as you like —
	  the JS counts them (in DOM order = flip order) and assigns
	  z-index / --pf-progress automatically. Give each one a unique
	  data-pf-window index (0, 1, 2, ...).
	- Content lives in THREE places per window, all with the same
	  .pf-page-content  dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}"markup:
		1) .pf-canvas-inner--front  — the flap as it starts turning
		2) .pf-canvas-inner--back   — the flap's other side, visible
									   partway through the turn
		3) .pf-page-face            — the static face underneath,
									   fully revealed once the flap
									   has cleared
	  Because the flap's net rotation is always 0deg (the outer
	  swing and inner counter-rotation cancel out), text on the
	  flap layers stays upright throughout the motion instead of
	  popping in at the end. Keep the text identical across all
	  three so there's never a visible swap.
	- Requires scroll-flipbook.css and scroll-flipbook.js.
	============================================================
  -->
  <section class="book-section scrollflip" style="--scroll-per-page:80vh;" dir="ltr">
	<div class="scrollflip__pin">
	  <div class="pf-stage-outer">
		<div class="pf-stage">
  
		  <!-- Page 1 (flips first) -->
		  <div class="pf-window" data-pf-window="0">
			<div class="pf-r pf-r--front">
			  <div class="pf-canvas">
				<div class="pf-canvas-inner--front">
				  <div class="pf-page-content" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
					<span class="pf-kicker">Page 1</span>
					<h3 class="pf-heading">Start scrolling</h3>
					<p class="pf-text">This is the face revealed once the first flip completes.</p>
				  </div>
				  <div class="pf-edge-fade"></div>
				</div>
			  </div>
			</div>
  
			<div id="travels" class="pf-r pf-r--back">
			  <div class="pf-canvas">
				<div class="pf-canvas-inner--back">
				  <div class="pf-page-content" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
					{{--<span class="pf-kicker">Page 2</span>--}}
					<h3 class="pf-heading">{{ $s1->title }}</h3>
					<p class="pf-text">{{ $s1->description }}</p>
					<a href="/episodes/{{ $s1->content }}" class="pf-kicker">{{ __('messages.watchonyoutube') }}</a>
				  </div>
				  <div class="pf-edge-fade pf-edge-fade--right"></div>
				</div>
			  </div>
			</div>
  
			<div class="pf-page-face">
			  <div class="pf-page-content" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
				<span class="pf-kicker">Page 3</span>
				<h3 class="pf-heading">Keep scrolling</h3>
				<p class="pf-text">Revealed after the first flip.</p>
			  </div>
			</div>
  
			<div class="pf-shadow pf-shadow--s3">
			  <div class="pf-shadow-gradient pf-shadow-gradient--sp3"></div>
			</div>
			<div class="pf-shadow pf-shadow--s4">
			  <div class="pf-shadow pf-shadow--s2">
				<div class="pf-shadow-gradient pf-shadow-gradient--sp2"></div>
			  </div>
			</div>
		  </div>
  
		  <!-- Page 2 -->
		  <div class="pf-window" data-pf-window="1">
			<div class="pf-r pf-r--front">
			  <div class="pf-canvas">
				<div class="pf-canvas-inner--front">
				  <div class="pf-page-content" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
					{{--<span class="pf-kicker">Page 3</span>
					<h3 class="pf-heading">Keep scrolling</h3>
					<p class="pf-text">Revealed after the first flip.</p>--}}
					<img class="pf-img" src="{{ Storage::url($s1->thumbnail) }}" />
				  </div>
				  <div class="pf-edge-fade"></div>
				</div>
			  </div>
			</div>
  
			<div id="tvcourse" class="pf-r pf-r--back">
			  <div class="pf-canvas">
				<div class="pf-canvas-inner--back">
				  <div class="pf-page-content" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
					<h3 class="pf-heading">{{ $s2->title }}</h3>
					<p class="pf-text">{{ $s2->description }}</p>
					<a href="/episodes/{{ $s2->content }}" class="pf-kicker">{{ __('messages.watchonyoutube') }}</a>
				  </div>
				  <div class="pf-edge-fade pf-edge-fade--right"></div>
				</div>
			  </div>
			</div>
  
			<div class="pf-page-face">
			  <div class="pf-page-content" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
				{{--<span class="pf-kicker">Page 5</span>
					<h3 class="pf-heading">Last flip</h3>
					<p class="pf-text">After this, normal page scrolling resumes.</p>--}}
					<img class="pf-img" src="{{ Storage::url($s2->thumbnail) }}" />
			  </div>
			</div>
  
			<div class="pf-shadow pf-shadow--s3">
			  <div class="pf-shadow-gradient pf-shadow-gradient--sp3"></div>
			</div>
			<div class="pf-shadow pf-shadow--s4">
			  <div class="pf-shadow pf-shadow--s2">
				<div class="pf-shadow-gradient pf-shadow-gradient--sp2"></div>
			  </div>
			</div>
		  </div>
  
		  <!-- Page 3 (flips last) -->
		  <div class="pf-window" data-pf-window="2">
			<div class="pf-r pf-r--front">
			  <div class="pf-canvas">
				<div class="pf-canvas-inner--front">
				  <div class="pf-page-content" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
					{{--<span class="pf-kicker">Page 5</span>
						<h3 class="pf-heading">Last flip</h3>
						<p class="pf-text">After this, normal page scrolling resumes.</p>--}}
						<img class="pf-img" src="{{ Storage::url($s2->thumbnail) }}" />
				  </div>
				  <div class="pf-edge-fade"></div>
				</div>
			  </div>
			</div>
  
			<div id="toast" class="pf-r pf-r--back">
			  <div class="pf-canvas">
				<div class="pf-canvas-inner--back">
				  <div class="pf-page-content" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
					<h3 class="pf-heading">{{ $s3->title }}</h3>
					<p class="pf-text">{{ $s3->description }}</p>
					<a href="/episodes/{{ $s3->content }}" class="pf-kicker">{{ __('messages.watchonyoutube') }}</a>
				  </div>
				  <div class="pf-edge-fade pf-edge-fade--right"></div>
				</div>
			  </div>
			</div>
  
			<div class="pf-page-face">
			  <div class="pf-page-content" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
				{{--<span class="pf-kicker">Page 7</span>
				<h3 class="pf-heading">Last flip</h3>
				<p class="pf-text">After this, normal page scrolling resumes.</p>--}}
				<img class="pf-img moved" src="{{ Storage::url($s3->thumbnail) }}" />
			  </div>
			</div>
  
			<div class="pf-shadow pf-shadow--s3">
			  <div class="pf-shadow-gradient pf-shadow-gradient--sp3"></div>
			</div>
			<div class="pf-shadow pf-shadow--s4">
			  <div class="pf-shadow pf-shadow--s2">
				<div class="pf-shadow-gradient pf-shadow-gradient--sp2"></div>
			  </div>
			</div>
		  </div>
  
		</div>
	  </div>
	</div>
  </section>
  
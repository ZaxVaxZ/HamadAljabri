const toggle = document.querySelector('.menu-toggle');
const menu = document.getElementById('mobile-menu');

toggle.addEventListener('click', () => {
    const isOpen = toggle.classList.toggle('active');

    menu.classList.toggle('active', isOpen);

    toggle.setAttribute('aria-expanded', isOpen);
});
/*
  Generic controller for any number of .scrollflip sections on the page.
  For each .scrollflip:
    - reads its .pf-window children (in DOM order = flip order)
    - sizes the wrapper's scroll height to (windowCount * --scroll-per-page)
      so the section is pinned for exactly that much scroll distance
    - on scroll, computes 0..1 progress per window, writes it to that
      window's --pf-progress custom property (CSS does the actual curl
      interpolation via calc()), and drops a finished window's z-index
      so the next one underneath becomes visible
*/
(function () {
  function pxFromCss(value, refEl) {
    var probe = document.createElement('div');
    probe.style.position = 'absolute';
    probe.style.visibility = 'hidden';
    probe.style.height = value;
    (refEl || document.body).appendChild(probe);
    var px = probe.getBoundingClientRect().height;
    probe.remove();
    return px;
  }

  function initFlipbook(section) {
    var windows = Array.prototype.slice.call(section.querySelectorAll('.pf-window'));
    var n = windows.length - 1;
    if (!n) return;

    var reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (reduced) {
      // settle into the fully-flipped resting state, no scroll hijacking
      windows.forEach(function (w, i) {
        w.style.setProperty('--pf-progress', 1);
        w.style.zIndex = i === n - 1 ? n - i : -1;
      });
      return;
    }

    function scrollPerPageInPx() {
      var val = getComputedStyle(section).getPropertyValue('--scroll-per-page').trim() || '70vh';
      return pxFromCss(val, section);
    }

    function layout() {
      var perPage = scrollPerPageInPx();
      var totalScroll = perPage * n + window.innerHeight;
      section.style.height = totalScroll + 'px';
    }

    function update() {
      var rect = section.getBoundingClientRect();
      var perPage = scrollPerPageInPx();
      var totalFlipDistance = perPage * n;

      var scrolled = -rect.top;
      if (scrolled < 0) scrolled = 0;
      if (scrolled > totalFlipDistance) scrolled = totalFlipDistance;
	  scrolled += perPage;

      var globalProgress = scrolled / perPage; // 0..n across all windows

      windows.forEach(function (w, i) {
        var p = globalProgress - i;
        if (p < 0) p = 0;
        if (p > 1) p = 1;
        w.style.setProperty('--pf-progress', p);
        // stack order: normal descending z-index while not yet finished;
        // once a window has fully flipped, drop it below everything so
        // the next window in the stack becomes visible
        w.style.zIndex = p >= 1 ? -1 : (n - i);
      });
    }

    var ticking = false;
    function onScroll() {
      if (!ticking) {
        requestAnimationFrame(function () { update(); ticking = false; });
        ticking = true;
      }
    }

    layout();
    update();
    window.addEventListener('scroll', onScroll, { passive: true });
    window.addEventListener('resize', function () { layout(); update(); });
  }

  document.querySelectorAll('.scrollflip').forEach(initFlipbook);
})();

document.addEventListener('DOMContentLoaded', () => {
	const items = Array.from(document.querySelectorAll('.scroll-list li'));
	if (!items.length) return;

	// --- Config, mapped from your original CSS ---
	const COVER_END   = 0.70;   // "cover 22%" — fully revealed once element reaches 22% from top
	const ENTRY_START = 0.90;   // "entry 90%" — trigger begins when element hits 90% down the viewport
	const STAGGER_VH  = 0.02;   // per-item delay, expressed as a % of viewport height (tune to taste)
	const TRAVEL_PX   = 50;     // matches translateX(-50px)

	let ticking = false;

	function clamp(v, min, max) {
		return Math.max(min, Math.min(max, v));
	}

	function update() {
		const vh = window.innerHeight;
		const coverEndPx = vh * COVER_END;
		const entryStartPx = vh * ENTRY_START;

		items.forEach((el, i) => {
			// shift each item's effective range slightly later, simulating animation-delay
			const staggerPx = vh * STAGGER_VH * i;

			const rect = el.getBoundingClientRect();
			const top = rect.top - staggerPx;
			const bot = entryStartPx - staggerPx;

			// progress: 0 when top is at entryStartPx, 1 when top is at coverEndPx
			const raw = (bot - top) / (bot - coverEndPx);
			const progress = clamp(raw, 0, 1);

			// ease similarly to "linear" in your original (keep linear, or swap easing below)
			const eased = progress;

			el.style.opacity = eased;
			el.style.transform = `translateX(${-TRAVEL_PX * (1 - eased)}px)`;
		});

		ticking = false;
	}

	function onScroll() {
		if (!ticking) {
			requestAnimationFrame(update);
			ticking = true;
		}
	}

	window.addEventListener('scroll', onScroll, { passive: true });
	window.addEventListener('resize', onScroll);
	update(); // run once on load in case items are already in range
});
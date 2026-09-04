import * as bootstrap from 'bootstrap';
import '../js/main.js';

window.bootstrap = bootstrap;

const docModal = document.getElementById('photoModal');

if (docModal) {
	const photoModal = new bootstrap.Modal(document.getElementById('photoModal'));

	window.openPhoto = function(card){
		document.getElementById('modalImage').src =
			card.dataset.image;

		document.getElementById('modalTitle').textContent =
			card.dataset.title;

		photoModal.show();
	}
}

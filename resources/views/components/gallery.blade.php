@props(['photos'])

<div class="gallery row" dir="rtl">
	<div class="col-6 col-lg-3 d-flex flex-column" style="padding: 0 3px 0 3px;">
		@for($i = 0; $i < count($photos); $i += 4)
			<div class="flip-card" data-image="{{ Storage::url($photos[$i]->thumbnail) }}" data-title="{{ $photos[$i]->title }}" onclick="openPhoto(this)">
				<div class="flip-card-inner">
					<img class="gallery-photo" src="{{ Storage::url($photos[$i]->thumbnail) }}" alt="" />
					<div class="flip-card-back">
						<p>{{ $photos[$i]->title }}</p>
						<a aria-label="{{ __('messages.clicktozoom') }}"><i class="fa-solid fa-magnifying-glass-plus"></i> {{ __('messages.clicktozoom') }}</a>
					</div>
				</div>
			</div>
		@endfor
	</div>
	<div class="col-6 col-lg-3 d-flex flex-column" style="padding: 0 3px 0 3px;">
		@for($i = 1; $i < count($photos); $i += 4)
			<div class="flip-card" data-image="{{ Storage::url($photos[$i]->thumbnail) }}" data-title="{{ $photos[$i]->title }}" onclick="openPhoto(this)">
				<div class="flip-card-inner">
					<img class="gallery-photo" src="{{ Storage::url($photos[$i]->thumbnail) }}" alt="" />
					<div class="flip-card-back">
						<p>{{ $photos[$i]->title }}</p>
						<a aria-label="{{ __('messages.clicktozoom') }}"><i class="fa-solid fa-magnifying-glass-plus"></i> {{ __('messages.clicktozoom') }}</a>
					</div>
				</div>
			</div>
		@endfor
	</div>
	<div class="col-6 col-lg-3 d-flex flex-column" style="padding: 0 3px 0 3px;">
		@for($i = 2; $i < count($photos); $i += 4)
			<div class="flip-card" data-image="{{ Storage::url($photos[$i]->thumbnail) }}" data-title="{{ $photos[$i]->title }}" onclick="openPhoto(this)">
				<div class="flip-card-inner">
					<img class="gallery-photo" src="{{ Storage::url($photos[$i]->thumbnail) }}" alt="" />
					<div class="flip-card-back">
						<p>{{ $photos[$i]->title }}</p>
						<a aria-label="{{ __('messages.clicktozoom') }}"><i class="fa-solid fa-magnifying-glass-plus"></i> {{ __('messages.clicktozoom') }}</a>
					</div>
				</div>
			</div>
		@endfor
	</div>
	<div class="col-6 col-lg-3 d-flex flex-column" style="padding: 0 3px 0 3px;">
		@for($i = 3; $i < count($photos); $i += 4)
			<div class="flip-card" data-image="{{ Storage::url($photos[$i]->thumbnail) }}" data-title="{{ $photos[$i]->title }}" onclick="openPhoto(this)">
				<div class="flip-card-inner">
					<img class="gallery-photo" src="{{ Storage::url($photos[$i]->thumbnail) }}" alt="" />
					<div class="flip-card-back">
						<p>{{ $photos[$i]->title }}</p>
						<a aria-label="{{ __('messages.clicktozoom') }}"><i class="fa-solid fa-magnifying-glass-plus"></i> {{ __('messages.clicktozoom') }}</a>
					</div>
				</div>
			</div>
		@endfor
	</div>
</div>

<div class="modal fade"
     id="photoModal"
     tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <button
                class="btn-close btn-close-white"
                data-bs-dismiss="modal">
            </button>

            <div class="modal-body text-center" style="padding-top: 0;">

                <img
                    id="modalImage"
                    class="img-fluid"
                    src=""
                    alt="">

                <div style="padding-top: 15px;">
					<h3 id="modalTitle"></h3>
				</div>
            </div>
        </div>
    </div>
</div>
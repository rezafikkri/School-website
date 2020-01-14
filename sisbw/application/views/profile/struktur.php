<div class="container">
	<div class="struktur cf">
		<div class="col-md-6 col-md-offset-3">
			<?php if(!empty(trim($struktur->url_struktur??''))) : ?>
			<img src="<?= $struktur->url_struktur??''; ?>" alt="">
			<?php else: ?>
			<img src="<?= base_url('assets/img/noImage.png'); ?>">
			<?php endif; ?>
		</div>
	</div>
</div>
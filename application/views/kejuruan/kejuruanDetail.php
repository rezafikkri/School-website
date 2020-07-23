<div class="kejuruanDetail">
	<div class="container">
		<?php if($jurusan) : ?>
		<div class="col-md-3">
			<?php if(!empty(trim($jurusan->url_logo))) : ?>
			<img src="<?= $jurusan->url_logo; ?>" alt="">
			<?php else: ?>
			<img src="<?= base_url('assets/img/noImage.png'); ?>">
			<?php endif; ?>
		</div>
		<div class="col-md-6">
			<h2><?= $jurusan->jurusan; ?></h2>
			<?= $jurusan->keterangan; ?>
		</div>
		<?php else : ?>
		<div class="col-md-3">
			<p class="warning">Jurusan tidak ditemukan</p>
		</div>
		<?php endif; ?>
	</div>
</div>
<div class="container cf">
	<div class="col-md-12 kepalaSekolah marginTop60px">
		<h3 class="judulAbuAbu alignCenter">Kepala Sekolah</h3>
		<hr>
		<div class="media">
		  <div class="media-left media-middle">
		  		<?php if(!empty(trim($kepala_sekolah->url_fotoProfile??''))) : ?>
		  		<img class="media-object" src="<?= $kepala_sekolah->url_fotoProfile??''; ?>" alt="">
		  		<?php else: ?>
		  		<img class="media-object" src="<?= base_url('assets/img/noImage.png'); ?>">
		  		<?php endif; ?>
		  </div>
		  <div class="media-body">
		    <h3 class="media-heading"><?= $kepala_sekolah->nama??''; ?></h3>
		    <?= $kepala_sekolah->keterangan??''; ?>
		  </div>
		</div>
	</div>
</div>
<div class="col-md-12 kepalaSekolah marginBottom100px marginTop60px">
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

		<div class="marginTop20px">
			<?php if($jmlKepalaSekolah === 0) : ?>
			<a href="<?= base_url('adminProfile/insertKepalaSekolah'); ?>" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></a>
			<?php else: ?>
			<a href="<?= base_url('adminProfile/editKepalaSekolah'); ?>" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span></a>
			<?php endif; ?>
		</div>
</div>
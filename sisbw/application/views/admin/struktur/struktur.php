<div class="col-md-6 col-md-offset-3 marginBottom100px">
	<div class="struktur marginBottom50px">
		<h3 class="judulAbuAbu alignCenter">Struktur</h3>
		<hr>
		<?php if($struktur->url_struktur??false) : ?>
		<img src="<?= $struktur->url_struktur??''; ?>" alt="">
		<?php else: ?>
		<img src="<?= base_url(); ?>assets/img/noImage.png">
		<?php endif; ?>
	</div>

	<?php if($jmlStruktur === 0) : ?>
	<a href="<?= base_url('adminProfile/insertStruktur') ?>" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></a>
	<?php else: ?>
	<a href="<?= base_url('adminProfile/editStruktur') ?>" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span></a>
	<?php endif; ?>
</div>
<div class="col-md-4 col-md-offset-4 nopadding-all">
	<div class="logoSekolah marginTop60px">
		<?php
			if($logo && file_exists('assets/img/logo sekolah/'.$logo['file_name'])) :
		?>
		<img src="<?= base_url('assets/img/logo sekolah/'.$logo['file_name']); ?>">
		<?php else: ?>
		<img src="<?= base_url('assets/img/noImage.png'); ?>">
		<?php endif; ?>

		<a href="<?= base_url('adminSettings/insertLogo'); ?>"><span class="fi fi-camera"></span></a>
	</div>
</div>
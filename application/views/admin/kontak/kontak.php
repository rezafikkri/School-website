<div class="col-md-6 col-md-offset-3 nopadding-all">
	<div class="jumbotron kontak bgwhite marginTop60px marginBottom50px cf">
	<h3 class="judulAbuAbu alignCenter">Kontak</h3>
	<hr class="noborder marginTop60px">
		<ul class="marginBottom50px marginTop20px">
			<li><span class="glyphicon glyphicon-phone-alt"></span> <?= $kontak->no_telp??''; ?></li>
			<li><span class="glyphicon glyphicon-envelope"></span> <?= $kontak->email??''; ?></li>
			<li><a href="https://www.facebook.com/<?= $kontak->facebook??''; ?>"><span class="fi fi-social-facebook fi-lg2x"></span> <?= $kontak->facebook??''; ?></a></li>
			<li><span class="glyphicon glyphicon-map-marker"></span> <?= $kontak->alamat??''; ?></li>
		</ul>

		<?php if($jmlKontak === 0) : ?>
		<a href="<?= base_url('adminKontak/insertKontak'); ?>" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></a>
		<?php else : ?>
		<a href="<?= base_url('adminKontak/editKontak'); ?>" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span></a>
		<?php endif; ?>
	</div>
</div>
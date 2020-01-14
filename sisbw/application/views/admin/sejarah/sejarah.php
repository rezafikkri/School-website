<div class="jumbotron sejarah marginTop60px cf">
	<h2><?= $sejarah->judul_sejarah??''; ?></h2>
	<div class="col-md-12 marginTop60px">
		<?= $sejarah->sejarah??''; ?>

		<hr class="noborder marginTop60px">
		<?php if($jmlSejarah === 0) : ?>
		<a href="<?= base_url('adminProfile/insertSejarah'); ?>" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></a>
			<?php else: ?>
		<a href="<?= base_url('adminProfile/editSejarah'); ?>" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span></a>
		<?php endif; ?>
	</div>
</div>
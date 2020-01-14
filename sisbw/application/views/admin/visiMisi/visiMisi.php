<div class="visiMisi">
		<div class="col-md-6">
			<div class="alert alert-success" role="alert">
	  			<h2>Visi</h2>
	  			<?= $visi_misi->visi??''; ?>
			</div>
		</div>
		<div class="col-md-6">
			<div class="alert alert-info" role="alert">
				<h2>Misi</h2>
				<?= $visi_misi->misi??''; ?>
			</div>
		</div>
		<div class="col-md-12">
			<?php if($jmlVisiMisi === 0) : ?>
			<a href="<?= base_url('adminProfile/insertVisiMisi'); ?>" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></a>
			<?php else: ?>
			<a href="<?= base_url('adminProfile/editVisiMisi'); ?>" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span></a>
			<?php endif; ?>
		</div>
</div>
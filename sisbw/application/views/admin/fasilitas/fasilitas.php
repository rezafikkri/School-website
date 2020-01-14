<div class="fasilitas marginTop60px marginBottom100px">
	<h2 align="center" class="judulAbuAbu alignCenter">Fasilitas</h2>
	<a href="<?= base_url('adminFasilitas/insertFasilitas'); ?>" class="btn btn-success pull-right"><span class="glyphicon glyphicon-plus"></span></a>
	<hr class="marginTop60px">
		<ul class="row marginTop60px">

		<?php if($fasilitas) : foreach($fasilitas as $r) : ?>
		  <li class="thumbnail">
		      <img class="lazy" data-src="<?= $r->url_img; ?>" alt="">
		      <div class="caption">
		        <h3><?= $r->keterangan; ?></h3>
		        <a href="<?= base_url('adminFasilitas/editFasilitas/'.$r->fasilitas_id); ?>" class="btn btn-default"><span class="glyphicon glyphicon-edit"></span></a>
				<a href="<?= base_url('adminFasilitas/deleteFasilitas/'.$r->fasilitas_id); ?>" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span></a>
		      </div>
		  </li>
		<?php endforeach; endif; ?>

		</ul>
</div>
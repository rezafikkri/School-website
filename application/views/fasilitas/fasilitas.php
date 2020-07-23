<div class="fasilitas">
	<center><h2>Fas<span>ilitas</span></h2></center>
	<div class="container">
		<div class="row">

		<?php if($fasilitas) : foreach($fasilitas as $r) : ?>
			<div class="thumbnail">
				<?php if(!empty(trim($r->url_img))) : ?>
				<img class="lazy" data-src="<?= $r->url_img; ?>" alt="">
				<?php else: ?>
				<img src="<?= base_url('assets/img/noImage.png'); ?>" alt="">
				<?php endif; ?>
			    <div class="caption">
			        <h3><?= $r->keterangan; ?></h3>
			    </div>
			</div>
		<?php endforeach; endif; ?>

		</div>
	</div>
</div>
<div class="container">
	<div class="beritaDetail cf">
		<?php if($berita) : ?>
		<div class="col-md-8">
			<div class="conIsiBerita">
				<h1><?= $berita->judulBesar??''; ?> <span><?= $berita->judulKecil; ?></span></h1>
				<p class="tanggal"><?= generate_post($berita->post); ?></p>

				<?php if(!empty(trim($berita->urlImgUtama))) : ?>
				<img src="<?= $berita->urlImgUtama; ?>" alt="">
				<?php endif; ?>

				<p><?= $berita->isi; ?></p>
			</div>
		</div>
		<?php else: ?>
		<p class="warning">Berita tidak ditemukan!</p>
		<?php endif; //berita tidak ditemukan ?>

		<div class="col-md-12">
			<ul class="list-group">
				<?php if($listBerita) : foreach($listBerita as $r) : ?>
			  	<li class="list-group-item">
			  		<a href="<?= base_url('home/beritaDetail/'.$r->berita_id); ?>"><?= $r->judulBesar; ?> <span>- <?= generate_post($r->post); ?></span></a>
			  	</li>
			  	<?php endforeach; endif; ?>
			</ul>
		</div>

		<?php if($berita) : ?>
		<div class="col-md-8">
			<div class="komentar">
				<h3>Komentar <span class="badge"><?= $jmlkomentar; ?></span></h3>
				<?= form_open('home/insertKomentar'); ?>
					<input type="hidden" name="berita_id" value="<?= $berita->berita_id; ?>">

					<?= $errors['nama']??''; ?>
					<input type="text" name="nama" class="form-control" placeholder="nama" value="<?= $old_value['nama']??''; ?>">

					<?= $errors['komentar']??''; ?>
					<textarea name="komentar" class="form-control" placeholder="komentar"><?= $old_value['komentar']??''; ?></textarea>
					<button class="btn btn-info btn-success">Komen <span class="glyphicon glyphicon-send"></span></button>
				</form>

				<div class="isiKomentar">
					<?php 
						if($komentar) : 
						$no=1; 
						foreach($komentar as $r) :
						$cek_komentar_id = cek_komentar_id($r->komentar_id,$metaData);
					?>

					<div class="isi">
						<h4><?= htmlentities($r->nama); ?></h4>
						<p><?= htmlentities($r->komentar); ?></p>
					</div>
					<p class="action">
						<span><?= generate_post($r->post); ?></span>
						<a class="balas" no="<?= $no; ?>">balas</a>
					</p>
					<?= form_open('home/balasKomentar/'.$this->uri->segment(3),['class'=>'form-balas marginBottom50px '.$cek_komentar_id,'id'=>'balas'.$no]); ?>
						<input type="hidden" name="komentar_id" value="<?= $r->komentar_id; ?>">

						<?= $errors['namaBalas']??''; ?>
						<input type="text" name="namaBalas" class="form-control" placeholder="nama" value="<?= $old_value['namaBalas']??''; ?>">
						<?= $errors['komenBalas']??''; ?>
						<textarea name="komenBalas" class="form-control" placeholder="komentar"><?= $old_value['komenBalas']??''; ?></textarea>

						<button class="btn btn-success" type="submit" name="submit">Balas <span class="glyphicon glyphicon-send"></span></button>
					</form>

					<?php 
						if($this->komentar->getKomenBalas($r->komentar_id)) : 
						foreach($this->komentar->getKomenBalas($r->komentar_id) as $b) :
					?>
						<div class="isiBalas">
							<div class="isi">
								<h4><?= htmlentities($b->nama); ?></h4>
								<p><?= htmlentities($b->komenBalas); ?></p>
							</div>
							<p class="action">
								<span><?= generate_post($b->post); ?></span>
							</p>
						</div>
					<?php endforeach; endif; ?>

					<?php $no++; endforeach; endif; ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>
</div>

<script type="text/javascript">
	$(".beritaDetail img").addClass("lazy");
	$(".beritaDetail img").each(function(){
		this.attr("data-src",$(".beritaDetail img").attr("src"));
	});
	$(".beritaDetail img").attr("src","");
</script>
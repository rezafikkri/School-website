<div class="col-md-6 col-md-offset-3 marginBottom100px">
	<div class="komentar">

		<h3>Komentar <span class="badge"><?= $jmlKomentar; ?></span></h3>
		<?= form_open('adminHome/insertKomentar'); ?>
			<input type="hidden" name="berita_id" value="<?= $this->uri->segment(3); ?>">

			<?= $errors['komentar']??''; ?>
			<textarea name="komentar" class="form-control" placeholder="komentar"></textarea>

			<button class="btn btn-success" type="submit" name="submit">Komen <span class="glyphicon glyphicon-send"></span></button>
			<a href="<?= base_url('adminHome'); ?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
		</form>

		<div class="isiKomentar">
			<?php 
				$no=1;
				foreach($komentar as $r) : 
				$cek_komentar_id = cek_komentar_id($r->komentar_id,$metaData??'');
			?>
				<div class="isi">
					<h4><?= htmlentities($r->nama); ?></h4>
					<p><?= htmlentities($r->komentar); ?></p>
				</div>
				<p class="action">
					<span><?= generate_post($r->post); ?></span>
					<a class="balas" no="<?= $no; ?>">balas</a>
					<?php if( $this->session->userdata('SISBW')['level'] === 'superAdmin' || $this->session->userdata('SISBW')['nama'] === $r->nama ) : ?>
					<a href="<?= base_url('adminHome/deleteKomentar/'.$this->uri->segment(3).'/'.$r->komentar_id.'/'.$r->nama); ?>">delete</a>
					<?php endif; ?>
				</p>

				<!-- form balas -->
				<?= form_open('adminHome/balasKomentar/'.$this->uri->segment(3),['class'=>'form-balas marginBottom50px '.$cek_komentar_id,'id'=>'balas'.$no]); ?>
					<input type="hidden" name="komentar_id" value="<?= $r->komentar_id; ?>">

					<?= $errors['komenBalas']??''; ?>
					<textarea name="komenBalas" class="form-control" placeholder="komentar"></textarea>

					<button class="btn btn-success" type="submit" name="submit">Balas <span class="glyphicon glyphicon-send"></span></button>
				</form>

				<!-- tampil isi balas komentar -->
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
							<?php if( $this->session->userdata('SISBW')['level'] === 'superAdmin' || $this->session->userdata('SISBW')['nama'] === $b->nama ) : ?>
							<a href="<?= base_url('adminHome/deleteKomentarBalas/'.$this->uri->segment(3).'/'.$r->komentar_id.'/'.$b->balas_id.'/'.$b->nama); ?>">delete</a>
							<?php endif; ?>
						</p>
					</div>
				<?php endforeach; endif; ?>

			<?php $no++; endforeach; ?>
		</div>
	</div>
</div>
<div class="col-md-10 col-md-offset-1 nopadding-all marginTop60px marginBottom50px">
	<h3 class="judulAbuAbu alignCenter">Edit Berita</h3>
	<hr>
	<?php if($berita??false) : ?>
	<?= form_open('adminHome/editBerita',['class'=>'form']); ?>
		<input type="hidden" name="berita_id" value="<?= $berita->berita_id??''; ?>">

		<?= $errors['judulBesar']??''; ?>
		<input type="text" name="judulBesar" placeholder="judul besar" class="form-control" value="<?= $berita->judulBesar; ?>">
		<?= $errors['judulKecil']??''; ?>
		<input type="text" name="judulKecil" placeholder="judul kecil" class="form-control" value="<?= $berita->judulKecil; ?>">
		<?= $errors['urlImgUtama']??''; ?>
		<input type="text" name="urlImgUtama" placeholder="url img utama" class="form-control" value="<?= $berita->urlImgUtama; ?>">
		<?= $errors['isi']??''; ?>
		<textarea class="ckeditor" id="ckeditor" name="isi"><?= $berita->isi; ?></textarea>

		<button type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Simpan</button>
		<a href="<?= base_url('adminHome'); ?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
	</form>
	<?php endif; ?>
</div>
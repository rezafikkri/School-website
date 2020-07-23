<div class="col-md-10 col-md-offset-1 marginTop60px marginBottom100px">
	<h3 class="judulAbuAbu alignCenter">Edit Kepala Sekolah</h3>
	<hr>
	<?php if($kepala_sekolah??false) : ?>
	<?= form_open('adminProfile/editKepalaSekolah',['class'=>'form']); ?>
		<input type="hidden" name="kepala_sekolah_id" value="<?= $kepala_sekolah->guru_staf_id??''; ?>">

		<?= $errors['nama_kepala_sekolah']??''; ?>
		<input type="text" name="nama_kepala_sekolah" placeholder="nama" class="form-control" value="<?= $kepala_sekolah->nama??''; ?>">
		<?= $errors['url_fotoProfile']??''; ?>
		<input type="text" name="url_fotoProfile" placeholder="Url foto Profile" class="form-control" value="<?= $kepala_sekolah->url_fotoProfile??''; ?>">
		<?= $errors['keterangan']??''; ?>
		<textarea class="ckeditor" id="ckeditor" name="keterangan"><?= $kepala_sekolah->keterangan??''; ?></textarea>

		<button type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Simpan</button>
		<a href="<?= base_url('adminProfile/kepalaSekolah'); ?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
	</form>
	<?php endif; ?>
</div>
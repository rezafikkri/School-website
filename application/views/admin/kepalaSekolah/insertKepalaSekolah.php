<div class="col-md-10 col-md-offset-1 marginTop60px marginBottom100px">
	<h3 class="judulAbuAbu alignCenter">Insert Kepala Sekolah</h3>
	<hr>
	<?= form_open('adminProfile/insertKepalaSekolah',['class'=>'form']); ?>
		<?= $errors['nama_kepala_sekolah']??''; ?>
		<input type="text" name="nama_kepala_sekolah" placeholder="nama" class="form-control" value="<?= $old_value['nama_kepala_sekolah']??''; ?>">

		<?= $errors['url_fotoProfile']??''; ?>
		<input type="text" name="url_fotoProfile" placeholder="Url foto Profile" class="form-control" value="<?= $old_value['url_fotoProfile']??''; ?>">

		<?= $errors['keterangan']??''??''; ?>
		<textarea class="ckeditor" id="ckeditor" name="keterangan"><?= $old_value['keterangan']??''; ?></textarea>

		<button type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Simpan</button>
		<a href="<?= base_url('adminProfile/kepalaSekolah'); ?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
	</form>
</div>
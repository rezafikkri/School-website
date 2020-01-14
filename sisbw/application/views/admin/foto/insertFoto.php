<div class="col-md-6 col-md-offset-3 marginTop60px">
	<h3 class="judulAbuAbu alignCenter">Insert Foto</h3>
	<hr>
	<?= form_open('adminGaleri/insertFoto',['class'=>'form']); ?>

		<?= $errors['url_foto']??''; ?>
		<input type="text" name="url_foto" placeholder="url foto" class="form-control" value="<?= $old_value['url_foto']??''; ?>">
		<?= $errors['keterangan']??''; ?>
		<textarea placeholder="keterangan" name="keterangan" class="form-control"><?= $old_value['keterangan']??''; ?></textarea>

		<button type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Simpan</button>
		<a href="<?= base_url('adminGaleri/foto') ?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
	</form>
</div>
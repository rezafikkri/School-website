<div class="col-md-10 col-md-offset-1 marginTop60px marginBottom100px">
	<h3 class="judulAbuAbu alignCenter">Insert Jurusan</h3>
	<hr>
	<?= form_open('adminJurusan/insertJurusan',['class'=>'form']); ?>

		<?= $errors['jurusan']??''; ?>
		<input type="text" name="jurusan" placeholder="nama jurusan" class="form-control" value="<?= $old_value['jurusan']??''; ?>">
		<?= $errors['url_logo']??''; ?>
		<input type="text" name="url_logo" placeholder="url logo" class="form-control" value="<?= $old_value['url_logo']??''; ?>">
		
		<textarea class="ckeditor" id="ckeditor" name="keterangan"><?= $old_value['keterangan']??''; ?></textarea>

		<button type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Simpan</button>
		<a href="<?= base_url('adminJurusan'); ?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
	</form>
</div>
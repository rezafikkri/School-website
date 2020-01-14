<div class="col-md-6 col-md-offset-3 marginTop60px">
	<h3 class="judulAbuAbu alignCenter">Insert Fasilitas</h3>
	<hr>
	<?= form_open('adminFasilitas/insertFasilitas',['class'=>'form']); ?>
		<?= $errors['url_img']??''; ?>
		<input type="text" name="url_img" placeholder="url img" class="form-control" value="<?= $old_value['url_img']??''; ?>">

		<?= $errors['keterangan']??''; ?>
		<input type="text" name="keterangan" placeholder="keterangan" class="form-control" value="<?= $old_value['keterangan']??''; ?>">

		<button type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Simpan</button>
		<a href="<?= base_url('adminFasilitas'); ?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
	</form>
</div>
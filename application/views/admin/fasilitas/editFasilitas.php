<div class="col-md-6 col-md-offset-3 marginTop60px">
	<h3 class="judulAbuAbu alignCenter">Edit Fasilitas</h3>
	<hr>
	<?php if($fasilitas??false) : ?>
	<?= form_open('adminFasilitas/editFasilitas',['class'=>'form']); ?>
		<input type="hidden" name="fasilitas_id" value="<?= $fasilitas->fasilitas_id??''; ?>">

		<?= $errors['url_img']??''; ?>
		<input type="text" name="url_img" placeholder="url img" class="form-control" value="<?= $fasilitas->url_img??''; ?>">
		<?= $errors['keterangan']??''; ?>
		<input type="text" name="keterangan" placeholder="keterangan" maxlength="50" class="form-control" value="<?= $fasilitas->keterangan??''; ?>">

		<button type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Simpan</button>
		<a href="<?= base_url('adminFasilitas'); ?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
	</form>
	<?php endif; ?>
</div>
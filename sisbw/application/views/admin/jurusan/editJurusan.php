<div class="col-md-10 col-md-offset-1 marginTop60px marginBottom100px">
	<h3 class="judulAbuAbu alignCenter">Edit Jurusan</h3>
	<hr>
	<?php if($jurusan??false) : ?>
	<?= form_open('adminJurusan/editJurusan',['class'=>'form']); ?>
		<input type="hidden" name="jurusan_id" value="<?= $jurusan->jurusan_id??''; ?>">

		<?= $errors['jurusan']??''; ?>
		<input type="text" name="jurusan" placeholder="nama jurusan" class="form-control" value="<?= $jurusan->jurusan??''; ?>">
		<?= $errors['url_logo']??''; ?>
		<input type="text" name="url_logo" placeholder="url logo" class="form-control" value="<?= $jurusan->logo??''; ?>">

		<textarea class="ckeditor" id="ckeditor" name="keterangan"><?= $jurusan->keterangan??''; ?></textarea>

		<button type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Simpan</button>
		<a href="<?= base_url('adminJurusan'); ?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
	</form>
	<?php endif; ?>
</div>
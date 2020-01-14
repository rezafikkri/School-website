<div class="col-lg-6 col-md-6 col-md-offset-3 marginTop60px">
	<h3 class="judulAbuAbu alignCenter">Edit Guru</h3>
	<hr>
	<?php if($guru??false) : ?>
	<?= form_open('adminGuruStaf/editGuru',['class'=>'form']); ?>
		<input type="hidden" name="guru_staf_id" value="<?= $guru->guru_staf_id??''; ?>">

		<?= $errors['nama_guru']??''; ?>
		<input type="text" name="nama_guru" placeholder="nama guru" class="form-control" value="<?= $guru->nama??''; ?>">
		<?= $errors['jabatan']??''; ?>
		<input type="text" name="jabatan" placeholder="jabatan guru" class="form-control" value="<?= $guru->jabatan??''; ?>">
		<input type="text" name="keterangan" placeholder="keterangan" class="form-control" value="<?= $guru->keterangan??''; ?>">

		<button type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Simpan</button>
		<a href="<?= base_url('adminGuruStaf/guru') ?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
	</form>
	<?php endif; ?>
</div>
<div class="col-md-6 col-md-offset-3 marginTop60px">
	<h3 class="judulAbuAbu alignCenter">Edit Staf</h3>
	<hr>
	<?php if($staf??false) : ?>
	<?= form_open('adminGuruStaf/editStaf',['class'=>'form']); ?>
		<input type="hidden" name="guru_staf_id" value="<?= $staf->guru_staf_id??''; ?>">

		<?= $errors['nama_staf']??''; ?>
		<input type="text" name="nama_staf" placeholder="nama staf" class="form-control" value="<?= $staf->nama??''; ?>">
		<?= $errors['jabatan']??''; ?>
		<input type="text" name="jabatan" placeholder="jabatan" class="form-control" value="<?= $staf->jabatan??''; ?>">

		<button type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Simpan</button>
		<a href="<?= base_url('adminGuruStaf/staf') ?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
	</form>
	<?php endif; ?>
</div>
<div class="col-md-6 col-md-offset-3 marginTop60px">
	<h3 class="judulAbuAbu alignCenter">Insert Staf</h3>
	<hr>
	<?= form_open('adminGuruStaf/insertStaf',['class'=>'form']); ?>

		<?= $errors['nama_staf']??''; ?>
		<input type="text" name="nama_staf" placeholder="nama staf" class="form-control" value="<?= $old_value['nama_staf']??''; ?>">
		
		<?= $errors['jabatan']??''; ?>
		<input type="text" name="jabatan" placeholder="jabatan" class="form-control" value="<?= $old_value['jabatan']??''; ?>">
		
		<button type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Simpan</button>
		<a href="<?= base_url('adminGuruStaf/staf') ?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
	</form>
</div>
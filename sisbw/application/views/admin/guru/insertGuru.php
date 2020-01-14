<div class="col-md-6 col-md-offset-3 marginTop60px">
	<h3 class="judulAbuAbu alignCenter">Insert Guru</h3>
	<hr>
	<?= form_open('adminGuruStaf/insertGuru',['class'=>'form']); ?>
	
		<?= $errors['nama_guru']??''; ?>
		<input type="text" name="nama_guru" placeholder="nama guru" class="form-control" value="<?= $old_value['nama_guru']??''; ?>">

		<?= $errors['jabatan']??''; ?>
		<input type="text" name="jabatan" placeholder="jabatan guru" class="form-control" value="<?= $old_value['jabatan']??''; ?>">

		<input type="text" name="keterangan" placeholder="keterangan" class="form-control" value="<?= $old_value['keterangan']??''; ?>">

		<button type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Simpan</button>
		<a href="<?= base_url('adminGuruStaf/guru') ?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
	</form>
</div>
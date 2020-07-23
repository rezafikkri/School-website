<div class="col-md-6 col-md-offset-3 marginTop60px">
	<?= form_open('adminUser/insertUser',['class'=>'form']); ?>
		<h3 class="judulAbuAbu alignCenter">Insert User</h3>
		<hr>
		<?= $errors['nama']??''; ?>
		<input type="text" name="nama" placeholder="nama" class="form-control" value="<?= $old_value['nama']??''; ?>">

		<?= $errors['username']??''; ?>
		<input type="text" name="username" placeholder="username" class="form-control" value="<?= $old_value['username']??''; ?>">

		<?= $errors['password']??''; ?>
		<input type="password" name="password" placeholder="password" class="form-control"z>

		<select name="level" class="form-control">
			<option disabled="" selected="">Level</option>
			<?php $level = ['operator','admin','superAdmin']??''; foreach($level as $r) : ?>
			<option value="<?= $r; ?>"><?= $r; ?></option>
			<?php endforeach; ?>
		</select>

		<button type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Simpan</button>
		<a href="<?= base_url('adminUser'); ?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
	</form>
</div>
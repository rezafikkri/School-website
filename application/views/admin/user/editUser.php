<div class="col-md-6 col-md-offset-3 marginTop60px">
	<h3 class="judulAbuAbu alignCenter">Edit User</h3>
	<hr>
	<?php if($user??false) : ?>
	<?= form_open('adminUser/editUser',['class'=>'form']); ?>
		<input type="hidden" name="user_id" value="<?= $user->user_id??''; ?>">

		<?= $errors['nama']??''; ?>
		<input type="text" name="nama" placeholder="nama" class="form-control" value="<?= $user->nama??''; ?>">

		<?= $errors['username']??''; ?>
		<input type="text" name="username" placeholder="username" class="form-control" value="<?= $user->username??''; ?>">

		<input type="password" name="password" placeholder="password" class="form-control">

		<!-- jika level bukan operator maka tampilkan select level -->
		<?php if($this->session->userdata('SISBW')['level'] != 'operator') : ?>
		<select name="level" class="form-control">
			<option disabled="" selected="">Level</option>
			<?php 

				if($this->session->userdata('SISBW')['level'] == 'admin')
				$level = ['operator','admin'];
				elseif($this->session->userdata('SISBW')['level'] == 'superAdmin')
				$level = ['operator','admin','superAdmin'];

				foreach($level as $r) : 
			?>

			<option value="<?= $r; ?>"
			<?php echo $user->level==$r?'selected':''; ?>
			><?= $r; ?></option>
			<?php endforeach; ?>
		</select>
		<?php endif; ?>

		<button type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Simpan</button>
		<a href="<?= base_url('adminUser'); ?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
	</form>
	<?php endif; ?>
</div>
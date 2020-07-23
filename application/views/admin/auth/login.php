<div class="container">
	<div class="col-md-8 login nopadding-all col-md-offset-2">
		<div class="col-md-4 logoSekolahLogin">
			<?php if($logo && file_exists("assets/img/logo sekolah/".$logo['file_name'])) : ?>
			<img src="<?= base_url('assets/img/logo sekolah/'.$logo['file_name']); ?>">
			<?php else: ?>
			<img src="<?= base_url('assets/img/noImage.png'); ?>">
			<?php endif; ?>
		</div>

		<div class="col-md-8 formLogin">
			<h3>Form <span>Login</span></h3>
			<?= form_open('auth/login'); ?>

				<?php if($this->uri->segment(3) === 'noUsername') : ?>
				<p class="warning">Username tidak terdaftar</p>
				<?php endif; ?>
				<?php if($this->uri->segment(3) === 'invalidLogin') : ?>
				<p class="warning">Gagal masuk!</p>
				<?php endif; ?>
				<div class="input-group">
					<div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
					<input type="text" name="username" placeholder="username" class="form-control">
				</div>
				<?php if($this->uri->segment(3) === 'noPassword') : ?>
				<p class="warning">Password salah</p>
				<?php endif; ?>
				<div class="input-group">
					<div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
					<input type="password" name="password" placeholder="password" class="form-control">
				</div>
				<button type="submit" name="submit" class="btn btn-primary">Masuk <span class="glyphicon glyphicon-log-in"></span></button>

			</form>
		</div>
	</div>
</div>
<div class="col-md-6 col-md-offset-3 marginTop60px">
	<h3 class="judulAbuAbu alignCenter">Edit struktur</h3>
	<hr>
	<?php if($struktur??false) : ?>
	<?= form_open('adminProfile/editStruktur',['class'=>'form']); ?>

		<?= $errors['url_struktur']??''; ?>
		<input type="text" name="url_struktur" placeholder="Url struktur" class="form-control" value="<?= $struktur->url_struktur??''; ?>">

		<button class="btn btn-success" type="submit" name="submit"><span class="glyphicon glyphicon-save"></span> Simpan</button>
		<a href="<?= base_url('adminProfile/struktur'); ?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
	</form>
	<?php endif; ?>
</div>
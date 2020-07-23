<div class="col-md-10 col-md-offset-1 marginTop60px marginBottom100px">
	<h3 class="judulAbuAbu alignCenter">Edit Sejarah</h3>
	<hr>
	<?php if($sejarah) : ?>
	<?= form_open('adminProfile/editSejarah',['class'=>'form']); ?>

		<?= $errors['judul_sejarah']??''; ?>
		<input type="text" name="judul_sejarah" class="form-control" placeholder="Judul sejarah" value="<?= $sejarah->judul_sejarah; ?>">
		<?= $errors['sejarah']??''; ?>
		<textarea id="ckeditor" class="ckeditor" name="sejarah"><?= $sejarah->sejarah; ?></textarea>
		<button class="btn btn-success" name="submit" type="submit"><span class="glyphicon glyphicon-save"></span> Simpan</button>
		<a href="<?= base_url('adminProfile/sejarah'); ?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
	</form>
	<?php endif; ?>
</div>
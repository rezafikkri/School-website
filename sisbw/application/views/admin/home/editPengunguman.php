<div class="col-md-6 col-md-offset-3 nopadding-all marginTop60px">
	<h3 class="judulAbuAbu alignCenter">Edit Pengunguman</h3>
	<hr>
	<?php if($pengunguman??false) : ?>
	<?= form_open('adminHome/editPengunguman',['class'=>'form']); ?>

		<?= $errors['judul']??''; ?>
		<input type="text" name="judul" class="form-control" placeholder="judul" value="<?= $pengunguman->judul; ?>">
		<?= $errors['isi']??''; ?>
		<textarea rows="7" name="isi" class="form-control" placeholder="isi"><?= $pengunguman->isi; ?></textarea>
		
		<button type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Simpan</button>
		<a href="<?= base_url('adminHome'); ?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
	</form>
	<?php endif; ?>
</div>
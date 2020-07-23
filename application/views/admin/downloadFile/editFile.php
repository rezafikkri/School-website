<div class="col-md-6 col-md-offset-3 nopadding-all marginTop60px">
	<h3 class="judulAbuAbu alignCenter">Edit File</h3>
	<hr>
	<?php if($file??false) : ?>
	<?= form_open('adminDownloadFile/editFile',['class'=>'form']); ?>
		<input type="hidden" name="file_download_id" value="<?= $file->file_download_id??''; ?>">
		<?= $errors['name']??''; ?>
		<input type="text" class="form-control" name="name" value="<?= $file->name??''; ?>" placeholder="name">
		<?= $errors['url']??''; ?>
		<input type="text" class="form-control" name="url" value="<?= $file->url??''; ?>" placeholder="url">

		<button type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Simpan</button>
		<a href="<?= base_url('adminDownloadFile'); ?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
	</form>
	<?php endif; ?>
</div>
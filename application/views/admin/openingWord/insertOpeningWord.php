<div class="col-md-8 col-md-offset-2 marginTop60px marginBottom100px">
	<h3 class="judulAbuAbu alignCenter">Insert Word</h3>
	<hr>
	<?= form_open('adminSettings/insertOpeningWord',['class'=>'form']); ?>
		<?= $errors['nama_sekolah']??''; ?>
		<input type="text" class="form-control" value="<?= $old_value['nama_sekolah']??''; ?>" name="nama_sekolah" placeholder="Nama sekolah...">
		<?= $errors['url_background']??''; ?>
		<input type="text" class="form-control" value="<?= $old_value['url_background']??''; ?>" name="url_background" placeholder="Url background">
		<?= $errors['word']??''; ?>
		<textarea id="ckeditor" class="ckeditor" name="word"><?= $old_value['word']??''; ?></textarea>
		
		<button type="submit" class="btn btn-success" name="submit"><span class="glyphicon glyphicon-save"></span> Simpan</button>
		<a href="<?= base_url('adminSettings/openingWord'); ?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
	</form>
</div>
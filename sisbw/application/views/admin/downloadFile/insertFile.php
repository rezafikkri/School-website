<div class="col-md-6 col-md-offset-3 nopadding-all marginTop60px">
	<h3 class="judulAbuAbu alignCenter">Insert File</h3>
	<hr>
	<?= form_open('adminDownloadFile/insertFile',['class'=>'form']); ?>
		<?= $errors['name']; ?>
		<input type="text" class="form-control" name="name" value="<?= $old_value['name']; ?>" placeholder="name">
		<?= $errors['url']; ?>
		<input type="text" class="form-control" name="url" value="<?= $old_value['url']; ?>" placeholder="url">

		<button type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Simpan</button>
		<a href="<?= base_url('adminDownloadFile'); ?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
	</form>
</div>
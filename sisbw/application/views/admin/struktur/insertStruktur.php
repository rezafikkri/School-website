<div class="col-md-6 col-md-offset-3 marginTop60px">
	<h3 class="judulAbuAbu alignCenter">Insert struktur</h3>
	<hr>
	<?= form_open('adminProfile/insertStruktur',['class'=>'form']); ?>
	
		<?= $errors['url_struktur']??''; ?>
		<input type="text" name="url_struktur" placeholder="url struktur" class="form-control">

		<button class="btn btn-success" type="submit" name="submit"><span class="glyphicon glyphicon-save"></span> Simpan</button>
		<a href="<?= base_url('adminProfile/struktur'); ?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
	</form>
</div>
<div class="col-md-6 col-md-offset-3 marginTop60px">
	<h3 class="judulAbuAbu alignCenter">Insert Video</h3>
	<hr>
	<?= form_open('adminGaleri/insertVideo',['class'=>'form']); ?>
		<?= $errors['url_video']??''; ?>
		<input type="text" name="url_video" placeholder="url video" class="form-control">

		<button type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Simpan</button>
		<a href="<?= base_url('adminGaleri/video') ?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
	</form>
</div>
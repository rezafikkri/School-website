<div class="col-md-6 col-md-offset-3 marginTop60px">
	<h3 class="judulAbuAbu alignCenter">Edit Video</h3>
	<hr>
	<?php if($video??false) : ?>
	<?= form_open('adminGaleri/editVideo',['class'=>'form']); ?>
		<input type="hidden" name="video_id" value="<?= $video->video_id??''; ?>">

		<?= $errors['url_video']??''; ?>
		<input type="text" name="url_video" placeholder="url video" class="form-control" value="<?= $video->url_video??''; ?>">

		<button type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Simpan</button>
		<a href="<?= base_url('adminGaleri/video') ?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
	</form>
	<?php endif; ?>
</div>
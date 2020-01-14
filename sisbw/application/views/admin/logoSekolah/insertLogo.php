<div class="col-md-6 col-md-offset-3 nopadding-all marginTop60px">
	<h3 class="judulAbuAbu alignCenter">Change Logo</h3>
	<hr>
	<?= form_open_multipart('adminSettings/insertLogo',['class'=>'inputFile']); ?>
		<input type="file" id="inputFile" accept="image/*" name="logoSekolah">

		<?= $error??''; ?>
		<span class="ketFile"><placeholder>Pilih file ...</placeholder></span>
		<a id="selectFile" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> Select</a>
		<button class="btn btn-success" type="submit" name="submit"><span class="glyphicon glyphicon glyphicon-folder-open"></span> Simpan</button>
		<a href="<?= base_url('adminSettings/logoSekolah'); ?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
	</form>

	<div class="logoSekolah imgPriview marginTop60px marginBottom100px">
		<img src="">
	</div>
</div>
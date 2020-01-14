<div class="jumbotron openingWord cf" 
	style="background-image: url('<?= $openingWord['url_background']; ?>');">
	<div class="container">
		<div class="col-md-12 nopadding-all bgHome">
		    <div class="col-md-7 col-md-offset-3">
		    <?php if($openingWord) : ?>
		    	<h2><?= $openingWord['nama_sekolah']; ?></h2>
				<?= $openingWord['word']; ?>
		    <?php endif; ?>
		    </div>
		</div>
		
		<?php if($jmlOpeningWord === 0) : ?>
		<a href="<?= base_url('adminSettings/insertOpeningWord'); ?>"><span class="glyphicon glyphicon-plus"></span></a>
		<?php else : ?>
		<a href="<?= base_url('adminSettings/editOpeningWord'); ?>"><span class="glyphicon glyphicon-edit"></span></a>
		<?php endif; ?>
	</div>
</div>

<script type="text/javascript">
	$(function(){
		const container = document.querySelector('div#hiddenContainerForOpeningWordPage');
		container.classList.remove('container');
	});
</script>
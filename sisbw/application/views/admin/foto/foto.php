<div class="galeriFoto marginTop60px marginBottom300px">
	<h2 align="center" class="judulAbuAbu alignCenter">Foto</h2>
	<a href="<?= base_url('adminGaleri/insertFoto'); ?>" class="btn btn-success pull-right"><span class="glyphicon glyphicon-plus"></span></a>
	<hr class="marginTop60px">

	<div class="grid" id="tampilFoto">
		<div class="grid-sizer"></div>
		<?php if($foto): $no=1; foreach($foto as $r) : ?>
		<div class="grid-item jmlFoto">
			<?php if(empty(trim($r->url_foto))) : ?>
			<img src="<?= base_url('assets/img/noImage.png'); ?>">
			<?php else: ?>
			<img src="<?= $r->url_foto; ?>">
			<?php endif; ?>
			<div class="keterangan">
			   	<p><?= $r->keterangan; ?></p>

			  	<a href="<?= base_url('adminGaleri/editFoto/'.$r->foto_id); ?>" class="btn btn-default"><span class="glyphicon glyphicon-edit"></span></a>
				<a href="<?= base_url('adminGaleri/deleteFoto/'.$r->foto_id); ?>" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span></a>
			</div>
		</div>
		<?php endforeach; endif; ?>

	</div>
		<div class="marginTop60px">
			<center class="noBg" id="noContentImg"></center>
			<center class="noBg" id="loaderCenter"><div class="loader"></div></center>
		</div>
</div>

<statusAjax value="yes">

<script src="<?= base_url('assets/js/masonry.pkgd.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/imagesloaded.pkgd.min.js'); ?>"></script>
<script type="text/javascript">
	$(document).ready(function(){

		let $grid = $('.grid').imagesLoaded( function() {
		  // init Masonry after all images have loaded
		  $grid.masonry({
		    // options
			itemSelector: '.grid-item',
			percentPosition: true,
			columnWidth: '.grid-sizer',
			gutter: 10
		  });
		});

		function imagesInfiniteScroll() {

			const offset = $("div.jmlFoto").length;
			$.ajax({
				type:"GET",
				url:"<?= base_url('adminGaleri/ajaxGetFoto'); ?>",
				data:{offset:offset},
				beforeSend:function() {
					$(".loader").fadeIn();
					$("statusAjax").attr('value','ajax');
				},
				success:function(response) {
					$(".loader").fadeOut();
					$("statusAjax").attr('value','yes');

					const data = JSON.parse(response);
					if(data != null) {
						let hasil = '';
						data.forEach(function(e,i){
							hasil += '<div class="grid-item jmlFoto">';
								hasil += '<img src="'+e.url_foto+'" alt="">';
								hasil += '<div class="keterangan">';
								hasil += '<p>'+e.keterangan+'</p>';
								hasil += '<a href="<?= base_url('adminGaleri/editFoto/'); ?>'+e.foto_id+'" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span></a>';
								hasil += '<a href="<?= base_url('adminGaleri/deleteFoto/'); ?>'+e.foto_id+'" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>'
								hasil += '</div>';
							hasil += '</div>';
						})

						let $content = $(hasil);
						$grid.append($content).masonry('appended', $content);
						$grid.imagesLoaded().progress( function() {
						  	$grid.masonry('layout');
						});

						yall();

					} else {
						let hasil = '"No content more"';
						$("center#noContentImg").text(hasil);
						setTimeout(function(){
							$("center#noContentImg").text("");
						},5000)
						
					}
				}
			})
		}

		$(window).scroll(function(){
			if($(window).scrollTop() + $(window).height() + 300 > $(document).height()) {
				if($('statusAjax').attr('value') == 'yes' && $('center#noContentImg').text().length == 0) {
					imagesInfiniteScroll();
				}
			}
		});
	})
</script>
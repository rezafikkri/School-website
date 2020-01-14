<div class="galeriFoto">
	<center><h2><span>Galeri</span> Foto</h2></center>
	<div class="container">
		<div class="grid" id="tampilFoto">
			<div class="grid-sizer"></div>
			<?php if($foto) : foreach($foto as $r) : ?>
			<div class="grid-item jmlFoto">
				<?php if(!empty(trim($r->url_foto))) : ?>
				<img src="<?= $r->url_foto ?>">
				<?php else: ?>
				<img src="<?= base_url('assets/img/noImage.png'); ?>">
				<?php endif; ?>
				<div class="keterangan">
				   	<?= $r->keterangan; ?>
				</div>
			</div>
			<?php endforeach; endif; ?>
		</div>

		<div class="marginTop60px">
			<center class="noBg" id="noContentImg"></center>
			<center class="noBg" id="loaderCenter"><div class="loader"></div></center>
		</div>
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
				url:"<?= base_url('galeri/ajaxGetFoto'); ?>",
				data:{offset:offset},
				beforeSend:function(response) {
					$(".loader").fadeIn();
					$('statusAjax').attr('value','ajax');
				},
				success:function(response) {
					$(".loader").fadeOut();
					$('statusAjax').attr('value','yes');

					const data = JSON.parse(response);
					if(data != null) {
						let hasil = '';
						data.forEach(function(e,i){
							hasil += '<div class="grid-item jmlFoto">';
								hasil += '<img src="'+e.url_foto+'" alt="">';
								hasil += '<div class="keterangan">'+e.keterangan+'</div>';
							hasil += '</div>';
						})

						$content = $(hasil);
						$grid.append($content).masonry('appended', $content);
						$grid.imagesLoaded().progress( function() {
						  	$grid.masonry('layout');
						});

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
			if($(window).scrollTop() + $(window).height() + 500 >= $(document).height()) {
				if($('statusAjax').attr('value') == 'yes' && $("center#noContentImg").text().length == 0) {
					imagesInfiniteScroll();
				}
			}
		})
	});
</script>
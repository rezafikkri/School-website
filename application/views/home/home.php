<div class="jumbotron openingWord cf lazy-bg" 
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
    </div> <!-- /container -->
</div>

<div class="container">
	<div class="col-md-5">
		<div class="jumbotron pengunguman">
			<div class="judul"><h3>Pengunguman</h3></div>
			<div class="caption">
				<h4 class="judulPengunguman"><?= $pengunguman->judul??''; ?></h4>
				<div class="isiPengunguman">
					<?= $pengunguman->isi??'Pengunguman kosong'; ?>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-7 galeriHome">
		<a href="<?= base_url('galeri/foto'); ?>">
			<?php if($foto??'') : $no=1; foreach($foto as $f) : ?>
			<div class="col-md-<?php if($no == 1) {echo "5 fotoImage-green";} else if($no == 2) {echo "7 fotoImage-blue";}else {echo "12 fotoImage-orange";} ?>">
				<img class="lazy" data-src="<?= $f->url_foto??''; ?>" src="" alt="">
			</div>
			<?php $no++; endforeach; else : ?>
			<div class="col-md-5 fotoImage-green"></div>
			<div class="col-md-7 fotoImage-blue"></div>
			<div class="col-md-12 fotoImage-orange"></div>
			<?php endif; ?>
		</a>
	</div>
</div>

<!-- berita -->
<div class="jumbotron berita cf">
	<h2 align="center">Berita</h2>
	<div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1 nopadding-all">
		<ul id="tampilBerita">
		<?php if($berita) : foreach($berita as $b) : ?>
			<li class="col-md-12 galeri nopadding-all jmlBerita"">
				<?php if(empty(trim($b->urlImgUtama))) : ?>
				<div class="col-md-12 keterangan">
				<?php else : ?>
				<div class="col-md-4 img"><img class="lazy" data-src="<?= $b->urlImgUtama; ?>" src="" alt=""></div>
				<div class="col-md-8 keterangan">
				<?php endif; ?>
					<h3><?= $b->judulBesar; ?> <span>- <?= generate_post($b->post); ?></span></h3>
					<p><?= substr($b->isi, 0, 300); ?> ...</p>
					<a href="<?= base_url('home/beritaDetail/'.$b->berita_id); ?>">Selengkapnya <span class="glyphicon glyphicon-arrow-right"></span></a>
				</div>
			</li>
		<?php endforeach; endif; ?>
		</ul>
	</div>
	<div class="col-md-12 col-sm-12 nopadding-all marginBottom50px marginTop60px" style="text-align: center">
		<center class="noBg" id="noContentBerita"></center>
		<center class="noBg"><div class="loader"></div></center>
	</div>
</div>

<statusAjax value="yes">
<script type="text/javascript">
	$(document).ready(function(){

		function beritaInfiniteScroll() {

			const offset = $(".jmlBerita").length;
			$.ajax({
				type:"GET",
				url:"<?= base_url('Home/ajaxGetBerita'); ?>",
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
							hasil += '<li class="col-md-12 galeri nopadding-all jmlBerita">';
							if(e.urlImgUtama.length === 0) {
								hasil += '<div class="col-md-12 keterangan">';

							} else {
								hasil += '<div class="col-md-4 img"><img class="lazy" data-src="'+e.urlImgUtama+'" alt=""></div>';
								hasil += '<div class="col-md-8 keterangan">';
							}
								hasil += '<h3>'+e.judulBesar+' <span>- '+e.post+'</span></h3>';
								hasil += '<p>'+e.isi.substr(0,300)+' ...</p>';
								hasil += '<a href="<?= base_url('home/beritaDetail/'); ?>'+e.berita_id+'">Selengkapnya <span class="glyphicon glyphicon-arrow-right"></span></a>'
								hasil += '</div>'
							hasil += '</li>';
						})

						$("ul#tampilBerita").append(hasil);
						yall();

					} else {
						$("center#noContentBerita").text('"Tidak ada konten lainnya"');
						setTimeout(function(){
							$("center#noContentBerita").text("");
						},5000)
					}
				}
			})
		}

		$(window).scroll(function(){
			if($(window).scrollTop() + $(window).height() + 300 >= $(document).height()) {
				if($("statusAjax").attr('value') == 'yes' && $("center#noContentBerita").text().length == 0) {
					beritaInfiniteScroll();
				}
			}
		});
	});
</script>
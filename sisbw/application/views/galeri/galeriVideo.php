<div class="galeriVideo">
	<center><h2><span>Galeri</span> Video</h2></center>
	<div class="container">
		<div id="tampilVideo">
		<?php if($video) : foreach($video as $r) : ?>
			<div class="col-md-6 video jmlVideo">
				<iframe class="lazy" data-src="<?= $r->url_video??''; ?>"  frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		<?php endforeach; endif; ?>
		</div>

		<div class="col-md-12 nopadding-all marginTop60px">
			<center class="noBg" id="noContentVideo"></center>
			<center class="noBg"><div class="loader"></div></center>
		</div>
	</div>
</div>

<statusAjax value="yes">
<script type="text/javascript">
	$(document).ready(function(){

		function videoInfiniteScroll() {
			const offset = $("div.jmlVideo").length;
			$.ajax({
				type:"GET",
				url:"<?= base_url(); ?>/galeri/ajaxGetVideo",
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
							hasil += '<div class="col-md-6 video jmlVideo">';
								hasil += '<iframe height="300" src="'+e.url_video+'"  frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
							hasil += '</div>';
						})

						$("div#tampilVideo").append(hasil);

					} else {
						let hasil = '"No content more"';
						$("center#noContentVideo").text(hasil);
						setTimeout(function(){
							$("center#noContentVideo").text("");
						},5000)
						
					}
				}
			})
		}

		$(window).scroll(function(){
			if($(window).scrollTop() + $(window).height() + 500 >= $(document).height()) {
				if($('statusAjax').attr('value') == 'yes' && $("center#noContentVideo").text().length == 0) {
					videoInfiniteScroll();
				}
			}
		})
	})
</script>
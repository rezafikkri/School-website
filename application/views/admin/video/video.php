<div class="galeriVideo marginTop60px marginBottom300px cf">
	<h2 align="center" class="judulAbuAbu alignCenter">Video</h2>
	<a href="<?= base_url('adminGaleri/insertVideo'); ?>" class="btn btn-success pull-right"><span class="glyphicon glyphicon-plus"></span></a>
	<hr class="marginTop60px">
	
	<div id="tampilVideo">
	<?php if($video) : foreach($video as $r) : ?>
		<div class="col-sm-5 col-md-6 video jmlVideo">
			<iframe height="300" class="lazy" data-src="<?= $r->url_video; ?>"  frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

			<a class="btn btn-default" href="<?= base_url('adminGaleri/editVideo/'.$r->video_id); ?>"><span class="glyphicon glyphicon-edit"></span></a>
			<a class="btn btn-default" href="<?= base_url('adminGaleri/deleteVideo/'.$r->video_id); ?>"><span class="glyphicon glyphicon-remove"></span></a>
		</div>
	<?php endforeach; endif; ?>
	</div>

	<div class="col-md-12 nopadding-all marginTop60px">
		<center class="noBg" id="noContentVideo"></center>
		<center class="noBg"><div class="loader"></div></center>
	</div>
</div>
<statusAjax value="yes">
<script type="text/javascript">
	$(document).ready(function(){

		function videoInfiniteScroll(){

			const offset = $("div.jmlVideo").length;
			$.ajax({
				type:"GET",
				url:"<?= base_url('adminGaleri/ajaxGetVideo'); ?>",
				data:{offset:offset},
				beforeSend:function() {
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
							hasil += '<div class="col-md-6 video jmlVideo">';
								hasil += '<iframe height="300" src="'+e.url_video+'"  frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
								hasil += '<a href="<?= base_url('adminGaleri/editVideo/'); ?>'+e.video_id+'" class="btn btn-default"><span class="glyphicon glyphicon-edit"></span></a>';
								hasil += ' <a href="<?= base_url('adminGaleri/deleteVideo/'); ?>'+e.video_id+'" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span></a>';
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
			if($(window).scrollTop() + $(window).height() + 300 > $(document).height()) {
				if($('statusAjax').attr('value') == 'yes' && $('center#noContentVideo').text().length == 0) {
					videoInfiniteScroll();
				}
			}
		});

	});
</script>
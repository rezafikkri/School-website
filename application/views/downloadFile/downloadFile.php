<div class="downloadFile marginTop60px">
	<div class="container">
		<h3 class="judulAbuAbu alignCenter">File</h3>
		<hr>
		<table class="table table-bordered">
			<tr class="success">
				<th width="10">No</th>
				<th>Name</th>
				<th width="10">Link</th>
			</tr>
			<?php 
				if($file) :
				$no = 1;
				foreach($file as $r) :
			?>
			<tr>
				<td><?= $no; ?></td>
				<td><?= $r->name; ?></td>
				<td class="alignCenter">
					<a hover="blue" target="_blank" href="<?= $r->url; ?>"><span class="fi fi-download fi-lg"></span></a>
				</td>
			</tr>
			<?php $no++; endforeach;?>
			<?php else : ?>
			<tr>
				<td class="notFound" colspan="3">Data kosong</td>
			</tr>
			<?php endif; ?>
		</table>
	</div>
</div>
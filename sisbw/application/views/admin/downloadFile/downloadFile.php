<div class="col-md-12 nopadding-all marginTop60px">
	<table class="table table-bordered">
		<tr class="success">
			<td colspan="5"><h3 align="center">File</h3></td>
		</tr>
		<tr>
			<th width="10">No</th>
			<th>Nama File</th>
			<th>Url File</th>
			<th colspan="2" class="alignCenter" width="10">
				<a href="<?= base_url('adminDownloadFile/insertFile'); ?>"><span class="glyphicon glyphicon-plus"></span></a>
			</th>
		</tr>
		<?php  
			if($file) :
			$no = 1;
			foreach($file as $r) :
		?>
		<tr>
			<td><?= $no; ?></td>
			<td><?= $r->name; ?></td>
			<td><?= $r->url; ?></td>

			<td width="10">
				<a hover="blue" href="<?= base_url('adminDownloadFile/editFile/'.$r->file_download_id); ?>"><span class="glyphicon glyphicon-edit"></span></a>
			</td>
			<td width="10">
				<a hover="red" href="<?= base_url('adminDownloadFile/deleteFile/'.$r->file_download_id); ?>"><span class="glyphicon glyphicon-remove-sign"></span></a>
			</td>
		</tr>
		<?php $no++; endforeach; ?>
		<?php else : ?>
		<tr><td class="notFound" colspan="5">Data kosong</td></tr>
		<?php endif; ?>
	</table>
</div>
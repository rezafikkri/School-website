<div class="col-md-12 nopadding-all marginTop60px">
	<table class="table table-bordered">
		<tr class="success">
			<td colspan="5"><h3 align="center">Staf</h3></td>
		</tr>
		<tr>
			<th width="10">No</th>
			<th>Nama</th>
			<th>Jabatan</th>
			<th colspan="2" class="alignCenter"><a href="<?= base_url('adminGuruStaf/insertStaf'); ?>"><span class="glyphicon glyphicon-plus"></span></a></th>
		</tr>
		<?php if($staf) : $no=1; foreach($staf as $r) : ?>
		<tr>
			<td><?= $no; ?></td>
			<td><?= $r->nama; ?></td>
			<td><?= $r->jabatan; ?></td>

			<td width="10"><a hover="blue" href="<?= base_url('adminGuruStaf/editStaf/'.$r->guru_staf_id); ?>"><span class="glyphicon glyphicon-edit"></span></a></td>
			<td width="10"><a hover="red" href="<?= base_url('adminGuruStaf/deleteStaf/'.$r->guru_staf_id); ?>"><span class="glyphicon glyphicon-remove-sign"></span></a></td>
		</tr>
		<?php $no++; endforeach; ?>
		<?php else: ?>
		<tr>
			<td class="notFound" colspan="5">Data kosong</td>
		</tr>
		<?php endif; ?>
	</table>
</div>
<div class="col-md-12 nopadding-all marginTop60px">
	<table class="table table-bordered">
		<tr class="success">
			<td colspan="5"><h3 align="center">Guru</h3></td>
		</tr>
		<tr>
			<th colspan="2">Nama</th>
			<th>Jabatan</th>
			<th colspan="2" class="alignCenter">
				<a href="<?= base_url('adminGuruStaf/insertGuru'); ?>"><span class="glyphicon glyphicon-plus"></span></a>
			</th>
		</tr>
		<!-- wakil kepala sekolah -->
		<?php if($wakil) : ?>
		<tr>
			<td width="10">
				<?php if(strlen($wakil['keterangan']) != 0) : ?>
				<span data="<?= $wakil['keterangan']; ?>" key-data="Keterangan" id-data="trChild-wakil" class="glyphicon glyphicon-plus-sign green btn-child"></span>
				<?php endif; ?>
			</td>

			<td><?= $wakil['nama']; ?></td>
			<td><?= $wakil['jabatan']; ?></td>

			<td width="10"><a hover="blue" href="<?= base_url('adminGuruStaf/editGuru/'.$wakil['id']); ?>"><span class="glyphicon glyphicon-edit"></span></a></td>
			<td width="10"><a hover="red" href="<?= base_url('adminGuruStaf/deleteGuru/'.$wakil['id']); ?>"><span class="glyphicon glyphicon-remove-sign"></span></a></td>
		</tr>
		<?php endif; ?>
		<!-- guru -->
		<?php  
			if($guru) :
			$no = 1;
			$getWakil = 0;
			foreach($guru as $r) :
		?>
		<tr>
			<td width="10">
				<?php if(strlen($r->keterangan) != 0) : ?>
				<span data="<?= $r->keterangan; ?>" key-data="Keterangan" id-data="trChild-<?= $no; ?>" class="glyphicon glyphicon-plus-sign green btn-child"></span>
				<?php endif; ?>
			</td>

			<td><?= $r->nama; ?></td>
			<td><?= $r->jabatan; ?></td>

			<td width="10"><a hover="blue" href="<?= base_url('adminGuruStaf/editGuru/'.$r->guru_staf_id); ?>"><span class="glyphicon glyphicon-edit"></span></a></td>
			<td width="10"><a hover="red" href="<?= base_url('adminGuruStaf/deleteGuru/'.$r->guru_staf_id); ?>"><span class="glyphicon glyphicon-remove-sign"></span></a></td>
		</tr>
		<?php $no++; endforeach; ?>
		<?php elseif(!$wakil && !$guru) : ?>
		<tr>
			<td colspan="5" class="notFound">Data kosong</td>
		</tr>
		<?php endif; ?>
	</table>
</div>
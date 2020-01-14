<div class="tenagaPendidik marginTop60px">
	<div class="container">
		<h3 class="judulAbuAbu alignCenter">Staf Karyawan</h3>
		<hr>
		<div class="col-12">
			<table class="table table-bordered">
				<tr class="success">
					<th width="10">No</th>
					<th>Nama Karyawan</th>
					<th>Jabatan</th>
				</tr>
				<?php if($staf) : $no=1; foreach($staf as $r) : ?>
				<tr>
					<td><?= $no; ?></td>
					<td><?= $r->nama; ?></td>
					<td><?= $r->jabatan; ?></td>
				</tr>
				<?php $no++; endforeach; ?>
				<?php else: ?>
				<tr>
					<td colspan="3" class="notFound">Data kosong</td>
				</tr>
				<?php endif; ?>
			</table>

		</div>
	</div>
</div>
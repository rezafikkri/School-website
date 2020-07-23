<div class="tenagaPendidik cf marginTop60px">
	<div class="container">
		<h3 class="judulAbuAbu alignCenter">Tenaga Pendidik</h3>
		<hr>
		<div class="col-12">
			<table class="table table-bordered">
				<tr class="success">
					<th colspan="2">Nama Guru</th>
					<th>Jabatan</th>
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
				</tr>
				<?php endif; ?>
				<!-- guru -->
				<?php if($guru) : $no=1; foreach($guru as $r) : ?>
				<tr>
					<td width="10">
						<?php if(strlen($r->keterangan) != 0) : ?>
						<span data="<?= $r->keterangan; ?>" key-data="Keterangan" id-data="trChild-<?= $no; ?>" class="glyphicon glyphicon-plus-sign green btn-child"></span>
						<?php endif; ?>
					</td>
					
					<td><?= $r->nama; ?></td>
					<td><?= $r->jabatan; ?></td>
				</tr>
				<?php $no++; endforeach; ?>
				<?php elseif(!$wakil && !$guru): ?>
				<tr>
					<td colspan="3" class="notFound">Data kosong</td>
				</tr>
				<?php endif; ?>
			</table>

		</div>
	</div>
</div>
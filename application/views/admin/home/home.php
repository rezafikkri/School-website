<div class="col-md-4 col-md-offfset-4 nopadding-all">
	<div class="jumbotron pengunguman bgwhite marginTop60px">
		<div class="judul"><h3>Pengunguman</h3></div>
		<div class="caption">
			<h4 class="judulPengunguman"><?= $pengunguman->judul??''; ?></h4>
			<div class="isiPengunguman">
				<?= $pengunguman->isi??'Pengunguman kosong'; ?>
			</div>
		</div>
		<div class="marginTop20px">
			<?php if($jmlPengunguman == 0) : ?>
			<a href="<?= base_url('adminHome/insertPengunguman'); ?>" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></a>
			<?php else : ?>
			<a href="<?= base_url('adminHome/editPengunguman'); ?>" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span></a>
			<?php endif; ?>
		</div>
	</div>
</div>

<div class="col-md-12 nopadding-all marginBottom50px">
	<?php if($this->uri->segment(3) === 'dataForeignKey') : ?>
	<p class="warning">Berita gagal didelete, komentar harus kosong jika ingin menghapus berita!</p>
	<?php elseif($this->uri->segment(3) === 'error') : ?>
	<p class="warning">Error, hubungi developer!</p>
	<?php endif; ?>

	<table class="table table-bordered">
		<tr class="success">
			<td colspan="6"><h3 align="center">Berita</h3></td>
		</tr>
		<tr>
			<th width="10">No</th>
			<th>Judul</th>
			<th>Tanggal</th>
			<th width="10">Komen</th>
			<th colspan="3" class="alignCenter"><a href="<?= base_url('adminHome/insertBerita'); ?>"><span class="glyphicon glyphicon-plus"></span></a></th>
		</tr>
		<?php  
			if($berita) :
			$no = 1;
			foreach($berita as $r) :
		?>
		<tr>
			<td><?= $no; ?></td>
			<td><?= $r->judulBesar; ?></td>
			<td><?= date('d M Y | H:i:s a',$r->post); ?></td>
			<td align="center"><a hover="blue" href="<?= base_url('adminHome/insertKomentar/'.$r->berita_id); ?>"><?=$this->komentar->getKomentar($r->berita_id)->num_rows(); ?></a></td>

			<td  width="10"><a hover="blue" href="<?= base_url('adminHome/editBerita/'.$r->berita_id); ?>"><span class="glyphicon glyphicon-edit"></span></a></td>
			<td  width="10"><a hover="red" href="<?= base_url('adminHome/deleteBerita/'.$r->berita_id); ?>"><span class="glyphicon glyphicon-remove-sign"></span></a></td>
		</tr>
		<?php $no++; endforeach; else : ?>
		<tr>
			<td colspan="6" class="notFound">Data kosong</td>
		</tr>
		<?php endif; ?>
	</table>
</div>

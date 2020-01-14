<div class="col-md-4 marginTop60px <?php if($this->session->userdata('SISBW')['level'] != 'superAdmin') echo 'col-md-offset-4'; ?>">
	<div class="jumbotron user bgwhite">
		<div class="keterangan">
			<table class="table marginBottom50px">
				<tr>
					<th>Nama</th>
					<td><?= $oneUser->nama??''; ?></td>
				</tr>
				<tr>
					<th>Username</th>
					<td><?= $oneUser->username??''; ?></td>
				</tr>
				<tr>
					<th>Level</th>
					<td><?= $oneUser->level??''; ?></td>
				</tr>
			</table>

			<a href="<?= base_url('adminUser/editUser/'.$oneUser->user_id); ?>" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span></a>
		</div>
	</div>
</div>

<?php if($this->session->userdata('SISBW')['level'] === 'superAdmin') : ?>
<div class="col-md-8 marginTop60px marginBottom100px">
	<table class="table table-bordered">
		<tr class="success">
			<td colspan="6"><h3 align="center">User</h3></td>
		</tr>
		<tr>
			<th width="10">No</th>
			<th>Nama</th>
			<th width="200">Login</th>
			<th width="10">Level</th>
			<th colspan="2" class="alignCenter"><a href="<?= base_url('adminUser/insertUser'); ?>"><span class="glyphicon glyphicon-plus"></span></a></th>
		</tr>
		<?php if($user) : $no=1;foreach($user as $r) : ?>
		<tr>
			<td><?= $no; ?></td>
			<td><?= $r->nama; ?></td>
			<td><?php if($r->lastLogin) echo date('d M Y | H:i:sa',$r->lastLogin)??''; ?></td>
			<td><?= $r->level; ?></td>

			<td width="10"><a hover="blue" href="<?= base_url('adminUser/editUser/'.$r->user_id); ?>"><span class="glyphicon glyphicon-edit"></span></a></td>
			<td width="10"><a hover="red" href="<?= base_url('adminUser/deleteUser/'.$r->user_id); ?>"><span class="glyphicon glyphicon-remove-sign"></span></a></td>
		</tr>
		<?php $no++; endforeach; endif; ?>
	</table>
</div>
<?php endif; ?>
<!DOCTYPE html>
<html>

<head>
	<div class="title">
		<title>daftar user</title>
		<a href="javascript:history.go(-1)">kembali</a>
		<h2 style="padding-left:15%">Daftar user</h2>
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>asset/css/daftar.css">
	</div>
</head>
<center>
	<table>
		<thead>
			<tr>
				<th style="width: 5%;padding-left:0px">No</th>
				<th style="width: 30%">Nama</th>
				<th style="width: 20%">Username</th>
				<th style="width: 20%">Role</th>
				<th style="width: 40%; ">Tindakan</th>
			</tr>
		</thead>
		<tbody>
			<?php if ($semua_user->num_rows() > 0) : ?>
				<?php $index = 1; ?>
				<?php foreach ($semua_user->result() as $user) : ?>
					<tr>
						<td style="text-align: center; padding-left:0px"><?php echo $index++; ?></td>
						<td><?php echo $user->name; ?></td>
						<td><?php echo $user->username; ?></td>
						<td><?php if ($user->role == 1) {
								echo "Admin";
							} else {
								echo "User";
							} ?></td>
						<td>
							<a href="<?php echo base_url('user/edit/' . $user->id); ?>" class="btn btn-default">Edit</a>
							<a href="<?php echo base_url('user/hapus/' . $user->id); ?>" class="btn btn-danger">Hapus</a>
						</td>
					</tr>
				<?php endforeach; ?>
			<?php else : ?>
				<tr>
					<td style="text-align: center;" colspan="6">Data tidak tersedia</td>
				</tr>
			<?php endif; ?>
		</tbody>
	</table><br>
	<button><a style="text-decoration: none;" href="<?php echo base_url('user/tambah'); ?>">Tambah</a></button>
</center>

</html>
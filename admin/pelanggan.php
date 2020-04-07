<h2>Akun pembeli</h2>

<table class="table table-bodered">
	<thead>
		<tr>
			<th>no</th>
			<th>nama</th>
			<th>Username</th>
			<th>telepon</th>
			<th>aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php $nomor=1; ?>
	<?php $ambil=$koneksi->query("SELECT * FROM users");?>
	<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_user']; ?></td>
			<td><?php echo $pecah['username']; ?></td>
			<td><?php echo $pecah['nomor']; ?></td>
			<td>
				<a href="" class="btn btn-danger">hapus</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>
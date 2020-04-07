<h2>Tambah Produk</h2>

<form method="post" enctype="multipart/form-data">
<div class="form-group">
	<label>nama</label>
		<input type="text" class="form-control" name="nama" >
	</div>
		<div class="form-group">
		<label>Harga (Rp)</label>
		<input min="1" type="number" class="form-control" name="harga">
	</div>
	<div class="form-group">
		<label>Jumlah Stock</label>
		<input min="1" type="number" class="form-control" name="stok">
	</div>
	<div class="form-group">
		<label>Deskrpsi</label>
		<textarea class="form-control" name="deskripsi" rows="10"></textarea>
	</div>
	  <div class="form-group">
	    <label for="exampleFormControlSelect1">Kategori</label>
	    <select class="form-control" name="kategori" id="exampleFormControlSelect1">
	      <option value="">- Silahkan Pilih -</option>
	      <option value="gunting rambut">Mesin Cukur</option>
	      <option>Gunting Rambut</option>
	      <option>Minyak Rambut</option>
	      <option>Selimut</option>
	      <option>Kursi</option>
	    </select>
	  </div>
	<div class="form-group">
		<label>Foto</label>
		<input type="file" class="form-control" name="foto">
	</div>
	<button class="btn btn-primary" name="save">Simpan</button>
	</form> 

	<?php 
	if (isset($_POST['save']))
	{
		$nama=$_FILES['foto']['name'];
		$lokasi=$_FILES['foto']['tmp_name'];
		move_uploaded_file($lokasi, "../foto_produk/".$nama);
		$koneksi->query("INSERT INTO produk
			(nama_produk,harga_produk,foto_produk,kategori,deskripsi_produk,stok)
			VALUES('$_POST[nama]','$_POST[harga]','$nama','$_POST[kategori]','$_POST[deskripsi]','$_POST[stok]')");

		echo "<div class='alert alert-info'>Data tersimpan</div>";
		echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=produk'>";
	}
	?>

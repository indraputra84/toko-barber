<h2> Ubah Produk </h2>
<?php
$ambil=$koneksi->query("SELECT * FROM produk WHERE id_produk='$_GET[id]'");
$pecah= $ambil->fetch_assoc();


?>
<form method="post" enctype="multipart/form-data">
<div class="form-group">
    <label>nama</label>
        <input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama_produk']; ?>" >
    </div>
        <div class="form-group">
        <label>Harga (Rp)</label>
        <input min="1" type="number" class="form-control" name="harga" value="<?php echo $pecah['harga_produk']; ?>">
    </div>
    <div class="form-group">
        <label>Jumlah Stock</label>
        <input min="1" type="number" class="form-control" name="stok" value="<?php echo $pecah['stok']; ?>">
    </div>
    <div class="form-group">
        <label>Deskrpsi</label>
        <textarea class="form-control" name="deskripsi" rows="10"><?php echo $pecah['deskripsi_produk']; ?></textarea>
    </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Kategori</label>
        <select class="form-control" name="kategori" id="exampleFormControlSelect1">
          <option value="<?php echo $pecah['kategori']; ?>"><?php echo $pecah['kategori']; ?></option>
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
    <button class="btn btn-primary" name="ubah">Simpan</button>
    </form> 


<?php
if (isset($_POST['ubah']))
 {
    $namafoto=$_FILES['foto']['name'];
    $lokasifoto = $_FILES['foto']['tmp_name'];
if (!empty($lokasifoto)) 
{
    move_uploaded_file($lokasifoto, "../foto_produk/$namafoto");

    $koneksi->query("UPDATE produk SET nama_produk='$_POST[nama]',
    harga_produk='$_POST[harga]',stok='$_POST[stok]',foto_produk='$namafoto',deskripsi_produk='$_POST[deskripsi]'
    WHERE id_produk='$_GET[id]'");
}
else
{
    $koneksi->query("UPDATE produk SET nama_produk='$_POST[nama]',
    harga_produk='$_POST[harga]',stok='$_POST[stok]',deskripsi_produk='$_POST[deskripsi]'
    WHERE id_produk='$_GET[id]'");
    }
    echo "<script>alert('Data Telah Diubah');</script>";
    echo "<script>location='index.php?halaman=produk';</script>";
}
?>
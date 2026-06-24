<?php
session_start();
if(!isset($_SESSION['admin'])) header("Location: ../login.php");
include '../koneksi.php';
$id = $_GET['id'];
$ambil = mysqli_query($koneksi, "SELECT * FROM menu WHERE id='$id'");
$m = mysqli_fetch_assoc($ambil);

if(isset($_POST['update'])){
    $nama = $_POST['nama_menu'];
    $jenis = $_POST['jenis'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    mysqli_query($koneksi, "UPDATE menu SET nama_menu='$nama', jenis='$jenis', harga='$harga', stok='$stok' WHERE id='$id'");
    header("Location: ../dashboard.php");
}
?>
<h2>Edit Data Menu</h2>
<form method="post">
    <p>Nama Menu: <input type="text" name="nama_menu" value="<?= $m['nama_menu'] ?>" required></p>
    <p>Jenis: <select name="jenis" required>
        <option value="Makanan" <?= $m['jenis']=='Makanan'?'selected':'' ?>>Makanan</option>
        <option value="Minuman" <?= $m['jenis']=='Minuman'?'selected':'' ?>>Minuman</option>
    </select></p>
    <p>Harga: <input type="number" name="harga" value="<?= $m['harga'] ?>" required></p>
    <p>Stok: <input type="number" name="stok" value="<?= $m['stok'] ?>" required></p>
    <button type="submit" name="update">Simpan Perubahan</button>
</form>
<a href="../dashboard.php">Kembali</a>

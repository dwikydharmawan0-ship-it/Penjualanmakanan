<?php
session_start();
if(!isset($_SESSION['admin'])) header("Location: ../login.php");
include '../koneksi.php';

if(isset($_POST['simpan'])){
    $nama = $_POST['nama_menu'];
    $jenis = $_POST['jenis'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    mysqli_query($koneksi, "INSERT INTO menu (nama_menu, jenis, harga, stok) VALUES ('$nama', '$jenis', '$harga', '$stok')");
    header("Location: ../dashboard.php");
}
?>
<h2>Tambah Menu Baru</h2>
<form method="post">
    <p>Nama Menu: <input type="text" name="nama_menu" required></p>
    <p>Jenis: <select name="jenis" required>
        <option value="Makanan">Makanan</option>
        <option value="Minuman">Minuman</option>
    </select></p>
    <p>Harga: <input type="number" name="harga" required></p>
    <p>Stok: <input type="number" name="stok" required></p>
    <button type="submit" name="simpan">Simpan</button>
</form>
<a href="../dashboard.php">Kembali</a>

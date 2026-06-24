<?php
include 'koneksi.php';
$nama = $_POST['nama'];
$id = $_POST['id_menu'];
$jumlah = $_POST['jumlah'];

echo "<h3>Pesanan Berhasil!</h3>";
echo "<p>Terima kasih $nama, pesanan kamu akan segera kami siapkan.</p>";
echo "<p><a href='index.php'>Kembali ke halaman utama</a></p>";
?>

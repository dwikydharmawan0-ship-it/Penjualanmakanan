<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit;
}
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>
</head>
<body>
    <h2>📋 Kelola Data Menu</h2>
    <a href="admimakanan/tambah.php">+ Tambah Menu Baru</a>
    <a href="logout.php" style="margin-left:20px;">Keluar</a>

    <table border="1" cellpadding="8" cellspacing="0" width="100%" style="margin-top:20px;">
        <tr>
            <th>No</th>
            <th>Nama Menu</th>
            <th>Jenis</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM menu");
        while($m = mysqli_fetch_assoc($data)){
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $m['nama_menu'] ?></td>
            <td><?= $m['jenis'] ?></td>
            <td>Rp <?= number_format($m['harga'],0,',','.') ?></td>
            <td><?= $m['stok'] ?></td>
            <td>
                <a href="admimakanan/edit.php?id=<?= $m['id'] ?>">Edit</a> |
                <a href="admimakanan/hapus.php?id=<?= $m['id'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>

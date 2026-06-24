<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Toko Penjualan Makanan</title>
    <style>
        body { font-family: Arial; max-width: 800px; margin: auto; padding: 20px; }
        .card { border: 1px solid #ddd; padding: 15px; margin: 10px 0; border-radius: 8px; }
    </style>
</head>
<body>
    <h1>🍜 Toko Makanan & Minuman Segar</h1>
    <p>Berikut daftar menu yang tersedia:</p>

    <?php
    $query = mysqli_query($koneksi, "SELECT * FROM menu");
    while($m = mysqli_fetch_assoc($query)){
    ?>
    <div class="card">
        <h3><?= $m['nama_menu'] ?></h3>
        <p>Jenis: <?= $m['jenis'] ?></p>
        <p>Harga: Rp <?= number_format($m['harga'],0,',','.') ?></p>
        <p>Stok: <?= $m['stok'] ?> porsi</p>
    </div>
    <?php } ?>

    <br>
    <a href="login.php">Login Admin</a> | <a href="pesan.php">Pesan Sekarang</a>
</body>
</html>

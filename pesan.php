<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Pemesanan</title>
</head>
<body>
    <h2>🛒 Form Pemesanan Makanan</h2>
    <form action="proses_pesan.php" method="post">
        <p>Nama Pemesan: <input type="text" name="nama" required></p>
        <p>Pilih Menu:
            <select name="id_menu" required>
                <?php
                $list = mysqli_query($koneksi, "SELECT * FROM menu");
                while($l = mysqli_fetch_assoc($list)){
                    echo "<option value='$l[id]'>$l[nama_menu] - Rp ".number_format($l['harga'],0,',','.')."</option>";
                }
                ?>
            </select>
        </p>
        <p>Jumlah Porsi: <input type="number" name="jumlah" min="1" required></p>
        <button type="submit">Pesan Sekarang</button>
    </form>
    <p><a href="index.php">Kembali</a></p>
</body>
</html>

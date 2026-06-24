CREATE DATABASE IF NOT EXISTS toko_makanan;
USE toko_makanan;

CREATE TABLE IF NOT EXISTS menu (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_menu VARCHAR(100) NOT NULL,
    jenis VARCHAR(50) NOT NULL,
    harga INT NOT NULL,
    stok INT NOT NULL
);

INSERT INTO menu (nama_menu, jenis, harga, stok) VALUES
('Ayam Geprek', 'Makanan', 15000, 30),
('Mie Ayam', 'Makanan', 12000, 40),
('Bakso', 'Makanan', 13000, 35),
('Es Teh', 'Minuman', 5000, 50),
('Es Milo', 'Minuman', 8000, 45);

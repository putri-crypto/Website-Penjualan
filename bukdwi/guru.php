<?php
// FILE: guru.php (Katalog Sparepart Tanpa Batas Stok)
$sparepart = [
    ["nama_barang" => "1 Set Shock-Spiner-Dasi Beat Esp", "harga" => 500000, "stok" => 5],
    ["nama_barang" => "Behel Beat Esp", "harga" => 87000, "stok" => 10],
    ["nama_barang" => "Biled Aes Turbo Beat", "harga" => 1650000, "stok" => 4],
    ["nama_barang" => "Body Samping Kanan Beat Esp", "harga" => 360000, "stok" => 6],
    ["nama_barang" => "Body Samping Kiri Beat Esp", "harga" => 360000, "stok" => 6],
    ["nama_barang" => "Cover Stoplamp Carbon", "harga" => 94000, "stok" => 15],
    ["nama_barang" => "Dasi Buta Beat Esp", "harga" => 98000, "stok" => 10],
    ["nama_barang" => "Dbs Crome Shock", "harga" => 230000, "stok" => 8],
    ["nama_barang" => "Kulit Jok Pmauto X Carbon", "harga" => 140000, "stok" => 20],
    ["nama_barang" => "Piringan Cakram 260MM", "harga" => 92000, "stok" => 15],
    ["nama_barang" => "Shock Depan JRP", "harga" => 439000, "stok" => 5],
    ["nama_barang" => "Stoplamp Lazzy Beat Esp RGB", "harga" => 669000, "stok" => 7],
    ["nama_barang" => "Tutup Kipas Spiner", "harga" => 102000, "stok" => 12],
    ["nama_barang" => "Velg VND Ring 14 Bintang Laut", "harga" => 1740000, "stok" => 3],
    ["nama_barang" => "Velg VND Ring 17 AK55", "harga" => 1650000, "stok" => 3]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Katalog Sparepart</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'navbar.php'; ?>

<main>
    <h2>Pilih Barang Belanjaan</h2>
    
    <form action="checkout.php" method="POST">
        <table>
            <tr>
                <th>No</th>
                <th>Pilih</th>
                <th>Nama Barang</th>
                <th>Harga Satuan</th>
                <th>Jumlah Beli</th>
            </tr>
            <?php foreach ($sparepart as $i => $item) { ?>
            <tr>
                <td style="text-align: center; font-weight: bold;"><?= $i + 1; ?></td>

                <td style="text-align: center;">
                    <input type="checkbox" name="beli[<?= $i ?>][pilih]" value="1">
                    <input type="hidden" name="beli[<?= $i ?>][nama]" value="<?= $item['nama_barang']; ?>">
                    <input type="hidden" name="beli[<?= $i ?>][harga]" value="<?= $item['harga']; ?>">
                </td>
                
                <td><?= $item['nama_barang']; ?></td>
                <td>Rp <?= number_format($item['harga'], 0, ',', '.'); ?></td>
                
                <td style="text-align: center;">
                    <input type="number" name="beli[<?= $i ?>][jumlah]" value="1" min="1" style="width: 60px; text-align: center; padding: 5px; border-radius: 5px; border: 1px solid #ccc;">
                </td>
            </tr>
            <?php } ?>
        </table>

        <button type="submit" class="submit-btn">Masuk ke Keranjang &raquo;</button>
    </form>

    <div style="margin-top: 20px; text-align: center;">
        <a href="index.php" style="text-decoration: none; color: #004aad; font-weight: bold;">&laquo; Kembali ke Beranda</a>
    </div>
</main>
</body>
</html>
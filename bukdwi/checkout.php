<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Keranjang Belanja</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'navbar.php'; ?>

<main>
    <h2>Keranjang Belanja Anda</h2>

    <?php
    if (isset($_POST['beli'])) {
        $total_bayar = 0;
        $ada_barang = false;
    ?>
        <table border="1" cellspacing="0" cellpadding="10" width="100%">
            <tr>
                <th>Nama Barang</th>
                <th>Harga Satuan</th>
                <th>Jumlah</th>
                <th>Subtotal</th>
            </tr>
            
            <?php
            foreach ($_POST['beli'] as $item) {
                if (isset($item['pilih'])) {
                    $ada_barang = true;
                    $nama = $item['nama'];
                    $harga = $item['harga'];
                    $jumlah = $item['jumlah'];
                    $subtotal = $harga * $jumlah;
                    $total_bayar += $subtotal;
            ?>
                <tr>
                    <td><?= $nama; ?></td>
                    <td>Rp <?= number_format($harga, 0, ',', '.'); ?></td>
                    <td style="text-align:center;"><?= $jumlah; ?></td>
                    <td>Rp <?= number_format($subtotal, 0, ',', '.'); ?></td>
                </tr>
            <?php 
                }
            }
            
            if (!$ada_barang) {
                echo "<tr><td colspan='4' style='text-align:center; color:red; font-weight:bold; padding: 20px;'>Oops! Anda belum mencentang barang apapun di katalog.</td></tr>";
            }
            ?>
        </table>

        <?php if ($ada_barang) { ?>
            <div class="total-box">
                Total Pembayaran: Rp <?= number_format($total_bayar, 0, ',', '.'); ?>
            </div>
            
            <div class="action-buttons">
                <a href="guru.php" class="btn-back">&laquo; Belanja Lagi</a>
                <button onclick="window.print()" class="btn-print">Cetak Struk 🖨️</button>
            </div>
        <?php } else { ?>
             <div class="action-buttons">
                <a href="guru.php" class="btn-back">Kembali ke Katalog</a>
            </div>
        <?php } ?>

    <?php
    } else {
        echo "<div style='text-align:center; padding: 40px;'>";
        echo "<p style='font-size:18px; margin-bottom: 20px; color: #666;'>Keranjang belanja Anda masih kosong.</p>";
        echo "<a href='guru.php' class='btn-print' style='text-decoration:none;'>Mulai Belanja Sekarang &raquo;</a>";
        echo "</div>";
    }
    ?>
</main>


</body>
</html>
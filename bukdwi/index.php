<?php
$galeri_foto = [
    "foto1.jpg", "foto2.jpg", "foto3.jpg", "foto4.jpg", "foto5.jpg",
    "foto6.jpg", "foto7.jpg", "foto8.jpg", "foto9.jpg", "foto10.jpg",
    "foto11.jpg", "foto12.jpg", "foto13.jpg", "foto14.jpg", "foto15.jpg"
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Beranda - Spaper Motor Beat Eps</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'navbar.php'; ?>

<main>
    <h2>Performa Maksimal untuk Motor Kesayangan Anda</h2>
    
    <p style="text-align:center; margin-top:10px; margin-bottom: 30px;">
        Pusat penjualan sparepart motor terlengkap dan berkualitas. 
        Kami menyediakan suku cadang original untuk menjamin keamanan dan kenyamanan berkendara.
    </p>

    <div style="text-align:center; margin-bottom: 40px;">
        <h3 class="section-title">Video Highlight</h3>
        <br>
        <video width="600" controls autoplay muted loop style="border-radius:10px; max-width: 100%; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
            <source src="sin.mp4" type="video/mp4">
        </video>
    </div>

    <div style="text-align:center; margin-bottom: 40px;">
        <h3 class="section-title">Detail Produk Terlaris</h3>
        <br>
        <img src="super.jpg" alt="Foto Produk Utama" style="width: 600px; max-width: 100%; border-radius:10px; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
    </div>

    <div style="text-align:center; margin-bottom: 10px;">
        <h3 class="section-title">Koleksi Foto Produk</h3>
        <p style="font-size: 14px; color: #666;">(Geser ke samping untuk melihat lebih banyak)</p>
    </div>

    <div class="gallery-scroll">
        <?php foreach ($galeri_foto as $foto) : ?>
            <img src="<?= $foto; ?>" alt="Foto Produk">
        <?php endforeach; ?>
    </div>
    
    <div style="text-align:center; margin-top: 40px; margin-bottom: 20px;">
        <a href="guru.php" style="text-decoration: none; background: linear-gradient(45deg, #ad0076, #ff00b3); color: white; padding: 15px 30px; border-radius: 50px; font-weight: bold; font-size: 1.1em; box-shadow: 0 4px 10px rgba(173, 0, 118, 0.3);">Lihat Katalog Produk &raquo;</a>
    </div>
</main>

<footer style="background: linear-gradient(90deg, #ad0076, #ff00b3) !important; color: white !important; text-align: center; padding: 20px; margin-top: 30px;">
    <p>&copy; | Melaju Lebih Cepat, Lebih Aman!</p>
</footer>

</body>
</html>
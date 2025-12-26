<?php
session_start();
$info_produk = [
    [
        "nama" => "1 Set Shock, Spinner, & Dasi (Honda Beat ESP)",
        "deskripsi" => "Paket modifikasi lengkap untuk bagian depan Beat ESP. Terdiri dari shockbreaker empuk, cover kipas (spinner) yang unik, dan dasi depan untuk tampilan yang lebih sporty dan senada secara instan."
    ],
    [
        "nama" => "Behel Belakang (Honda Beat ESP)",
        "deskripsi" => "Pegangan belakang yang kokoh dan presisi. Dibuat dari material logam berkualitas tinggi dengan cat yang awet, memberikan kenyamanan dan keamanan bagi pembonceng."
    ],
    [
        "nama" => "Lampu Biled AES Turbo (Honda Beat)",
        "deskripsi" => "Upgrade penerangan maksimal dengan teknologi Bi-LED AES Turbo. Menghasilkan cahaya yang sangat terang, fokus, dan jangkauan jauh. Sangat membantu visibilitas saat berkendara di malam hari."
    ],
    [
        "nama" => "Body Samping Kanan (Honda Beat ESP)",
        "deskripsi" => "Cover body bagian kanan dengan kualitas setara original (OEM). Presisi saat dipasang, bahan plastik ABS kuat, dan warna cat yang tidak mudah pudar terkena panas matahari."
    ],
    [
        "nama" => "Body Samping Kiri (Honda Beat ESP)",
        "deskripsi" => "Cover body bagian kiri untuk menggantikan body lama yang lecet atau pecah. Melindungi komponen kelistrikan dan mesin, serta mengembalikan tampilan motor menjadi seperti baru."
    ],
    [
        "nama" => "Cover Stoplamp Motif Carbon",
        "deskripsi" => "Pelindung lampu belakang dengan finishing motif carbon celup (WTP) yang mengkilap. Memberikan aksen mewah, racing, dan agresif pada tampilan belakang motor Anda."
    ],
    [
        "nama" => "Dasi Buta (Honda Beat ESP)",
        "deskripsi" => "Panel depan (dasi) model buta tanpa lubang plat nomor. Sangat cocok untuk modifikasi gaya Thailook atau Street Racing yang menginginkan tampilan depan yang lebih 'clean' dan rapi."
    ],
    [
        "nama" => "Shockbreaker DBS Chrome",
        "deskripsi" => "Suspensi belakang dengan finishing chrome yang elegan dan mengkilap. Didesain untuk meredam guncangan dengan baik, cocok untuk penggunaan harian maupun kontes modifikasi."
    ],
    [
        "nama" => "Kulit Jok PM Auto X Carbon",
        "deskripsi" => "Pelapis jok premium dengan kombinasi tekstur carbon dan material anti-slip. Nyaman diduduki, tidak panas, dan membuat tampilan jok motor terlihat lebih garang."
    ],
    [
        "nama" => "Piringan Cakram Lebar 260MM",
        "deskripsi" => "Disc brake dengan diameter lebih lebar (260mm) untuk pengereman yang lebih pakem dan responsif. Desain floating yang stylish juga mempercantik area kaki-kaki depan."
    ],
    [
        "nama" => "Shock Depan JRP",
        "deskripsi" => "Tabung shock depan variasi model JRP yang populer. Memberikan tampilan 'stance' yang keren dengan rebound suspensi yang tetap stabil untuk manuver di jalan raya."
    ],
    [
        "nama" => "Stoplamp Lazy Eyes RGB (Beat ESP)",
        "deskripsi" => "Lampu belakang custom dengan model 'Lazy Eyes' yang futuristik. Dilengkapi fitur RGB yang warnanya bisa berubah, membuat motor tampil beda dan menjadi pusat perhatian."
    ],
    [
        "nama" => "Tutup Kipas Spinner",
        "deskripsi" => "Cover kipas mesin dengan desain spinner yang bisa berputar saat motor berjalan atau terkena angin. Aksesoris unik yang menambah estetika dinamis pada area mesin samping."
    ],
    [
        "nama" => "Velg VND Ring 14 Model Bintang Laut",
        "deskripsi" => "Velg racing premium dengan desain palang menyerupai bintang laut. Bobot ringan namun material sangat kuat (SNI), meningkatkan handling motor dan tampilan secara drastis."
    ],
    [
        "nama" => "Velg VND Ring 17 Model AK55",
        "deskripsi" => "Velg ukuran ring 17 model AK55 yang ramping dan aerodinamis. Pilihan utama untuk modifikasi gaya Drag Look atau Thailook dengan penggunaan ban profil tipis."
    ]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Keunggulan Produk - Spaper Motor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'navbar.php'; ?>

<main>
    <h2>Info & Keunggulan Produk Kami</h2>
    
    <div style="max-width: 800px; margin: 0 auto;">
        <?php foreach ($info_produk as $item): ?>
            <div class="berita-card" style="margin-bottom: 20px;">
                <h3 style="color: #d32f2f;"><?php echo $item['nama']; ?></h3>
                
                <hr style="border: 0; border-top: 2px solid #ffeb3b; margin: 10px 0;">
                
                <p style="line-height: 1.6; color: #555;"><?php echo $item['deskripsi']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>

    <div style="text-align:center; margin-top: 40px;">
        <a href="guru.php" style="text-decoration: none; background-color: #333; color: white; padding: 10px 20px; border-radius: 5px;">Cek Harga & Stok di Katalog &raquo;</a>
    </div>
</main>
</body>
</html>
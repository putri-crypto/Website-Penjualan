<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kontak Kami</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'navbar.php'; ?>

<main>
    <h2>📞 Hubungi Kami 📝</h2>
    <div class="contact-info">
        <p>Jika Anda memiliki pertanyaan atau ingin mendapatkan informasi lebih lanjut, silakan hubungi kami melalui:</p>
        <p>Bisa langsung ke Alamat yang tertera di bawah:</p>
        <ul>
            <li><strong>Alamat:</strong> Jl. Pendidikan No. 123</li>
            <li><strong>Telepon:</strong> 085669546796</li>
            <li><strong>Email:</strong> pp8959407@gmail.com</li>
            <li><strong>Jam Operasional:</strong> Senin - Jumat, 08:00 - 15:00 WIB</li>
        </ul>
    </div>

    <h3>Kirim Pesan Cepat</h3>
    <form action="#" method="POST" class="contact-form">
        <div class="form-group">
            <label for="nama">Nama Lengkap:</label>
            <input type="text" id="nama" name="nama" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="pesan">Pesan Anda:</label>
            <textarea id="pesan" name="pesan" rows="5" required></textarea>
        </div>
        <button type="submit" class="submit-btn">Kirim Pesan</button>
    </form>
</main>
</body>
</html>
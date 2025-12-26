<?php
session_start();

$message = '';
$is_success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = htmlspecialchars(trim($_POST['email']));
    if (!empty($email)) {
        $message = "✅ Tautan reset password telah dikirim ke **" . $email . "**. Silakan cek kotak masuk Anda (termasuk folder spam).";
        $is_success = true;
    } else {
        $message = "❌ Mohon masukkan alamat email yang valid.";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Lupa Password - TK Negeri Maju Bersama</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'navbar.php'; ?>

<main>
    <h2>❓ Lupa Password? </h2>
    <div class="login-container">
        <p class="reset-intro">Masukkan alamat email Anda yang terdaftar. Kami akan mengirimkan tautan untuk mengatur ulang kata sandi Anda.</p>

        <?php if ($message): ?>
            <p class="reset-message <?php echo $is_success ? 'success' : 'error'; ?>">
                <?php echo $message; ?>
            </p>
        <?php endif; ?>

        <?php if (!$is_success): ?>
            <form action="lupa_password.php" method="POST" class="login-form">
                <div class="form-group">
                    <label for="email">Email Anda:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <button type="submit" class="submit-btn reset-btn">Kirim Tautan Reset</button>
            </form>
        <?php endif; ?>
        
        <div class="login-options">
            <a href="login.php" class="forgot-link">&laquo; Kembali ke Login</a>
        </div>
        
    </div>
</main>
</body>
</html>
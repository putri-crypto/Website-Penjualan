<?php
session_start();

$success = '';
$error = '';

$data_file = 'user_data.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
    
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        $error = "❌ Konfirmasi Password tidak cocok.";
    } elseif (empty($username) || empty($email) || empty($password)) {
        $error = "❌ Semua kolom harus diisi.";
    } else {
        $new_user_data = [
            'username' => $username,
            'email'    => $email,
            'password' => $password
        ];

        $php_string = '<?php $valid_user_data = ' . var_export($new_user_data, true) . '; ?>';
        
        if (file_put_contents($data_file, $php_string) !== false) {
            $success = "✅ Akun berhasil didaftarkan! Silakan login.";
            header('Location: login.php?registered=true');
            exit();
        } else {
            $error = "❌ Gagal menyimpan data pengguna. Cek izin folder.";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Registrasi Akun</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'navbar.php'; ?>

<main>
    <h2>📝 Pendaftaran Akun Baru 📝</h2>
    <div class="login-container">

        <?php if ($error): ?>
            <p class="login-error"><?php echo $error; ?></p>
        <?php endif; ?>
        
        <?php if ($success): ?>
            <p class="login-success"><?php echo $success; ?></p>
        <?php endif; ?>

        <form action="register.php" method="POST" class="login-form">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Ulangi Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>
            
            <button type="submit" class="submit-btn login-btn">Daftar Sekarang</button>
        </form>
        
        <div class="login-options">
            <a href="login.php" class="forgot-link">Sudah punya akun? Login di sini.</a> 
        </div>
        
    </div>
</main>
</body>
</html>
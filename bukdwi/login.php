<?php
session_start();

$data_file = 'user_data.php';

if (file_exists($data_file)) {
    include $data_file;
} else {
    
    $valid_user_data = [
        'username' => 'admin',
        'email'    => 'admin@majubersama.com',
        'password' => 'password123' 
    ];
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['identifier']) && isset($_POST['password'])) {
    
    $identifier = trim($_POST['identifier']);
    $password = $_POST['password'];

    $is_valid_username = ($identifier === $valid_user_data['username']);
    $is_valid_email = ($identifier === $valid_user_data['email']);
    $is_valid_password = ($password === $valid_user_data['password']);

    if (($is_valid_username || $is_valid_email) && $is_valid_password) {
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $valid_user_data['username'];
        header('Location: index.php');
        exit();
    } else {
        $error = "❌ Username/Email atau Password salah. Silakan coba lagi.";
    }
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - Akun  Penjualan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'navbar.php'; ?>

<main>
    <h2>Halaman Login</h2>
    <div class="login-container">

        <?php if ($error): ?>
            <p class="login-error"><?php echo $error; ?></p>
        <?php endif; ?>

        <form action="login.php" method="POST" class="login-form">
            <div class="form-group">
                <label for="identifier">Username atau Email:</label>
                <input type="text" id="identifier" name="identifier" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="submit-btn login-btn">Masuk</button>
        </form>
        
        <div class="login-options">
            <a href="lupa_password.php" class="forgot-link">Lupa Password?</a> 
            <span class="option-separator">|</span>
            <a href="register.php" class="forgot-link">Belum punya akun? Registrasi</a> 
        </div>
        
    </div>
</main>
</body>
</html>
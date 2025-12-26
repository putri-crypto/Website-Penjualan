<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$uri = $_SERVER['REQUEST_URI']; 

function isActive($page_file, $uri_string) {
    if ($page_file === 'index.php') {
        if (basename($uri_string) === 'index.php' || basename($uri_string) == '') {
            return 'active';
        }
        return '';
    }
    if (strpos($uri_string, $page_file) !== false) {
        return 'active';
    }
    return '';
}

$is_logged_in = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
$login_link = $is_logged_in ? 'logout.php' : 'login.php';
$login_text = $is_logged_in ? 'Logout' : 'Login';
?>
<header>
    <h1>Sparepart Motor</h1>
    
    <div class="running-text">
        <marquee behavior="scroll" direction="left" scrollamount="7">
            PROMO SPESIAL: GANTI OLI GRATIS PENGECEKAN REM! JANGAN LUPA BELI YAAA...
        </marquee>
    </div>

    <nav>
        <a href="index.php" class="<?php echo isActive('index.php', $uri); ?>">Beranda</a>
        
        <a href="guru.php" class="<?php echo isActive('guru.php', $uri); ?>">Produk</a>
        
        <a href="checkout.php" class="<?php echo isActive('checkout.php', $uri); ?>">Keranjang</a>
        
        <a href="profil.php" class="<?php echo isActive('profil.php', $uri); ?>">Profil</a>
        <a href="berita.php" class="<?php echo isActive('berita.php', $uri); ?>">Info Produk</a>
        
        <a href="register.php" class="nav-login <?php echo isActive('register.php', $uri); ?>">Daftar</a>
        <a href="<?php echo $login_link; ?>" class="nav-login <?php echo isActive('login.php', $uri); ?>"><?php echo $login_text; ?></a>
    </nav>
</header>
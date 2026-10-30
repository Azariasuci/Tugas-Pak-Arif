
<?php
session_start();

// Jika belum login, kembali ke halaman login
if (!isset($_SESSION['id']) || !isset($_SESSION['role'])) {
    header("Location: auth/login.php");
    exit;
}

// Jika sudah login, arahkan sesuai role
$role = strtolower($_SESSION['role']);

if ($role === 'admin') {
    header("Location: admin/dashboard.php");
    exit;
} elseif ($role === 'guru') {
    header("Location: guru/dashboard.php");
    exit;
} elseif ($role === 'siswa') {
    header("Location: siswa/index.php");
    exit;
} else {
    session_unset();
    session_destroy();
    header("Location: auth/login.php");
    exit;
}
?>
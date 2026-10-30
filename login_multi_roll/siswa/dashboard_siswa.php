<?php 
session_start(); 

// CEK OTORISASI (PENTING!) 
if (!isset($_SESSION['role'])) {    
    // Jika belum login, tendang ke halaman login    
    header("Location: ../auth/login.php");    
    exit; 
} 

if ($_SESSION['role'] != 'siswa') {    
    // Jika login tapi bukan admin, hentikan script!    
    die("Akses Ditolak! Anda bukan Siswa. <a href='../auth/logout.php'>Logout</a>");
}
?> 

<!DOCTYPE html> 
<html> 
    <head>
        <meta charset="UTF-8">
        <title>Dashboard Siswa</title>
        <link rel="stylesheet" href="../style.css">
    </head> 

    <body>    
        <div class="profile-box">
            <h1>💎 Selamat Datang, Siswa sekolah yg imut kiyut <?php echo $_SESSION['nama']; ?> </h1>    

            <p>🐺 Anda login sebagai <?php echo $_SESSION['username']; ?> ✨</p>    
            
            <!-- Tombol Logout -->    
            <a class="btn-logout" href="../auth/logout.php">Logout</a>

        <h3>Profil Pengguna</h3>
        <p><strong>Nama:</strong> <?php echo $_SESSION['nama']; ?></p>
        <p><strong>Username:</strong> <?php echo $_SESSION['username']; ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($_SESSION['email'] ?? 'Email belum tersedia'); ?></p>
        <p><strong>Role:</strong> Administrator</p>
        </div>
    </body> 
</html>
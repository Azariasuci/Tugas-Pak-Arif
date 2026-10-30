<?php 
session_start(); 
require_once '../config/koneksi.php'; 

if (isset($_POST['login'])) {    
    $username = $_POST['username'];    
    $password = $_POST['password'];

    // Cari user berdasarkan username    
    $query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");    
    
    // Jika user ditemukan (jumlah baris > 0)    
    if (mysqli_num_rows($query) === 1) {        
        $row = mysqli_fetch_assoc($query);        
        
        // Cek kecocokan password menggunakan password_verify()        
        if (password_verify($password, $row['password'])) {            
            
            // PRAKTIKUM 8: SETUP SESSION DI SINI NANTI            
            $_SESSION['id'] = $row['id'];            
            $_SESSION['nama'] = $row['nama'];            
            $_SESSION['username'] = $row['username'];            
            $_SESSION['role'] = $row['role'];
            $_SESSION['email'] = $row['email'];            
            
            // PRAKTIKUM 9: REDIRECT MULTI ROLE DI SINI NANTI            
            if ($row['role'] == 'admin') {                
                header("Location: ../admin/dashboard.php");            
            } elseif ($row['role'] == 'guru') {                
                header("Location: ../guru/dashboard_guru.php");            
                } else {                
                    header("Location: ../siswa/dashboard_siswa.php");           
                     }            
                     exit;        
                     
                     } else {           
                        $error = "Password salah!";        
                        }    
                        } else {        
                            $error = "Username tidak terdaftar!";    
                        } 
                    } 
                ?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | SchoolHub</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="login-wrapper">
        <div class="login-card">

            <h1 style="text-align: center;">
                Selamat Datang!
            </h1>

            <p style="text-align: center;">
                Sistem Informasi Sekolah
            </p>

            <?php if (isset($error)) : ?>
                <div class="login-error">
                    <?= htmlspecialchars($error) ?>
                </div>
            <?php endif; ?>

            <form method="POST" action="">
                <label for="username">Username</label>
                <input
                    type="text"
                    id="username"
                    name="username"
                    placeholder="Masukkan username"
                    required
                >

                <label for="password">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Masukkan password"
                    required
                >

                <button type="submit" name="login" class="btn">
                    Login Sekarang →
                </button>
                <p class="register-link">
                    Belum punya akun?
                <a href="register.php">Daftar di sini</a>
                </p>
            </form>

        </div>
    </div>
</body>
</html>


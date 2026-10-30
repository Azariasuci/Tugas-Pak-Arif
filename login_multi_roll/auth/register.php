<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User</title>
    <style>
        /* Reset dasar agar tampilan konsisten di semua browser */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Mengatur background dan memposisikan form di tengah layar */
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        /* Desain kotak form (Card) */
        .register-card {
            background: #ffffff;
            width: 100%;
            max-width: 450px;
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05); /* Efek bayangan lembut */
        }

        .register-card h2 {
            text-align: center;
            color: #1f2937;
            margin-bottom: 25px;
            font-size: 24px;
        }

        /* Grup input untuk mengatur jarak antar field */
        .input-group {
            margin-bottom: 10px;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
            color: #4b5563;
            font-size: 14px;
            font-weight: 600;
        }

        /* Styling untuk input teks, email, password, dan select */
        .input-group input, 
        .input-group select {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 15px;
            color: #374151;
            background-color: #f9fafb;
            transition: all 0.3s ease;
        }

        /* Efek ketika input sedang diisi (Fokus) */
        .input-group input:focus, 
        .input-group select:focus {
            outline: none;
            border-color: #3b82f6; /* Warna biru modern */
            background-color: #ffffff;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
        }

        /* Styling Tombol Submit */
        button {
            width: 100%;
            padding: 12px;
            background-color: #3b82f6;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 10px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #2563eb; /* Warna biru lebih gelap saat di-hover */
        }

        /* Styling teks link login di bawah */
        .login-link {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #6b7280;
        }

        .login-link a {
            color: #3b82f6;
            text-decoration: none;
            font-weight: 600;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        /* Responsif untuk layar HP kecil */
        @media (max-width: 480px) {
            .register-card {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>

    <!-- Container Card untuk Form -->
    <div class="register-card">
        <h2>Form Pendaftaran</h2>
        
        <form action="proses_register.php" method="POST">
            
            <div class="input-group">
         <label for="nama">Nama Lengkap:</label>
                <input type="text" id="nama" name="nama" required placeholder="Masukkan nama lengkap">
            </div>

            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required placeholder="Pilih username">
            </div>

            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required placeholder="contoh@email.com">
            </div>

            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required placeholder="Buat password">
            </div>

            <div class="input-group">
                <label for="konfirmasi_password">Konfirmasi Password:</label>
                <input type="password" id="konfirmasi_password" name="konfirmasi_password" required placeholder="Ulangi password">
            </div>
            <div class="input-group">
                <label for="role">Daftar Sebagai:</label>
                <select id="role" name="role" required>
                    <option value="" disabled selected>-- Pilih ROLE --</option>
                    <option value="siswa">Siswa</option>
                    <option value="guru">Guru</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <button type="submit">Daftar Sekarang</button>
        </form>

        <p class="login-link">Sudah punya akun? <a href="login.php">Login di sini</a></p>
    </div>

</body>
</html>
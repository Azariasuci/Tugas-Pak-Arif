<?php 
// untuk menjalankan kode PHP
$data_siswa = [    
    // Untuk menyimpan kumpulan data siswa dalam sebuah array
    ["nama" => "Ahmad Fauzi",      "nilai" => 85],    
    ["nama" => "Bunga Lestari",    "nilai" => 70],    
    ["nama" => "Chandra Wijaya",   "nilai" => 92],    
    ["nama" => "Dewi Sartika",     "nilai" => 78],    
    ["nama" => "Eko Prasetyo",     "nilai" => 65],    
    ["nama" => "Fathur Rahman",    "nilai" => 88],    
    ["nama" => "Gita Permata",     "nilai" => 74],    
    ["nama" => "Hadi Saputra",     "nilai" => 80],    
    ["nama" => "Indah Kusuma",     "nilai" => 95],    
    ["nama" => "Joko Susilo",      "nilai" => 60]
    // Untuk memasukkan data nama dan nilai setiap siswa ke dalam array $data_siswa
    ]; 
    // Untuk menutup array $data_siswa
    
    echo "<h3>Laporan Evaluasi Hasil Belajar Siswa (KKM = 75)</h3>"; 
    // Untuk menampilkan judul laporan evaluasi hasil belajar siswa dengan KKM 75
    echo "<table border='1' cellpadding='8' style='border-collapse: collapse; width: 100%;'>"; 
    // Untuk membuat tabel dan mengatur tampilan tabel agar rapi
    echo "<tr style='background:#1e293b; color:white;'><th>No</th><th>Nama Siswa</th><th>Nilai Akhir</th><th>Status Kelulusan</th></tr>";
    // Untuk membuat baris judul tabel yang berisi No, Nama Siswa, Nilai Akhir, dan Status Kelulusan
    
    $no = 1; 
    // untuk menentukan nomor awal data siswa
    foreach ($data_siswa as $siswa) {  
        //  Untuk mengulang dan mengambil setiap data siswa dari array $data_siswa satu per satu
        if ($siswa['nilai'] >= 75) { 
            // Untuk mengecek apakah nilai siswa mencapai atau lebih dari KKM 75     
            $status = "<span style='color:#059669; font-weight:bold;'>LULUS</span>"; 
            // Untuk menyimpan status “LULUS” dengan warna hijau dan tulisan tebal ke dalam variabel $status
            } else {  
                // untuk menjalankan perintah jika kondisi if tidak terpenuhi      
                $status = "<span style='color:#dc2626; font-weight:bold;'>REMEDIAL</span>";  
                // Untuk menyimpan status “REMEDIAL” dengan warna merah dan tulisan tebal ke dalam variabel $status 
                }        
                
                echo "<tr>";
                //  Untuk membuat satu baris baru pada tabel
                echo "<td align='center'>" . $no++ . "</td>";
                // Untuk menampilkan nomor siswa di dalam tabel dengan posisi rata tengah dan menambah nomor secara otomatis   
                echo "<td align='center'><strong>" . $siswa['nilai'] . "</strong></td>"; 
                // Untuk menampilkan nilai siswa di dalam tabel dengan posisi rata tengah dan tulisan tebal
                echo "<td>" . $status . "</td>";
                // Untuk menampilkan status kelulusan siswa pada kolom tabel
                echo "</tr>"; 
                // Untuk menutup baris tabel yang telah dibuat
                }
                // Untuk menutup proses perulangan foreach.
                
                echo "</table>"; 
                // ntuk menutup tabel yang telah dibuat
        ?>
        // Untuk menandai akhir dari kode PHP.
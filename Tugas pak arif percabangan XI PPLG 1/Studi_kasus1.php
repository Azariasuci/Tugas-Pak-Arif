<!DOCTYPE html> 
// Untuk menyatakan bahwa dokumen menggunakan HTML5.
<html lang="id"> 
    // Untuk menandai awal dokumen HTML dan menentukan bahwa bahasa yang digunakan adalah Bahasa Indonesia
<head> 
    // Untuk menyimpan informasi dan pengaturan halaman web yang tidak langsung ditampilkan
    <meta charset="UTF-8"> 
    // ntuk mengatur format karakter agar teks dan simbol dapat ditampilkan dengan benar
    <title>Studi Kasus 1 - Sistem Kasir Mini</title>
    // Untuk menentukan judul halaman yang ditampilkan pada tab browser
    <style>
    // Untuk menuliskan kode CSS yang digunakan mengatur tampilan halaman web

        table { width: 100%; border-collapse: collapse; margin-top: 10px }
        // Untuk mengatur lebar tabel menjadi 100%, menggabungkan garis tabel, dan memberi jarak 10px di bagian atas tabel
        th, td { border: 1px solid #cbd5e1; padding: 8px 12px; } th { background-color: #0f172a; color: white; text-align: left; } 
        // Untuk mengatur garis batas dan jarak isi pada sel tabel
        // Untuk mengatur warna latar, warna teks, dan posisi teks pada judul kolom tabel
        .total-row { background-color: #e2e8f0; font-weight: bold; }
        // Untuk mengatur tampilan baris total agar memiliki warna latar belakang dan tulisan menjadi tebal
        </style>
        // Untuk menutup bagian CSS yang ditulis di dalam tag style
</head>
// Untuk menutup bagian <head> pada dokumen HTML
<body>
    // Untuk menampilkan isi atau konten halaman web kepada pengguna

    <h2>Sistem Kasir Mini — SMK Mart</h2>
    //  Untuk menampilkan judul “Sistem Kasir Mini — SMK Mart” pada halaman web
    <?php 
    // Untuk menandai awal kode PHP.

    $produk = [ 
        // Untuk membuat variabel $produk yang digunakan untuk menyimpan kumpulan data produk dalam bentuk array
        ["nama" => "Beras Setra Ramos 5 Kg", "harga" => 74500],
        ["nama" => "Minyak Goreng Bimoli 2L", "harga" => 35000], 
        ["nama" => "Gula Pasir Gulaku 1 Kg", "harga" => 17500], 
        ["nama" => "Teh Celup Sosro Box", "harga" => 11000], 
        ["nama" => "Kopi Kapal Api Spesial", "harga" => 14500], 
        ["nama" => "Indomie Goreng Spesial", "harga" => 3100], 
        ["nama" => "Susu Kental Manis Indomilk","harga" => 12500], 
        ["nama" => "Sabun Mandi Lifebuoy", "harga" => 4500], 
        ["nama" => "Shampo Clear Men 160ml", "harga" => 24000], 
        ["nama" => "Pasta Gigi Pepsodent", "harga" => 13500] 
        // Untuk menyimpan nama dan harga produk ke dalam array
]; 
// Untuk menutup array $produk
?>
// Untuk menandai akhir dari kode PHP

<table>
// Untuk membuat tabel pada halaman web
    <tr> 
    // Untuk membuat baris pada tabel

        <th style="width: 10%;">No</th> 
        // Untuk membuat judul kolom “No” dengan lebar kolom sebesar 10%
        <th>Nama Produk</th> 
        // untukntuk membuat judul kolom “Nama Produk” pada tabel
        <th style="width: 25%;">Harga Satuan (Rp)</th> 
        // untuk membuat judul kolom tabel
    </tr> 
    // Untuk menutup baris tabel
    <?php 
    // Untuk menandai awal kode PHP

    $total_harga = 0;
    // Untuk menentukan nilai awal total harga menjadi 0
    
    foreach ($produk as $item) {
        // Untuk mengulang setiap data produk dalam array $produk
         echo "<tr>";
         // ntuk menampilkan dan membuat baris baru pada tabel
         echo "<td style='text-align:center;'>" . $no++ . "</td>"; 
         echo "<td>" . $item['nama'] . "</td>"; 
        // untuk mengambil nama produk.
         echo "<td>Rp " . number_format($item['harga'], 0, ',', '.') . "</td>"; 
         // Untuk menampilkan nomor produk pada tabel dengan posisi rata tengah dan menambah nomor secara otomatis
         echo "</tr>"; 
         // Untuk menutup baris tabel yang telah dibuat
        
         $total_harga += $item['harga']; 
         // Untuk menambahkan harga setiap produk ke dalam total harga
         } 
         // Untuk menutup perulangan foreach
         ?> 
         // Untuk menandai akhir dari kode PHP

         <tr class="total-row">
         // Untuk membuat baris total pada tabel dan menerapkan style dari .total-row
            <td colspan="2" style="text-align: right;">TOTAL PEMBELIAN:</td> 
            // untuk mengatur tampilan elemen secara langsung.
            <td>Rp <?php echo number_format($total_harga, 0, ',', '.'); ?></td>
            // Untuk menampilkan total harga dalam tabel dengan format Rupiah
        </tr> 
    </table> 
    // untuk menutup tabel.
</body> 
// untuk menutup bagian isi halaman.
</html>
// untuk menutup dokumen HTML.
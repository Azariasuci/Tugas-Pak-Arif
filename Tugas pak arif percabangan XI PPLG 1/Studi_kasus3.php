<?php 
// untuk menjalankan kode hp
echo "<h3>Generator Kode Tiket Bioskop Studio 1 (A001 - A100)</h3>"; 
// Untuk menampilkan judul “Generator Kode Tiket Bioskop Studio 1 (A001 - A100)” pada halaman web.
echo "<div style='display:flex; flex-wrap:wrap; gap:5px;'>"; 
//Untuk membuat wadah <div> dan mengatur tata letak isi di dalamnya agar tersusun rapi, bisa berpindah baris, serta memiliki jarak 5px antar elemen.

for ($i = 1; $i <= 100; $i++) {    
    // Membentuk format 3 digit dengan angka nol di depan    
    $nomor_tiket = "A" . str_pad($i, 3, "0", STR_PAD_LEFT);  
    //Untuk membuat nomor tiket dengan format 3 digit yang diawali huruf “A”, misalnya A001, A002, sampai A100.
    
    echo "<span style='background:#1e40af; color:white; padding:4px 8px; border-radius:4px; fontsize:11px;'>";
    //Untuk membuat tampilan setiap nomor tiket berbentuk kotak dengan latar biru, tulisan putih, jarak dalam 4px 8px, dan sudut yang melengkung.
    echo $nomor_tiket;   
    //Untuk menampilkan nomor/kode tiket yang sudah dibuat, seperti A001, A002, A003, dan seterusnya. 
    echo "</span> ";
    //Untuk menutup tag <span> setelah kode tiket ditampilkan.

} 
echo 
//untuk menampilkan tulisan atau HTML ke halaman
"</div>"; 
//Untuk menutup tag <div> yang digunakan sebagai wadah atau tempat kumpulan kode tiket.
?>
//Untuk menandai akhir dari kode PHP.
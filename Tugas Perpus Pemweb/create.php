
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $filename = "uploads/Buku.txt";
    $buku = $_POST['kode']."-".$_POST['judul']."-".$_POST['pengarang']."-".$_POST['tahun']."-".$_POST['jumlah']."-".$_POST['penerbit']."-".$_POST['kategori']."\n";

    
    $file = fopen($filename, "a");
    
    if (file_put_contents($filename, $buku, FILE_APPEND) > 0) {
        echo "File '$filename' Telah Berhasil Disimpan.";
    } else {
        echo "Gagal Membuka File.";
    }
}
?>
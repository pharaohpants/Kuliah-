<?php 
$host ="localhost";
$user ="root";
$pass = "";
$database ="belajar";

$koneksi=mysqli_connect($host,$user,$pass);
if ($koneksi){
    $buka=mysqli_select_db($koneksi,$database);
    echo "Database Dapat Terhubung";
    if (!$buka){
        echo "Database Tidak Dapat Terhubung";
    }
}
else {
    echo "MySQL Tidak Terhubung";
}
?>
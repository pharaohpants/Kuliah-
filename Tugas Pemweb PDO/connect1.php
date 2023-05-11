<?php 
$dbHost ="localhost";
$dbUser ="root";
$dbPass = "";
$dbName ="belajar";

try{
$koneksi=new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass); 

$koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $err){
    echo "MYSQL Tidak Terhubung : " . $err->getMessage();
}

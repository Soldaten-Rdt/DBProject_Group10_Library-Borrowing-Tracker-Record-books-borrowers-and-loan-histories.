<?php 
$sName = "127.0.0.1";
$uName = "root";
$spass = "admin";
$db_name = "perpustakaan_db";

try {
    $conn = new PDO("mysql:host=$sName;port=3307;dbname=$db_name",
                    $uName, $spass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Koneksi Gagal : ". $e->getMessage();
}
?>

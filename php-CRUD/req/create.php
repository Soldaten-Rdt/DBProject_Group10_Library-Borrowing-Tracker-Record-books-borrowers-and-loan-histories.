<?php
if (
    isset($_POST['nama_panggilan']) &&
    isset($_POST['nama_panjang']) &&
    isset($_POST['jenis_kelamin']) &&
    isset($_POST['id_provinsi']) &&
    isset($_POST['rt']) &&
    isset($_POST['rw'])
) {

    include "../db_conn.php";

    $nama_panggilan = $_POST['nama_panggilan'];
    $nama_panjang = $_POST['nama_panjang'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $id_provinsi = $_POST['id_provinsi'];
    $rt = $_POST['rt'];
    $rw = $_POST['rw'];
    $denda = $_POST['denda'] !== "" ? $_POST['denda'] : 0;

    if (
        empty($nama_panggilan) || empty($nama_panjang) ||
        empty($jenis_kelamin) || empty($id_provinsi) ||
        empty($rt) || empty($rw)
    ) {
        $error = "Tolong isi semua field required (*)";
        header("Location: ../create.php?error=$error");
        exit;
    }

    try {
        $sql = "INSERT INTO users 
                (nama_panggilan, nama_panjang, jenis_kelamin, id_provinsi, rt, rw, denda)
                VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            $nama_panggilan,
            $nama_panjang,
            $jenis_kelamin,
            $id_provinsi,
            $rt,
            $rw,
            $denda
        ]);

        header("Location: ../create.php?success=User berhasil ditambahkan!");
        exit;
    } catch (PDOException $e) {
        header("Location: ../create.php?error=" . $e->getMessage());
        exit;
    }

} else {
    header("Location: ../create.php");
    exit;
}
?>

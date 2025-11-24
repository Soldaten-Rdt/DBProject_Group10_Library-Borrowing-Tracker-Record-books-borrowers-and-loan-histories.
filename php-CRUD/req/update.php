<?php
if (
    isset($_POST['user_id']) &&
    isset($_POST['nama_panggilan']) &&
    isset($_POST['nama_panjang']) &&
    isset($_POST['jenis_kelamin']) &&
    isset($_POST['id_provinsi']) &&
    isset($_POST['rt']) &&
    isset($_POST['rw'])
) {

    include "../db_conn.php";

    $user_id = $_POST['user_id'];
    $nama_panggilan = $_POST['nama_panggilan'];
    $nama_panjang = $_POST['nama_panjang'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $id_provinsi = $_POST['id_provinsi'];
    $rt = $_POST['rt'];
    $rw = $_POST['rw'];
    $denda = $_POST['denda'] !== "" ? $_POST['denda'] : 0;

    try {
        $sql = "UPDATE users SET
                nama_panggilan=?, nama_panjang=?, jenis_kelamin=?, 
                id_provinsi=?, rt=?, rw=?, denda=?
                WHERE user_id=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            $nama_panggilan, $nama_panjang, $jenis_kelamin,
            $id_provinsi, $rt, $rw, $denda,
            $user_id
        ]);

        header("Location: ../update.php?id=$user_id&success=Berhasil update data!");
        exit;
    } catch(PDOException $e) {
        header("Location: ../update.php?id=$user_id&error=" . $e->getMessage());
        exit;
    }

} else {
    header("Location: ../index.php");
    exit;
}
?>

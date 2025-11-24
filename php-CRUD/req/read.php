<?php
function read($conn) {
    $sql = "SELECT u.*, p.nama_provinsi, p.kota, p.kecamatan
            FROM users u
            LEFT JOIN provinsi p ON u.id_provinsi = p.id_provinsi
            ORDER BY u.user_id DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}

function readById($conn, $id) {
    $sql = "SELECT u.*, p.nama_provinsi, p.kota, p.kecamatan
            FROM users u
            LEFT JOIN provinsi p ON u.id_provinsi = p.id_provinsi
            WHERE u.user_id=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetch();
}
?>

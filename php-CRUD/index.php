<?php 
// PERBAIKAN 1: Include HARUS di atas sebelum menggunakan fungsi/variabel
include "db_conn.php";  // FIXED: Path tanpa ../
include "req/read.php"; // FIXED: Urutan dipindah ke atas

// Sekarang baru panggil fungsi
$users = read($conn);
$title = "Daftar Pengguna";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1><?= $title ?></h1>
        
        <?php if (isset($_GET['success'])) { ?>
            <p class="success"><?= htmlspecialchars($_GET['success']) ?></p>
        <?php } ?>
        
        <a href="create.php" class="btn-create">+ Tambah User Baru</a>
        
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Panggilan</th>
                    <th>Nama Panjang</th>
                    <th>Jenis Kelamin</th>
                    <th>Provinsi</th>
                    <th>Kota</th>
                    <th>Kecamatan</th>
                    <th>RT</th>
                    <th>RW</th>
                    <th>Denda</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                // PERBAIKAN 2: Loop data dan tampilkan
                if ($users && is_array($users)) {
                    foreach ($users as $user) { ?>
                        <tr>
                            <td><?= htmlspecialchars($user['user_id']) ?></td>
                            <td><?= htmlspecialchars($user['nama_panggilan']) ?></td>
                            <td><?= htmlspecialchars($user['nama_panjang']) ?></td>
                            <td><?= htmlspecialchars($user['jenis_kelamin']) ?></td>
                            <td><?= htmlspecialchars($user['nama_provinsi']) ?></td>
                            <td><?= htmlspecialchars($user['kota']) ?></td>
                            <td><?= htmlspecialchars($user['kecamatan']) ?></td>
                            <td><?= htmlspecialchars($user['rt']) ?></td>
                            <td><?= htmlspecialchars($user['rw']) ?></td>
                            <td>Rp <?= number_format($user['denda'], 0, ',', '.') ?></td>
                            <td>
                                <a href="update.php?id=<?= $user['user_id'] ?>" class="btn-edit">Edit</a>
                                <a href="req/delete.php?id=<?= $user['user_id'] ?>" 
                                   class="btn-delete"
                                   onclick="return confirm('Yakin hapus user ini?')">Hapus</a>
                            </td>
                        </tr>
                    <?php }
                } else { ?>
                    <tr>
                        <td colspan="11" style="text-align: center;">Tidak ada data</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php 
include "db_conn.php";
include "req/read.php";

if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

$user = readById($conn, $_GET['id']);

if (!$user) {
    header("Location: index.php?error=User tidak ditemukan");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit User</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="form-holder">
        <a href="index.php" class="link">← Kembali ke Daftar</a>
        <h3>Edit User</h3>
        
        <form action="req/update.php" method="POST">
            <?php if (isset($_GET['error'])) { ?>
                <p class="error">
                    <?= htmlspecialchars($_GET['error']) ?>
                </p>
            <?php } ?>

            <?php if (isset($_GET['success'])) { ?>
                <p class="success">
                    <?= htmlspecialchars($_GET['success']) ?>
                </p>
            <?php } ?>
            
            <input type="hidden" name="user_id" value="<?= $user['user_id'] ?>">
            
            <label>Nama Panggilan *</label>
            <input type="text" name="nama_panggilan" value="<?= htmlspecialchars($user['nama_panggilan']) ?>" required><br>

            <label>Nama Panjang *</label>
            <input type="text" name="nama_panjang" value="<?= htmlspecialchars($user['nama_panjang']) ?>" required><br>

            <label>Jenis Kelamin *</label>
            <select name="jenis_kelamin" required>
                <option value="L" <?= $user['jenis_kelamin'] == 'L' ? 'selected' : '' ?>>Laki-laki</option>
                <option value="P" <?= $user['jenis_kelamin'] == 'P' ? 'selected' : '' ?>>Perempuan</option>
            </select><br>

            <label>Provinsi *</label>
          <select name="id_provinsi" required>
    <?php
    $stmt = $conn->query("SELECT * FROM provinsi ORDER BY nama_provinsi ASC");
    foreach ($stmt as $row):
    ?>
        <option value="<?= $row['id_provinsi'] ?>"
            <?= $row['id_provinsi'] == $user['id_provinsi'] ? "selected" : "" ?>>
            <?= $row['nama_provinsi'] . " - " . $row['kota'] . " - " . $row['kecamatan'] ?>
        </option>
    <?php endforeach; ?>
</select><br>

            <label>Kota *</label>
            <input type="text" name="kota" value="<?= htmlspecialchars($user['kota']) ?>" required><br>

            <label>Kecamatan *</label>
            <input type="text" name="kecamatan" value="<?= htmlspecialchars($user['kecamatan']) ?>" required><br>

            <label>RT *</label>
            <input type="text" name="rt" value="<?= htmlspecialchars($user['rt']) ?>" required><br>

            <label>RW *</label>
            <input type="text" name="rw" value="<?= htmlspecialchars($user['rw']) ?>" required><br>

            <label>Denda</label>
            <input type="number" name="denda" value="<?= $user['denda'] ?>" min="0"><br>

            <button type="submit" class="btn-create">Update</button>
        </form>
    </div>
</body>
</html>
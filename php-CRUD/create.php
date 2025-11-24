<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah User Baru</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="form-holder">
        <a href="index.php" class="link">← Kembali ke Daftar</a>
        <h3>Tambah User Baru</h3>
        
        <form action="req/create.php" method="POST">
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
            
            <!-- PERBAIKAN 3: Field names sesuai dengan backend -->
            <label>Nama Panggilan *</label>
            <input type="text" name="nama_panggilan" required><br>

            <label>Nama Panjang *</label>
            <input type="text" name="nama_panjang" required><br>

            <label>Jenis Kelamin *</label>
            <select name="jenis_kelamin" required>
                <option value="">-- Pilih --</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select><br>

            <label>Provinsi - Kota - Kecamatan *</label>
            <select name="id_provinsi" required>
            <option value="">-- Pilih Wilayah --</option>
            <?php
            include "db_conn.php";
            $stmt = $conn->query("SELECT * FROM provinsi ORDER BY nama_provinsi ASC");
            foreach ($stmt as $row) {
            ?>

                <option value="<?= $row['id_provinsi'] ?>">
                    <?=  $row['nama_provinsi'] . " - " . $row['kota'] . " - " . $row['kecamatan'] ?>
                </option>
                <?php } ?>
            </select><br>
            

            <label>RT *</label>
            <input type="text" name="rt" required><br>

            <label>RW *</label>
            <input type="text" name="rw" required><br>

            <label>Denda (opsional)</label>
            <input type="number" name="denda" value="0" min="0"><br>

            <button type="submit" class="btn-create">Simpan</button>
        </form>
    </div>
</body>
</html>

<?php
require 'function.php';

if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

//ambil id dari url
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$m = query("SELECT * FROM mahasiswa WHERE id = $id");

// cek apakah tombol submit sudah di tekan
if (isset($_POST["ubah"])) {

    //cek apakah data berhasil di ubah atau tidak
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil di ubah')
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
        <script>
            alert('data berhasil di ubah')
            document.location.href = 'index.php';
        </script>
        ";
    }
};
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data</title>
</head>

<body>

    <h1>Form Ubah Data Mahasiswa</h1>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $m['id']; ?>">
        <ul>
            <li>
                <label for="nrp">NRP:</label>
                <input type="text" name="nrp" id="nrp" value="<?= $m['nrp']; ?>" required>
            </li>
            <li>
                <label for="nama">Nama:</label>
                <input type="text" name="nama" id="nama" value="<?= $m['nama']; ?>" required>
            </li>
            <li>
                <label for=" email">Email:</label>
                <input type="text" name="email" id="email" value="<?= $m['email']; ?>" required>
            </li>
            <li>
                <label for=" jurusan">Jurusan:</label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $m['jurusan']; ?>" required>
            </li>
            <li>
                <label for=" gambar">Gambar:</label>
                <input type="text" name="gambar" id="gambar" value="<?= $m['gambar']; ?>" required>
            </li>
            <li>
                <button type=" submit" name="ubah">Ubah Data</button>
            </li>
        </ul>

    </form>
</body>

</html>
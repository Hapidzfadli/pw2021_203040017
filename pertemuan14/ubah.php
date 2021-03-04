<?php 
require 'function.php';

// ambil data id di url
$id = $_GET['id'];

// query data mahasiswa berdasarkan id

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];



// cek apakah tombol submit sudah di tekan
if (isset($_POST["submit"])) {
    

    //cek apakah data berhasil di ubah atau tidak
    if(ubah($_POST) > 0 ){
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

<h1>Ubah Data Mahasiswa</h1>
    <form action="" method="POST" enctype="multipart/form-data">       
        
    <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
    <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">
    <ul>
        <li>
            <label for="nrp">NRP:</label>
            <input type="text" name="nrp" id="nrp" required value="<?= $mhs["nrp"]; ?>">
        </li>
        <li>
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>">
        </li>
        <li>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" required value="<?= $mhs["email"]; ?>">
        </li>
        <li>
            <label for="jurusan">Jurusan:</label>
            <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"]; ?>">
        </li>
        <li>
            <label for="gambar">Gambar:</label>
            <img src="img/<?= $mhs['gambar']; ?>" width="30">
            <input type="file" name="gambar" id="gambar">
        </li>
        <li>
        <button type="submit" name="submit">Ubah Data</button>
        </li>
    </ul>

    </form>
</body>
</html>
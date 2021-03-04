<?php 
require 'function.php';

$mahasiswa = query("SELECT * FROM mahasiswa"); // diurutkan berdasarkan nama ASC dari yang terkecil dan DESC dari yang terbesar
// $mahasiswa = query("SELECT * FROM mahasiswa WHERE nrp 123454321");(tampil secara spesifik)

// tombol cari di klik

if( isset($_POST["cari"])){
    $mahasiswa = cari($_POST["keyword"]);
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>
<a href="tambah.php">Tambah Data Mahasiswa</a>
<br><br>

<form action="" method="post">
    <input type="text" name="keyword" size="40" autofocus placeholder="masukan keyword pecarian.." autocomplete="off">
    <button type="submit" name="cari">Cari...</button>
   
</form>
<br> <br>
<table border="1" cellpadding='10' cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>
    <?php $i = 1;?>
    
    <?php foreach ($mahasiswa as $row) :?>
    
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="ubah.php?id=<?= $row["id"];?>">Ubah</a> |
            <a href="hapus.php?id=<?= $row["id"];?> " onclick="return confirm('Yakin?');">Hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"]; ?>"  width="50"></td>
        <td><?= $row["nrp"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
    </tr>
    <?php $i++;?>
    
    <?php endforeach; ?>
    
</table> 
</body>
</html>
<?php 
// koneksi ke database
$db = mysqli_connect("localhost", "root", "","phpdasar");

//Ambil data dari tabel Mahasiswa
$result = mysqli_query($db, "SELECT * FROM mahasiswa");

//ambil data (fetch mahasiswa dari object result)
// myqli_fetch_row() // mengembalikan array numerik [1]
// mysqli_fetch_assoc() // mengembalikan array asosiatif ["email"]
// mysqli_fetch_array() // mengembalikan numerik dan asosiatif
// mysqli_fetch_object() // mengembalikan object -> nama

// $mhs = mysqli_fetch_assoc($result);
// var_dump($mhs);

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
    
    <?php while( $row = mysqli_fetch_assoc($result)) :?>
    
    <tr>
        <td><?= $row["id"]; ?></td>
        <td>
            <a href="">Ubah</a> |
            <a href="">Hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"]; ?>"  width="50"></td>
        <td><?= $row["nrp"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurursan"]; ?></td>
    </tr>
    <?php $i++;?>
    
    <?php endwhile; ?>
    
</table> 
</body>
</html>
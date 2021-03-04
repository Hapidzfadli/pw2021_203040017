<?php 
// $mahasiswa = [['Hapid Fadli', '009', 'Sistem Informasi', 'hapidzfadli@gmail.com'],['HEdia HArisma', '009', 'Sistem Informasi', 'hapidzfadli@gmail.com']];

//Array Associative
//key-nya adalah string yang di buat kita buat sendiri

$mahasiswa = [
    [
    "nama" => "Hapid Fadli",
    "nrp" => "045555",
    "email" => "hapidzfadli@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "hapidz.png"
    ],
    [
        "nama" => "Hedi Harisma",
        "nrp" => "045555",
        "email" => "hapidzfadli@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "hapidz.png"
    ]
];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
     <h3>Daftar Mahasiswa</h3>

     <!-- <ul> Komentarrr
         <?php foreach($mahasiswa as $mhs): ?>
            <li><?= $mhs; ?></li>
         <?php endforeach; ?>
     </ul> -->

     <?php foreach($mahasiswa as $mhs): ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama: <?= $mhs["nama"]; ?></li>
            <li>NRP: <?= $mhs["nrp"]; ?></li>
            <li>Jurusan: <?= $mhs["jurusan"]; ?></li>
            <li>Email: <?= $mhs["email"]; ?></li>
        </ul>
        <?php endforeach; ?>
</body>
</html>
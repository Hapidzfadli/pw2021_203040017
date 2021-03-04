<?php 
$mahasiswa = [['Hapid Fadli', '009', 'Sistem Informasi', 'hapidzfadli@gmail.com'],['HEdia HArisma', '009', 'Sistem Informasi', 'hapidzfadli@gmail.com']];
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
            <li>Nama: <?= $mhs[0]; ?></li>
            <li>NRP: <?= $mhs[1]; ?></li>
            <li>Jurusan: <?= $mhs[2]; ?></li>
            <li>Email: <?= $mhs[3]; ?></li>
        </ul>
        <?php endforeach; ?>
</body>
</html>
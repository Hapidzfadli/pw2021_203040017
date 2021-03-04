<?php
// Variabel Scope / Lingkup Variabel

// $x = 10;

// function tampilX(){
//     global $x; // variabel global
//     echo $x;
// }

// tampilX();

$handphone = [
    [
        "merek" => "Xiaomi",
        "seri" => "Redmi 4X",
        "warna" => "Putih",
        "ram" => "2GB",
        "gambar" => "xiaomi.jpg"
    ],
    [
        "merek" => "Realme",
        "seri" => "XT",
        "warna" => "Putih",
        "ram" => "8GB",
        "gambar" => "xiaomi.jpg"
    ]

];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Handphone</title>
</head>
<body>
    <h1>Daftar Handphone</h1>

    <ul>
    <?php foreach($handphone as $hp) : ?>
            <li><a href="latihan2.php?merek=<?= $hp["merek"] ?>&seri=<?= $hp["seri"] ?>&warna=<?= $hp["warna"] ?>&ram=<?= $hp["ram"] ?>">Merek : <?= $hp["merek"] ?></a></li>
        
    <?php endforeach; ?>
    </ul>
    
</body>
</html>
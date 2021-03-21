<?php
$pemain = ["Mohammad Salah", "Cristiano Ronaldo", "Lionel Messi", "Zlatan Ibrahimovic", "Neymar Jr"];

function terkenal()
{
    global $pemain;
    foreach ($pemain as $nama) {
        echo "<li>$nama</li>";
    }
}

function baruTerkenal()
{
    global $pemain;
    sort($pemain);
    array_push($pemain, "Luka Modric", "Sadio Mane");
    foreach ($pemain as $nama) {
        echo "<li>$nama</li>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Daftar Pemain Bola Terkenal</h3>
    <ol>
        <?= terkenal(); ?>
    </ol>

    <h3>Daftar pemain bola terkenal baru</h3>
    <ol>
        <?= baruTerkenal(); ?>
    </ol>
</body>

</html>
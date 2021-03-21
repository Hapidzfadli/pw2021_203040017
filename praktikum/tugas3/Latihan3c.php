<?php

$pemainBola = [
    "Cristiano Ronaldo"     => 'Juventus',
    "Lionel Messi"          => "Barcelona",
    "Luca Modric"           => "Real Madrid",
    "Mohammad Salah"        => "Liverpool",
    "Neymar Jr"             => "Paris Saint Germain",
    "Sadio Mane"            => "Liverpool",
    "Zlatan Ibrahimovic"    => "Ac Milan"
];
function tampilkan()
{
    global $pemainBola;
    foreach ($pemainBola as $pemain => $club) {
        echo "<li><b>$pemain</b>   : $club</li>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3c</title>
</head>

<body>
    <h3>Daftar pemain bola terkenal dan clubnya</h3>
    <ul style="list-style: none;">
        <?= tampilkan(); ?>
    </ul>

</body>

</html>
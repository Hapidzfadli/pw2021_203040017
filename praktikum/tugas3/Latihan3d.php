<?php
$pemainBola = [
    "Cristiano Ronaldo"     => [
        "Club"      => "Juventus",
        "Main"      => 100,
        "Gol"       => 76,
        "Assist"    => 30
    ],
    "Lionel Messi"          => [
        "Club"      => "Barcelona",
        "Main"      => 120,
        "Gol"       => 80,
        "Assist"    => 12
    ],
    "Luca Modric"           => [
        "Club"      => "Real Madrid",
        "Main"      => 87,
        "Gol"       => 12,
        "Assist"    => 48
    ],
    "Mohammad Salah"        => [
        "Club"      => "Liverpool",
        "Main"      => 90,
        "Gol"       => 103,
        "Assist"    => 8
    ],
    "Neymar Jr"             => [
        "Club"      => "Paris Saint Germain",
        "Main"      => 109,
        "Gol"       => 56,
        "Assist"    => 15
    ],
    "Sadio Mane"            => [
        "Club"      => "Liverpool",
        "Main"      => 63,
        "Gol"       => 30,
        "Assist"    => 70
    ],
    "Zlatan Ibrahimovic"    => [
        "Club"      => "Ac Milan",
        "Main"      => 100,
        "Gol"       => 10,
        "Assist"    => 12
    ]
];

$jumlah = [];
$Main = 0;
$Gol = 0;
$Assist = 0;
$i = 1;


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3d</title>
</head>

<body>

    <table cellpadding="5" cellspacing="0" border="1">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>CLUB</th>
                <th>MAIN</th>
                <th>GOL</th>
                <th>ASSIST</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pemainBola as $pemain => $statistik) : ?>

                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $pemain ?></td>
                    <td><?= $statistik["Club"]; ?></td>
                    <td><?= $statistik["Main"]; ?></td>
                    <td><?= $statistik["Gol"]; ?></td>
                    <td><?= $statistik["Assist"]; ?></td>
                </tr>

                <!-- Jumlah -->
                <?php
                $Main += $statistik["Main"];
                $Gol += $statistik["Gol"];
                $Assist += $statistik["Assist"];
                ?>


            <?php endforeach; ?>

            <!-- Menambahkan array -->
            <?php
            (array_push($jumlah, $Main));
            (array_push($jumlah, $Gol));
            (array_push($jumlah, $Assist));
            ?>

            <!-- Jumlah Statistik -->
            <tr>
                <td>#</td>
                <td style="text-align: center;">Jumlah</td>
                <td style="border-left: none;"></td>

                <?php for ($b = 0; $b < count($jumlah); $b++) : ?>
                    <td><?= $jumlah[$b]; ?></td>
                <?php endfor; ?>


            </tr>
        </tbody>
    </table>



</body>

</html>
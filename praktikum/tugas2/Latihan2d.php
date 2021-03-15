<?php

function hitungDeterminan($style, $a, $b, $c, $d)
{
    echo "<table class='$style' cellspacing='5' cellpadding='5'>
        <tr>
            <td>$a</td>
            <td>$b</td>
        </tr>
        <tr>
            <td>$c</td>
            <td>$d</td>
        </tr>
    </table>";
    echo "<br>";
    echo "Hasil: ";
    $hasil = (($a * $d) - ($b * $c));
    echo "Determinan dari matriks tersebut adalah $hasil";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2d</title>
    <style>
        .style {
            border-right: 1px solid black;
            border-left: 1px solid black;
        }
    </style>
</head>

<body>
    <?= hitungDeterminan("style", 1, 2, 3, 4) ?>
</body>

</html>
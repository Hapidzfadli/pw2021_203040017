<?php

function bola($style)
{
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "<div class='$style'>$i</div>";
        }
        echo "<br>";
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

    <style>
        .style {
            width: 40px;
            height: 40px;
            background-color: #baf797;
            border-radius: 50%;
            line-height: 40px;
            text-align: center;
            display: inline-block;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <?= bola("style"); ?>
</body>

</html>
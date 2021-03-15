<?php

function gantiStyle($tulisan, $style1 = "style1", $style2 = "style2")
{
    return "<div class = $style2 ><p class= $style1>$tulisan</p></div>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 2a</title>

    <style>
        .style1 {
            font-size: 28px;
            font-family: Arial, sans-serif;
            color: #8c782d;
            font-style: italic;
            font-weight: bolder;
        }

        .style2 {
            padding: 0 10px;
            margin: auto;
            border: 1px solid black;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
        }
    </style>
</head>

<body>

    <?= gantiStyle("Selamat datang di praktikum PW", "style1", "style2"); ?>

</body>

</html>
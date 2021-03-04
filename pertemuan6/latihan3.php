<?php 
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
    <title>Handphone</title>

    <style>

        body {
            background-color: #c2cc95;
        }

        h1 {
            text-align: center;
            font-family: 'Balsamiq Sans', cursive;
        }
        ul {
            float: left;
            font-family: 'Shadows Into Light', sans-serif;
            
        }
        .container {
            width: 800px;
            margin: auto;
            background-color: #62d9c5;
        }
        .container li {
            list-style-type: none;
        }
        .container ul {
            width: 200px;
            height: 400px;
            border: solid 1px #d7fcf6;
            float: left;
            padding: 5px;
            
        }
        img {
            max-width: 200px;
            max-height: 200px;
        }
    </style>
</head>
<body>

    <h1>Handphone</h1>

    <div class="container">
    <?php foreach($handphone as $hp) : ?>
        <ul>
            <li>
                <img src="img/<?= $hp["gambar"] ?>" alt="" srcset="">
            </li>
            <li>Merek : <?= $hp["merek"] ?></li>
            <li>Seri: <?= $hp["seri"] ?></li>
            <li>Warna: <?= $hp["warna"] ?></li>
            <li>RAM: <?= $hp["ram"] ?></li>
        </ul>
    <?php endforeach; ?>
    </div>
    
    
</body>
</html>
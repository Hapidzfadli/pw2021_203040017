<?php
require './function/function.php';
$category = query("SELECT * FROM category");
if (isset($_GET['search'])) {
    $keyword = $_GET['keyword'];

    $barang = query("SELECT * FROM toko_item WHERE 
                    `name` LIKE '%$keyword%' OR
                    `category` LIKE '%$keyword%'");
} else {
    $barang = query("SELECT * FROM toko_item");
}


?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>ZadeSky</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/header.css">
    <link rel="stylesheet" href="./style/body.css">

</head>

<body>
    <?php
    require "./layout/header.php";
    ?>

    <?php
    require './layout/body.php'
    ?>

    <?php
    require "./layout/footer.php";
    ?>
</body>

</html>
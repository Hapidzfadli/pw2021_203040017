<?php
require './function/function.php';
if (isset($_GET['category'])) {
    $category = $_GET['category'];
    $barang = query("SELECT * FROM toko_item WHERE 
                    `category` = '$category'");
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
    <div class="container rounded mt-4 rekomendasi">
        <div class="rek-cont p-3">
            <div class="rek-title">
                <h3>REKOMENDASI</h3>
            </div>
            <div class="barang d-flex">
                <?php foreach ($barang as $brg) : ?>
                    <div class="row">
                        <div class="col">
                            <a class="link-barang" href="./detail.php?id=<?= $brg['id']; ?>">
                                <div class="card" style="width: 10.6rem; height: 20rem;">
                                    <img src="<?= $brg['img_cover']; ?>" class="card-img-top" alt="<?= $brg['name']; ?>">
                                    <div class="card-body">
                                        <p class="card-title"><?= titleBarang($brg["name"]); ?></p>
                                        <div class="har-jul d-flex justify-content-between">
                                            <p class="harga">RP <?= number_format($brg["price"], '0', '', '.'); ?></p>
                                            <p class="terjual">xxx Terjual</p>
                                        </div>
                                        <p class="lokasi"><?= $brg["location"]; ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php
    require "./layout/footer.php";
    ?>
</body>

</html>
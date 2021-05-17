<?php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}
require './function/function.php';

$id = $_GET['id'];
$barang = query("SELECT * FROM toko_item WHERE id = $id")[0];

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
    <link rel="stylesheet" href="./style/detail.css">

</head>

<body>
    <?php
    require "./layout/header.php";
    ?>

    <div class="detail container p-4">
        <div class="ctg">
            <a href="http://localhost/pw2021_203040017/praktikum/tubes/">Home</a>
            > <a href="http://localhost/pw2021_203040017/praktikum/tubes/page-category.php?category=<?= $barang['category'] ?>"><?= $barang['category'] ?></a>
        </div>
        <div class="content mt-3 d-flex">
            <div class="image">
                <div class="card " style="width: 18rem; height: 28rem;">
                    <div class="img d-flex align-items-center" style="width: 100%; height: 100%;">
                        <img class="card-img-top" src="<?= $barang['img_cover']; ?>" alt="Card image cap">
                    </div>
                </div>
            </div>
            <div class="det-produk px-4">
                <div class="judul-produk">
                    <h3><?= $barang['name']; ?></h3>
                </div>
                <div class="terjual">
                    <p>Terjual xxx</p>
                </div>
                <div class="harga-produk">
                    <p>RP <?= number_format($barang["price"], '0', '', '.'); ?></p>
                </div>
                <hr>
                <div class="deskrpsi">
                    <?= $barang['description']; ?>
                </div>
            </div>
            <div class="pesan">
                <div class="card" style="width: 18rem;">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <label for="jumlah">Masukan Total Barang</label>
                        <input type="text" name="jumlah">
                        <div class="tombol-beli d-flex flex-column justify-content-center">
                            <a href="#" class="btn btn-primary mt-2">Beli</a>
                            <a href="#" class="btn btn-secondary mt-2">+ Keranjang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    require "./layout/footer.php";
    ?>
</body>

</html>
<?php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}
require 'function.php';

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;1,300&display=swap" rel="stylesheet">

    <title>Toko Saya</title>
    <link rel="stylesheet" href="../css/detail.css">
</head>

<body>
    <header>
        <div class="main-header">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container ">
                    <a class="navbar-brand" href="http://localhost/pw2021_203040017/praktikum/tugas5/letihan5a/">Toko Saya</a>
                    <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">

                            <li class="nav-item">
                                <a class="nav-link" href="#">Tentang Toko Saya</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Mitra Toko Saya</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Mulai Berjualan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Promo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Toko Saya Care</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
    </header>
    <main>
        <div class="container d-flex mt-5">
            <div class="gambar">
                <img src="../<?= $barang["picture"]; ?>" alt="" width="240px">
            </div>
            <div class="detail">
                <div class="harga">
                    <div class="detail-judul">
                        <h3><?= $barang["name"]; ?></h3>
                        <p>Rp <?= number_format($barang["price"], '0', '', '.'); ?></p>
                    </div>
                    <div class="detail-harga"></div>
                </div>
                <hr>
                <div class="deskripsi">
                    <h6>Detail</h6>
                    <hr>
                    <p>Category: <?= $barang["category"]; ?></p>
                    <p>Deskripsi</p>
                    <p><?= $barang["description"]; ?></p>
                </div>
            </div>
            <div class="beli">

            </div>
        </div>
    </main>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>
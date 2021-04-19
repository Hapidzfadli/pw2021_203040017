<?php
require 'function.php';

$barang = query("SELECT * FROM toko_item");
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Admin</title>
    <link rel="stylesheet" href="../css/admin.css">

</head>

<body>
    <header>
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1">Halaman Admin</span>
                <a href="../index.php"><span class="mb-0">HOME</span></a>
            </div>
        </nav>
    </header>

    <main>
        <div class="main-container">
            <div class="sidebar-left">
                <ul class="list-group">
                    <a href="admin.php">
                        <li class="list-group-item active" aria-current="true">Edit Barang</li>
                    </a>
                    <a href="tambah.php">
                        <li class="list-group-item">Add Barang</li>
                    </a>
                </ul>
            </div>
            <div class="side-content">
                <?php foreach ($barang as $rows) : ?>
                    <div class="card" style="width: 14rem; margin-top: 20px; margin-right: 10px;">
                        <img src="../<?= $rows["picture"]; ?>" class="card-img-top" alt="<?= $rows["picture"]; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $rows["name"]; ?></h5>
                            <h6 class="price">Rp <?= number_format($rows["price"], '0', '', '.'); ?></h6>
                            <p class="category"><?= $rows["category"]; ?></p>
                            <div class="d-grid gap-2">
                                <a href="" class="buton">
                                    <button id="buton" class="btn btn-secondary" type="button">Ubah</button>
                                </a>
                                <a href="hapus.php?id=<?= $rows["id"]; ?>" onclick="return confirm('Yakin Hapus Data??')" class="buton">
                                    <button class="btn btn-primary" type="button">Hapus</button>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>
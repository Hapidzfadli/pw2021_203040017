<?php
session_start();
require 'function.php';


if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
        alert('Data berhasil ditambahkan');
        document.location.href = 'admin.php';
        </script>";
    } else {

        echo "<script>
        alert('Data Tidak berhasil ditambahkan');
        document.location.href = 'admin.php';
        </script>";
    }
};




?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Tambah Data</title>
    <link rel="stylesheet" href="../css/tambah.css">

</head>

<body>
    <header>
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1">Halaman Admin</span>
            </div>
        </nav>
    </header>

    <main>
        <div class="main-container">
            <div class="sidebar-left">
                <ul class="list-group">
                    <a href="admin.php">
                        <li class="list-group-item " aria-current="true">Edit Barang</li>
                    </a>
                    <a href="tambah.php">
                        <li class="list-group-item active">Add Barang</li>
                    </a>
                    <a href="logout.php">
                        <li class="list-group-item">LogOut</li>
                    </a>
                </ul>
            </div>
            <div class="side-content">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Produk</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Nama Produk" required>
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Kategori</label>
                        <input type="text" name="category" class="form-control" id="category" placeholder="category" required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Harga Produk</label>
                        <input type="text" name="price" class="form-control" id="price" placeholder="Harga Produk" required>
                    </div>
                    <div class="mb-3">
                        <label for="picture" class="form-label">Gambar</label>
                        <input type="text" name="picture" class="form-control" id="picture" placeholder="gambar" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="description" rows="3" required></textarea>
                    </div>
                    <button type="submit" name="tambah" class="btn btn-primary">Tambah Data !</button>
                </form>
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
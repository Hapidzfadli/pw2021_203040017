<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: http://localhost/pw2021_203040017/praktikum/tubes/login.php");
    exit;
}
$name = $_COOKIE['username'];


require '../function/function.php';
$id = $_GET['id'];

$user = query("SELECT * FROM user WHERE username = '$name'")[0];
$produk = query("SELECT * FROM toko_item WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
        alert('Data berhasil diubah');
        
        </script>";
    } else {
        echo "<script>
        alert('Data Tidak berhasil diubah');
        
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

    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>ZadeSKy</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <input type="checkbox" id="nav-toggle">
    <div class="sidebar" id="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la-accusoft"></span> <span>ZadeSky</span></h2>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href=""><span class="las la-igloo"></span><span>Dashboard</span></a>
                </li>
                <li>
                    <a href="produk.php" class="active"><span class="las la-shopping-bag"></span><span>Produk</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-cog"></span><span>Pengaturan</span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars" id="togle"></span>
                </label>
                Dashboard
            </h2>

            <!-- <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search here" />
            </div> -->

            <div class="user-wrapper">
                <img src="../asset/user/user.jpg" width="40px" height="40px" alt="">
                <div>
                    <h4><?= ucwords($user['firstname']); ?> <?= ucwords($user['lastname']); ?></h4>
                    <small><a href="logout.php">Logout</a></small>
                </div>
            </div>
        </header>

        <main>
            <form action="" method="POST">
                <input type="hidden" name="username" class="form-control" id="username" value="<?= $produk['username'] ?>" required>
                <input type="hidden" name="id" id="id" value="<?= $produk['id'] ?>">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Produk</label>
                    <input type="text" value="<?= $produk['name'] ?>" name="name" class="form-control" id="name" placeholder="Nama Produk" required>
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Kategori</label>
                    <input type="text" value="<?= $produk['category'] ?>" name="category" class="form-control" id="category" placeholder="category" required>
                </div>
                <div class="mb-3">
                    <label for="location" class="form-label">Lokasi</label>
                    <input type="text" value="<?= $produk['location'] ?>" name="location" class="form-control" id="location" placeholder="lokasi" required>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Harga Produk</label>
                    <input type="text" value="<?= $produk['price'] ?>" name="price" class="form-control" id="price" placeholder="Harga Produk" required>
                </div>
                <div class="mb-3">
                    <label for="picture" class="form-label">Gambar</label>
                    <input type="text" value="<?= $produk['img_cover'] ?>" name="picture" class="form-control" id="picture" placeholder="gambar" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="5" value="<?= $produk['description'] ?>"></textarea>
                </div>
                <button type="submit" name="ubah" class="btn btn-primary">Ubah Data !</button>
            </form>
        </main>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="./script.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
</body>

</html>
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: http://localhost/pw2021_203040017/praktikum/tubes/login.php");
    exit;
}
$name = $_COOKIE['username'];

require '../function/function.php';

$user = query("SELECT * FROM user WHERE username = '$name'")[0];
$produk = query("SELECT * FROM toko_item WHERE username = '$name'");
$i = 0;

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
                    <a href="admin.php"><span class="las la-igloo"></span><span>Dashboard</span></a>
                </li>
                <li>
                    <a href="" class="active"><span class="las la-shopping-bag"></span><span>Produk</span></a>
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
            <div class="produk">
                <div class="tambah d-flex">
                    <div class="jumlah-produk">
                        <h3><?= count($produk); ?> Produk</h3>
                    </div>
                    <div class="tambah-produk">
                        <a href="tambah.php"><button type="button" class="btn btn-success">Tambah Produk</button></a>
                    </div>
                </div>
                <div class="list-produk-wrap mt-4">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Nama Produk</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($produk as $prd) : ?>
                                <?php $i++; ?>
                                <tr>
                                    <th scope="row"><?= $i ?></th>
                                    <td><img src="<?= $prd['img_cover']; ?>" width="90px" alt="<?= $prd['name']; ?>"></td>
                                    <td><?= titleBarang($prd["name"]); ?></td>
                                    <td>RP <?= number_format($prd["price"], '0', '', '.'); ?></td>
                                    <td>
                                        <div class="ubah-hapus d-flex justify-content-around">
                                            <a href="ubah.php?id=<?= $prd['id']; ?>"><button type="button" class="btn btn-primary btn-sm">Ubah Produk</button></a>
                                            <a href="hapus.php?id=<?= $prd['id']; ?>"><button type="button" class="btn btn-secondary btn-sm">Hapus Produk</button></a>
                                        </div>
                                    </td>
                                </tr>


                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
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
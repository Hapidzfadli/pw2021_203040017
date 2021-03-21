<?php
// picture, name, description, price, category :

$barang = [
    [
        'picture' => './image/img-1.jpg',
        'name' => 'Whitelab Acne Calming Serum',
        'description' => 'Whitelab Acne Calming Serum diperkaya dengan Tea Tree & Centella Asiatica yang bermanfaat untuk menenangkan kulit yang iritasi & meradang akibat jerawat serta membantu mempercepat penyembuhan kulit yang berjerawat.',
        'price' => 'Rp75.000',
        'category' => 'Perawatan Wajah'
    ],
    [
        'picture' => './image/img-2.jpg',
        'name' => 'Garnier Pure Active Matcha Foam',
        'description' => 'Sabun cuci muka dengan kandungan 100x antioksidan dari ekstrak Teh Hijau Matcha. Mampu membersihkan debu polusi secara menyeluruh, mengurangi minyak berlebih dan kekusaman.',
        'price' => 'Rp23.375',
        'category' => 'Perawatan Wajah'
    ],
    [
        'picture' => './image/img-3.jpg',
        'name' => 'Buku Imam al-Junaid al-Baghdadi',
        'description' => '"Sufi terakhir adalah Imam Al-Junaid Al-Baghdadi, setelah itu tak ada satu pun nama yang pantas disebutkan."',
        'price' => 'Rp64.000',
        'category' => 'Buku Biografi'
    ],
    [
        'picture' => './image/img-4.jpg',
        'name' => 'BUKU MUKHTASHAR IHYA ULUMUDDIN',
        'description' => '“Kitab Ihya’ nyaris menjadi seperti al-Quran (karena sering dibaca).”
        (Pujian An-Nawawi terhadap Ihya’ Ulumuddin karya Al-Ghazali)',
        'price' => 'Rp144.075',
        'category' => 'Buku Agama Islam'
    ],
    [
        'picture' => './image/img-5.jpg',
        'name' => 'Buku Ar Risalah - Imam Syafii',
        'description' => 'Imam Asy-Syafii menulis Ar-Risalah dengan teliti, mendalam, setiap pendapatnya didasarkan dalil, dan mendiskusikan pendapat yang berbeda secara ilmiah, sempurna, dan mengagumkan. ',
        'price' => 'Rp95.000',
        'category' => 'Buku Agama Islam'
    ],
];



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
    <style>
        * {
            font-family: 'Open Sans', sans-serif;
        }

        nav {
            height: 32px;
            font-size: 14px;
        }

        .card {
            text-align: left;
        }

        .card-title {
            margin-bottom: 4px;
            font-size: 0.86rem;
            color: rgba(49, 53, 59, 0.96);
            max-width: 100%;
            max-height: 100%;
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: pre-wrap;
            line-height: 1.5;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;

        }

        .price {
            display: flex;
            -webkit-box-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            margin-bottom: 4px;
            color: rgba(49, 53, 59, 0.96);
            opacity: 1;
            font-size: 1rem;
            font-weight: bold;
            align-items: flex-end;
            line-height: 1.43;
        }

        .category {
            display: inline-block;
            background-color: rgb(214, 255, 222);
            border-radius: 3px;
            font-weight: bold;
            font-size: 0.714286rem;
            color: rgb(3, 172, 14);
            line-height: 1.4;
            letter-spacing: normal;
            margin-bottom: 4px;
            height: 20px;
            padding: 3px 4px 2px;
            margin-right: auto;
        }

        .buton {
            font-size: 12px;

        }

        .description {
            font-size: 14px;
            color: rgba(49, 53, 59, 0.96);
            display: none;
        }

        .description p {
            transition: ease-in-out;
        }
    </style>
</head>

<body>
    <header>
        <div class="main-header">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container ">
                    <a class="navbar-brand" href="#">Toko Saya</a>
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
        <div class="container d-flex">

            <?php for ($i = 0; $i < count($barang); $i++) : ?>
                <div class="card" style="width: 14rem; margin-top: 20px; margin-right: 10px;">
                    <img src="<?= $barang[$i]["picture"]; ?>" class="card-img-top" alt="<?= $barang[$i]["picture"]; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $barang[$i]["name"]; ?></h5>
                        <h6 class="price"><?= $barang[$i]["price"]; ?></h6>
                        <p class="category"><?= $barang[$i]["category"]; ?></p>
                        <div class="d-grid gap-2">
                            <button id="buton" class="btn btn-secondary buton" type="button" onclick="myFunction(<?= $i ?>)">Description</button>
                            <div class="description" id="description">
                                <p><?= $barang[$i]["description"]; ?></p>
                            </div>
                            <button class="btn btn-primary buton" type="button">Beli</button>
                        </div>
                    </div>
                </div>

            <?php endfor; ?>


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
    <script>
        function myFunction(i = 0) {
            var x = document.getElementsByClassName("description");
            console.log(x[0]);
            if (x[i].style.display === "none") {
                x[i].style.display = "block";
            } else {
                x[i].style.display = "none";
            }
        }
    </script>
</body>

</html>
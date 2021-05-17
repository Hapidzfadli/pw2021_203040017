<?php


?>


<div class="container rounded category d-flex flex-column mt-2 justify-content-center p-3">
    <div class="title-category">
        <h3>KATEGORI</h3>
    </div>
    <div class="list-category d-flex">
        <?php foreach ($category as $ctg) : ?>
            <div class="row">
                <div class="col">
                    <a href="http://localhost/pw2021_203040017/praktikum/tubes/page-category.php?category=<?= $ctg['judul_category']; ?>" link-ctg>
                        <div class="card d-flex justify-content-center">
                            <img class="card-img-top" src="<?= $ctg['img_category']; ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?= $ctg['judul_category']; ?></h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>



        <?php endforeach; ?>

    </div>
</div>
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
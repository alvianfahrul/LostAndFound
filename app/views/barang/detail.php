<div class="container mt-5 d-flex justify-content-center">

    <div class="card" style="width: 18rem;">
        <img src="data:image/jpg;charset=utf8;base64,<?= base64_encode($data['barang']['foto']) ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $data['barang']['nama_barang'] ?></h5>
            <p class="card-text"><?= $data['barang']['dekripsi_barang'] ?></p>
            <p class="card-text">Tempat ditemukan : <?= $data['barang']['tempat'] ?></p>
            <p class="card-text">Tanggal : <?= $data['barang']['tanggal'] ?></p>
            <a href="<?= BASEURL; ?>barang/index.php" class="btn btn-primary">Kembali</a>
        </div>
    </div>

</div>
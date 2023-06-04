<div class="container mt-4 ml-4">
    <div class="row d-flex justify-content-center">
        <div class="col-9">
            <h3>Daftar Barang</h3>
                <ul class="list-group">
                    <?php foreach($data['barang'] as $barang) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= $barang['nama_barang']; ?>
                        <a href="<?= BASEURL; ?>barang/detail/<?= $barang['id']; ?>" class="badge text-bg-primary">Detail</a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#formModal">
                Upload Barang Hilang
            </button>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Upload Barang Hilang</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action = "<?= BASEURL; ?>barang/upload" method = "post">
        <div class="mb-3">
            <label for="nama_barang" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang">
        </div>
        <div class="mb-3">
            <label for="dekripsi_barang" class="form-label">Dekripsi Barang</label>
            <textarea class="form-control" id="dekripsi_barang" name="dekripsi_barang" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="tempat" class="form-label">Tempat ditemukan</label>
            <input type="text" class="form-control" id="tempat" name="tempat">
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal ditemukan</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal">
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Foto Barang</label>
            <input class="form-control" type="file" id="foto" name="foto">
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Upload</button>

        </form>

      </div>
    </div>
  </div>
</div>
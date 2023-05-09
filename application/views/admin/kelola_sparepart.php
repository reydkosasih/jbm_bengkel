<div class="py-4">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <i class="fas fa-plus"></i> Tambah Data
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Sparepart</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?= site_url('sparepart/add_part') ?>" method="post">
                    <div class="modal-body">
                        <div class="mb-4">
                            <label for="">Kode Barang</label>
                            <input type="text" class="form-control" name="kode_barang" placeholder="Isi Kode Barang">
                        </div>
                        <div class="mb-4">
                            <label for="">Nama Barang</label>
                            <input type="text" class="form-control" name="nama_barang" placeholder="Isi Nama Barang">
                        </div>
                        <div class="mb-4">
                            <label for="">Stok</label>
                            <input type="number" class="form-control" name="stok" min="0" placeholder="Jumlah Stok">
                        </div>
                        <label for="">Harga</label>
                        <div class="input-group mb-4">
                            <span class="input-group-text">Rp.</span>
                            <input type="number" class="form-control" name="harga" min="0" placeholder="Nominal Harga">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg">
        <div class="card border-0 shadow">
            <div class="card-body">
                <div class="card-title">
                    <b>Data Service</b>
                </div>
                <table class="table table-bordered" id="dataSparepart">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Stok</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($datserv as $ds) { ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $ds->kode_barang ?></td>
                                <td><?= $ds->nama_barang ?></td>
                                <td><?= $ds->stok ?></td>
                                <td>Rp. <?= number_format($ds->harga) ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#dataSparepart').DataTable();
    });
</script>
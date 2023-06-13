<div class="py-4">
    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <i class="fas fa-plus"></i> Tambah Data
    </button> -->

    <form action="<?= site_url('sparepart/edit_part/' . $datpart->id_barang) ?>" method="post">
        <div class="modal-body">
            <input type="hidden" class="form-control" name="id_barang" value="<?= $datpart->id_barang ?>" placeholder="Isi Kode Barang">
            <div class="mb-4">
                <label for="">Kode Barang</label>
                <input type="text" class="form-control" name="kode_barang" value="<?= $datpart->kode_barang ?>" placeholder="Isi Kode Barang">
            </div>
            <div class="mb-4">
                <label for="">Nama Barang</label>
                <input type="text" class="form-control" name="nama_barang" value="<?= $datpart->nama_barang ?>" placeholder="Isi Nama Barang">
            </div>
            <div class="mb-4">
                <label for="">Stok</label>
                <input type="number" class="form-control" name="stok" min="0" value="<?= $datpart->stok ?>" placeholder="Jumlah Stok">
            </div>
            <label for="">Harga</label>
            <div class="input-group mb-4">
                <span class="input-group-text">Rp.</span>
                <input type="number" class="form-control" name="harga" min="0" value="<?= $datpart->harga ?>" placeholder="Nominal Harga">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>
<!-- <div class="row">
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
                            <th>Action</th>
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
                                <td>
                                    <div class="btn-group">
                                        <a href="<?= site_url('sparepart/delete/' . $ds->id_barang) ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                        <a href="<?= site_url('sparepart/delete/' . $ds->id_barang) ?>" class="btn btn-secondary"><i class="fas fa-edit"></i></a>
                                    </div>
                                </td>
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
</div> -->

<script>
    $(document).ready(function() {
        $('#dataSparepart').DataTable();
    });
</script>
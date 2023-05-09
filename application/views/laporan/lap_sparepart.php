<div class="py-4">
    <h5>Laporan Transaksi</h5>
    <a href="<?= site_url('laporan/cetak_part') ?>" class="btn btn-primary"><i class="fas fa-print"></i> Print</a>
</div>
<div class="row">
    <div class="col-lg">
        <div class="card border-0 shadow">
            <div class="card-body">
                <div class="card-title">
                    <b>Data Transaksi</b>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataService">
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
</div>

<script>
    $(document).ready(function() {
        $('#dataService').DataTable();
    });
</script>
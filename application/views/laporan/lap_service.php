<div class="py-4">
    <h5>Laporan Service</h5>
    <a href="" class="btn btn-primary"><i class="fas fa-print"></i> Print</a>
</div>
<div class="row">
    <div class="col-lg">
        <div class="card border-0 shadow">
            <div class="card-body">
                <div class="card-title">
                    <b>Data Service</b>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataService">
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Status</th>
                                <th>Tanggal Servis</th>
                                <th>Nama Customer</th>
                                <th>Plat Nomor</th>
                                <th>Merk Mobil</th>
                                <th>Kendaraan</th>
                                <th>Total Biaya</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 ?>
                            <?php foreach ($datserv as $ds) { ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td>
                                        <?php if ($ds->status == "Selesai") { ?>
                                            <span class="btn btn-success btn-sm rounded-pill">Selesai</span>
                                        <?php } elseif ($ds->status == "Pending") { ?>
                                            <span class="btn btn-danger btn-sm rounded-pill">Pending</span>
                                        <?php } else { ?>
                                            <span class="btn btn-secondary btn-sm rounded-pill">Perbaikan</span>
                                        <?php } ?>
                                    </td>
                                    <td><?= $ds->tgl_servis ?></td>
                                    <td><?= $ds->nama_customer ?></td>
                                    <td><?= $ds->plat_no ?></td>
                                    <td><?= $ds->merk_mobil ?></td>
                                    <td><?= $ds->nama_mobil ?></td>
                                    <td>Rp. <?= number_format($ds->total_harga) ?></td>
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
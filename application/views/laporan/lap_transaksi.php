<div class="py-4">
    <h5>Laporan Transaksi</h5>
    <a href="" class="btn btn-primary"><i class="fas fa-print"></i> Print</a>
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
                                <!-- <th>Action</th> -->
                                <th>Status</th>
                                <th>Tanggal Transaksi</th>
                                <th>Nama Customer</th>
                                <th>Total Biaya</th>
                                <th>Jumlah Bayar</th>
                                <th>Kembalian</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 ?>
                            <?php foreach ($datserv as $ds) { ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <!-- <td>
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-secondary" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown">
                                                <i class="fas fa-plus"></i>
                                            </a>
                                            <?php if ($ds->status == "Selesai") { ?>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <li><a class="dropdown-item" href="<?= site_url('service/detail_service/' . $ds->booking_id) ?>"><i class="fas fa-eye"></i> Lihat Data</a></li>
                                                    <li><a class="dropdown-item" href="<?= site_url('transaksi/cetakinv/' . $ds->booking_id) ?>"><i class="fas fa-print"></i> Cetak invoice</a></li>
                                                </ul>
                                            <?php } elseif ($ds->status == "Pending") { ?>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <li><a class="dropdown-item" href="<?= site_url('service/detail_service/' . $ds->booking_id) ?>"><i class="fas fa-eye"></i> Lihat Data</a></li>
                                                    <li><a class="dropdown-item" href="<?= site_url('service/konfirmasi_service/' . $ds->booking_id) ?>"><i class="fas fa-check"></i> Konfirmasi</a></li>
                                                </ul>
                                            <?php } else { ?>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <li><a class="dropdown-item" href="<?= site_url('service/detail_service/' . $ds->booking_id) ?>"><i class="fas fa-eye"></i> Lihat Data</a></li>
                                                    <li><a class="dropdown-item" href="<?= site_url('transaksi/cek_pembayaran/' . $ds->booking_id) ?>"><i class="fas fa-credit-card"></i> Cek Pembayaran</a></li>
                                                </ul>
                                            <?php } ?>
                                        </div>
                                    </td> -->
                                    <td>
                                        <?php if ($ds->status == "Selesai") { ?>
                                            <span class="btn btn-success btn-sm rounded-pill">Selesai</span>
                                        <?php } elseif ($ds->status == "Pending") { ?>
                                            <span class="btn btn-danger btn-sm rounded-pill">Pending</span>
                                        <?php } else { ?>
                                            <span class="btn btn-secondary btn-sm rounded-pill">Perbaikan</span>
                                        <?php } ?>
                                    </td>
                                    <td><?= $ds->tgl_transaksi ?></td>
                                    <td><?= $ds->nama_customer ?></td>
                                    <td>Rp. <?= number_format($ds->total_harga) ?></td>
                                    <td>Rp. <?= number_format($ds->jml_bayar) ?></td>
                                    <td>Rp. <?= number_format($ds->kembalian) ?></td>
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
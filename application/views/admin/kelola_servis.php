<div class="py-4">
    <!-- <div class="dropdown">
        <button class="btn btn-gray-800 d-inline-flex align-items-center me-2 dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-plus me-2"></i>Tambah Data
        </button>
        <div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-1">
            <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="fas fa-user text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20">
                </i>
                Add User
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="fas fa-layer-group text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20">
                </i>
                Add Widget
            </a>
        </div>
    </div> -->
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
                                <th>Action</th>
                                <th>Status</th>
                                <th>Tanggal Servis</th>
                                <th>Jam Servis</th>
                                <th>Nama Customer</th>
                                <th>Plat Nomor</th>
                                <th>Merk Mobil</th>
                                <th>Kendaraan</th>
                                <th>Transmisi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 ?>
                            <?php foreach ($datserv as $ds) { ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td>
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
                                    </td>
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
                                    <td><?= $ds->jam_servis ?></td>
                                    <td><?= $ds->nama_customer ?></td>
                                    <td><?= $ds->plat_no ?></td>
                                    <td><?= $ds->merk_mobil ?></td>
                                    <td><?= $ds->nama_mobil ?></td>
                                    <td><?= $ds->transmisi ?></td>
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
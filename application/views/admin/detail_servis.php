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
    <button onclick="history.back()" class="btn btn-danger"><i class="fas fa-chevron-left"></i></button>
</div>
<div class="row">
    <div class="col-lg">
        <div class="card border-0 shadow">
            <div class="card-body">
                <div class="card-title">
                    <b>Data Booking & Service</b>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <table class="table">
                            <tr>
                                <th style="font-weight: bold;">Nama Customer</th>
                                <td>: <?= $datserv->nama_customer ?></td>
                            </tr>
                            <tr>
                                <th style="font-weight: bold;">No. Telepon</th>
                                <td>: <?= $datserv->no_telp ?></td>
                            </tr>
                            <tr>
                                <th style="font-weight: bold;">Email</th>
                                <td>: <?= $datserv->email_customer ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-lg-4">
                        <table class="table">
                            <tr>
                                <th style="font-weight: bold;">Merk Mobil</th>
                                <td>: <?= $datserv->merk_mobil ?></td>
                            </tr>
                            <tr>
                                <th style="font-weight: bold;">Nama Mobil</th>
                                <td>: <?= $datserv->nama_mobil ?></td>
                            </tr>
                            <tr>
                                <th style="font-weight: bold;">Layanan</th>
                                <td>: <?= $datserv->layanan_servis ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-lg-4">
                        <table class="table">
                            <tr>
                                <th style="font-weight: bold;">Tanggal Servis</th>
                                <td>: <?= $datserv->tgl_servis ?></td>
                            </tr>
                            <tr>
                                <th style="font-weight: bold;">Jam Servis</th>
                                <td>: <?= $datserv->jam_servis ?></td>
                            </tr>
                            <tr>
                                <th style="font-weight: bold;">Keluhan</th>
                                <td>: <?= $datserv->keluhan ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <table class="table table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Action</th>
                                <th>Tanggal Transaksi</th>
                                <th>Total Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 ?>
                            <?php foreach ($detailserv as $dt) { ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td>
                                        <?php if ($tbl_user['role_id'] == 1) { ?>
                                            <a href="<?= site_url('service/detail_trans/' . $dt->booking_id) ?>" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                        <?php } else { ?>
                                            <a href="<?= site_url('service/detail_trans_user/' . $dt->booking_id) ?>" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                        <?php } ?>
                                    </td>
                                    <td><?= $dt->tgl_transaksi ?></td>
                                    <td>Rp. <?= number_format($dt->total_harga, 2) ?></td>
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
<div class="py-4">
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
                                <th>Layanan Servis</th>
                                <th>Tanggal Transaksi</th>
                                <th>Qty</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 ?>
                            <?php foreach ($detailserv as $dt) { ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= $dt->nama_barang ?></td>
                                    <td><?= $dt->tgl_transaksi ?></td>
                                    <td><?= $dt->qty ?> Pcs</td>
                                    <td>Rp. <?= number_format($dt->harga * $dt->qty, 2) ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot class="table-primary">
                            <tr>
                                <td colspan="4" style="font-weight: bold; text-align: center;">Total Harga</td>
                                <td>Rp. <?= number_format($totalhrg->total_harga, 2) ?></td>
                            </tr>
                        </tfoot>
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
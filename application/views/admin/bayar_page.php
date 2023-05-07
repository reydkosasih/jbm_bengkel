<div class="py-4">
    <h4>Pembayaran Servis</h4>
    <button onclick="history.back()" class="btn btn-danger"><i class="fas fa-chevron-left"></i></button>
</div>
<?php if ($this->session->flashdata('success')) : ?>
    <div class="alert alert-success" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
    </div>
<?php endif; ?>
<div class="row">
    <div class="card">
        <div class="card-body">
            <div class="card-title"><b>Data Pelanggan</b></div>
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
                        <tr>
                            <th style="font-weight: bold;">Merk Mobil</th>
                            <td>: <?= $datserv->merk_mobil ?></td>
                        </tr>
                        <tr>
                            <th style="font-weight: bold;">Nama Mobil</th>
                            <td>: <?= $datserv->nama_mobil ?></td>
                        </tr>
                    </table>
                    <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#inputBayar">Konfirmasi Pembayaran</a>
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
                        <tr>
                            <th style="font-weight: bold;">Layanan</th>
                            <td>: <?= $datserv->layanan_servis ?></td>
                        </tr>
                        <tr>
                            <th style="font-weight: bold;">Total Pembayaran</th>
                            <td>: Rp. <?= number_format($totalhrg->total_harga, 2) ?></td>
                        </tr>
                    </table>
                </div>
                <div class="col-lg-3">
                    <div class="card border-0 shadow" style="width: 20rem;">
                        <img src="<?= base_url('assets/img/buktipay/') . $datserv->gambar ?>" width="50%" class="card-img-top" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg">
        <div class="card border-0 shadow">
            <div class="card-body">
                <div class="card-title">
                    <b>Data Booking & Service</b>
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

<!-- Modal -->
<div class="modal fade" id="inputBayar" tabindex="-1" aria-labelledby="inputBayarLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="inputBayarLabel">Input Pembayaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-4">
                    <label for="">Total Harga</label>
                    <input class="form-control" type="text" value="<?= number_format($totalhrg->total_harga) ?>" readonly>
                    <input type="number" id="total" value="<?= $totalhrg->total_harga ?>" readonly>
                </div>
                <div class="mb-4">
                    <label for="">Masukan Nominal:</label>
                    <input class="form-control" type="number" name="jml_bayar" min="0" placeholder="0" value="">
                </div>
                <div class="mb-4">
                    <label for="">Kembalian</label>
                    <input class="form-control" type="number" id="kembalian" placeholder="0" value="0" readonly>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Simpan Data</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#dataService').DataTable();
    });
</script>
<script>
    $('.dropify').dropify({
        messages: {
            'default': 'Click or Drag and drop. Max 7 MB',
            'replace': 'Change file',
            'remove': 'Remove',
            'error': 'Ooops, something wrong happened.'
        }
    });
</script>
<script>
    function hitung() {

    }
</script>
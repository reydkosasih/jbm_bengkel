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
                        <img src="<?= base_url('assets/img/buktipay/') . $datserv->gambar ?>" width="50%" class="card-img-top" alt="Bukti Pay">
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
            <form action="<?= site_url('transaksi/konfirmasi_bayar') ?>" method="post" onsubmit="konfirm()">
                <div class="modal-body">
                    <input type="hidden" name="transaksi_id" value="<?= $totalhrg->transaksi_id ?>">
                    <input type="hidden" name="booking_id" value="<?= $datserv->booking_id ?>">
                    <input type="hidden" name="status" value="Selesai">
                    <label for="">Total Harga</label>
                    <div class="input-group mb-4">
                        <span class="input-group-text">Rp.</span>
                        <input class="form-control" type="text" value="<?= number_format($totalhrg->total_harga) ?>" readonly>
                        <input type="hidden" id="total" value="<?= $totalhrg->total_harga ?>" readonly>
                    </div>
                    <div class="mb-4">
                        <label for="">Masukan Nominal:</label>
                        <input class="form-control" type="number" name="jml_bayar" id="jml" min="0" placeholder="0" value="" onclick="hitung()" onkeyup="hitung()">
                    </div>
                    <label for="">Kembalian</label>
                    <div class="input-group mb-4">
                        <span class="input-group-text">Rp.</span>
                        <input class="form-control" type="number" name="kembalian" id="kembalian" placeholder="0" value="0" readonly>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </div>
            </form>
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
        var jml = document.getElementById('jml').value;
        var total = document.getElementById('total').value;

        var kurangi = parseInt(jml) - parseInt(total);
        document.getElementById('kembalian').value = kurangi;
    }

    function konfirm() {
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Your work has been saved',
            showConfirmButton: false,
            timer: 1500
        })
    }
</script>
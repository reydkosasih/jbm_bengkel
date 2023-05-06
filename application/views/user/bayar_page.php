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
    <div class="col-lg">
        <div class="card border-0 shadow">
            <div class="card-body">
                <div class="card-title"><b>Pilih Metode Pembayaran</b></div>
                <div class="btn-group dropend">
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#buktiBayar"><i class="fas fa-paper-plane"></i> Kirim Bukti Pembayaran</a>
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Metode Pembayaran <i class="fas fa-caret-right"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#" onclick="infocash()"><i class="fas fa-money-bill-wave"></i> Cash / Bayar Langsung</a></li>
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modalTransfer"><i class="fas fa-qrcode"></i> Transfer Online</a></li>
                        <!-- <li><a class="dropdown-item" href="<?= site_url('transaksi/transfer/' . $datserv->booking_id) ?>"><i class="fas fa-qrcode"></i> Transfer Online</a></li> -->
                    </ul>
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

<!-- Modal Transfer Online -->
<div class="modal fade" id="modalTransfer" tabindex="-1" aria-labelledby="modalTransferLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTransferLabel">Bayar Transfer Online</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <img src="<?= base_url('assets/') ?>img/qrcode.png" width="50%" class="card-img-top" alt="QR Code">
                    <div class="card-body">
                        <center>
                            <p class="card-text">Atau Transaksi Lain:</p>
                            <p class="card-text">BCA : 0010022990</p>
                            <p class="card-text">BNI : 8310293015</p>
                            <p class="card-text">Mandiri : 1231239090</p>
                            <p class="card-text">Atas Nama <b>Jaya Battery Motor</b></p>
                        </center>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#buktiBayar">Kirim Bukti Transfer</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Bukti Pembayaran -->
<div class="modal fade" id="buktiBayar" tabindex="-1" aria-labelledby="buktiBayarLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="buktiBayarLabel">Kirim Bukti Anda Disini</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= site_url('transaksi/transfer/' . $datserv->booking_id) ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="booking_id" value="<?= $datserv->booking_id ?>">
                <div class="modal-body">
                    <span class="m-0 font-weight-bold text-primary">Upload Gambar</span>
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="dropify" id="gambar" name="gambar" accept="image/png, image/jpeg, image/jpg, image/gif">
                        </div>
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
    function infocash() {
        Swal.fire(
            'Mau Bayar Cash?',
            'Silahkan kunjungi kasir untuk melakukan pembayaran.',
            'info'
        )
    }
</script>
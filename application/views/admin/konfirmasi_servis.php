<div class="py-4">
    <a href="#" class="btn btn-danger" onclick="history.back()"><i class="fas fa-chevron-left"></i></a>
    <a href="" class="btn btn-primary"><i class="fas fa-sync-alt fa-spin"></i></a>
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
                <form action="<?= site_url('service/simpan_penjualan') ?>" method="post">
                    <input type="hidden" name="booking_id" id="booking_id" value="<?= $datserv->booking_id ?>">
                    <input type="hidden" name="customer_id" id="customer_id" value="<?= $datserv->customer_id ?>">
                    <input type="hidden" name="status" id="status" value="Perbaikan">
                    <div class="row">
                        <table class="table table-bordered">
                            <tr class="table-dark">
                                <th>No.</th>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Subtotal</th>
                                <th>
                                    <!-- Trigger the modal with a button -->
                                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fas fa-plus"></i> Tambah</button>
                                </th>
                            </tr>
                            <tr>
                                <?php $i = 1;
                                $no = 1; ?>
                                <?php foreach ($this->cart->contents() as $items) : ?>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $items['id']; ?></td>
                                    <td><?php echo $items['name']; ?></td>
                                    <td><?php echo $items['qty']; ?></td>
                                    <td>Rp. <?php echo $this->cart->format_number($items['price']); ?></td>
                                    <td>Rp. <?php echo $this->cart->format_number($items['subtotal']); ?></td>
                                    <td>
                                        <a href="<?= site_url('service/hapus_cart/') ?><?php echo $items['rowid'] ?>/<?= $datserv->booking_id ?>" class="btn btn-warning btn-sm">X</a>
                                    </td>
                            </tr>
                            <?php $i++;
                                    $no++; ?>
                        <?php endforeach; ?>
                        <tr>
                            <th colspan="5">Total Harga</th>
                            <th colspan="2">Rp. <?php echo $this->cart->format_number($this->cart->total()); ?></th>
                        </tr>
                        </table>
                        <div class="form-group">
                            <input type="hidden" name="total_harga" value="<?php echo $this->cart->total() ?>">
                            <input type="hidden" name="tgl_transaksi" value="<?php echo date('Y-m-d') ?>">

                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="<?= site_url('service') ?>" class="btn btn-default">Close</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <form action="<?= site_url('service/simpan_cart') ?>" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Barang</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="booking_id" id="booking_id" value="<?= $datserv->booking_id ?>">
                    <div class="mb-3">
                        <label>Nama Barang</label><br>
                        <select id="nama_barang" name="nama_barang" class="form-control">
                            <option value="">-- Pilih --</option>
                            <?php
                            $sql = $this->db->get('barang');
                            foreach ($sql->result() as $row) {
                            ?>
                                <option value="<?php echo $row->kode_barang ?>"><?php echo $row->nama_barang ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Kode Barang</label>
                        <input type="text" class="form-control" name="kode_barang" id="kode_barang" readonly />
                    </div>
                    <div class="mb-3">
                        <label>Stok tersedia</label>
                        <input type="text" class="form-control" name="stok" id="stok" readonly />
                    </div>
                    <div class="mb-3">
                        <label>Harga </label>
                        <input type="text" class="form-control" name="harga" id="harga" readonly />
                    </div>
                    <div class="mb-3">
                        <label>Jumlah Beli </label>
                        <input type="text" class="form-control" name="jumlah" id="jumlah" />
                        <input type="hidden" class="form-control" name="nabar" id="nabar" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-info" type="submit">Simpan</button>
                    <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </form>

    </div>
</div>

<script>
    $(document).ready(function() {
        $('#dataService').DataTable();
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#nama_barang').change(function() {
            var id = $(this).val();
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('service/cek_barang') ?>',
                Cache: false,
                dataType: "json",
                data: 'kode_barang=' + id,
                success: function(resp) {
                    $('#kode_barang').val(resp.kode_barang);
                    $('#stok').val(resp.stok);
                    $('#harga').val(resp.harga);
                    $('#nabar').val(resp.nama_barang);
                }
            });
            // alert(id);
        });
    });
</script>
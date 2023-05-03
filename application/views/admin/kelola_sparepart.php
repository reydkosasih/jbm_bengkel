<div class="py-4">
    <div class="dropdown">
        <button class="btn btn-gray-800 d-inline-flex align-items-center me-2 dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-plus me-2"></i>Tambah Data
        </button>
        <div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-1">
            <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="fas fa-user text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20">
                </i>
                Add User
            </a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg">
        <div class="card border-0 shadow">
            <div class="card-body">
                <div class="card-title">
                    <b>Data Service</b>
                </div>
                <table class="table table-bordered" id="dataSparepart">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Action</th>
                            <th>Nama Barang</th>
                            <th>Stok</th>
                            <th>Tipe Part</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($datpart as $dp) { ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td>
                                    <a href="#" class="btn btn-secondary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                                <td><?= $dp->nama_barang ?></td>
                                <td><?= $dp->stok_barang ?> Pcs</td>
                                <td><?= $dp->nama_part ?></td>
                                <td><?= number_format($dp->harga_barang) ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#dataSparepart').DataTable();
    });
</script>
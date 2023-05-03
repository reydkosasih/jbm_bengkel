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
            <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="fas fa-layer-group text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20">
                </i>
                Add Widget
            </a>
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
                <div class="col-lg-3">
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
                            <th style="font-weight: bold;">Nama Mobil</th>
                            <td>: <?= $datserv->nama_mobil ?></td>
                        </tr>
                        <tr>
                            <th style="font-weight: bold;">Merk Mobil</th>
                            <td>: <?= $datserv->merk_mobil ?></td>
                        </tr>
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
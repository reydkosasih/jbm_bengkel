<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body onload="window.print()">
    <center>
        <img src="<?= base_url('assets') ?>/img/loginlogo.png" alt="logo" width="300px">
        <p style="font-size: 14px;">Jl. Raya Curug - Kosambi No.48, RT.3/RW.2, Pancawati <br> Kec. Klari, Karawang, Jawa Barat 41371 <br>No. Telp: 0812-8183-671</p>
    </center>
    <hr>
    <h3 style="text-align: center;">INVOICE</h3>
    <hr>
    <div class="col-lg-4">
        <table class="table table-borderless table-sm">
            <tr>
                <th style="font-weight: normal;">Nama Customer</th>
                <td>: <?= $datserv->nama_customer ?></td>
                <th style="font-weight: normal;">Merk Mobil</th>
                <td>: <?= $datserv->merk_mobil ?></td>
            </tr>
            <tr>
                <th style="font-weight: normal;">No. Telepon</th>
                <td>: <?= $datserv->no_telp ?></td>
                <th style="font-weight: normal;">Nama Mobil</th>
                <td>: <?= $datserv->nama_mobil ?></td>
            </tr>
            <tr>
                <th style="font-weight: normal;">Email</th>
                <td>: <?= $datserv->email_customer ?></td>
            </tr>
        </table>
    </div>
    <br>
    <table class="table table-bordered">
        <thead class="table-light" style="text-align: center;">
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
                    <td style="text-align: center;"><?= $i++ ?></td>
                    <td><?= $dt->nama_barang ?></td>
                    <td><?= $dt->tgl_transaksi ?></td>
                    <td><?= $dt->qty ?> Pcs</td>
                    <td>Rp. <?= number_format($dt->harga * $dt->qty, 2) ?></td>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot class="table-light">
            <tr>
                <td colspan="4" style="font-weight: bold; text-align: center;">Harga</td>
                <td>Rp. <?= number_format($totalhrg->total_harga, 2) ?></td>
            </tr>
            <tr>
                <td colspan="4" style="font-weight: bold; text-align: center;">PPn 11%</td>
                <td>Rp. <?= number_format($totalhrg->total_harga * 11 / 100) ?></td>
            </tr>
            <tr>
                <td colspan="4" style="font-weight: bold; text-align: center;">Total Pembayaran</td>
                <td>Rp. <?= number_format(($totalhrg->total_harga * 11 / 100) + ($totalhrg->total_harga), 2) ?></td>
            </tr>
            <tr>
                <td colspan="4" style="font-weight: bold; text-align: center;">Jumlah Bayar</td>
                <td>Rp. <?= number_format($totalhrg->jml_bayar, 2) ?> | Kembalian: Rp. <?= number_format($totalhrg->kembalian, 2) ?></td>
            </tr>
        </tfoot>
    </table>
</body>

</html>
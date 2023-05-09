<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body onload="window.print()">
    <center>
        <img src="<?= base_url('assets') ?>/img/loginlogo.png" alt="logo" width="300px">
        <p style="font-size: 14px;">Jl. Raya Curug - Kosambi No.48, RT.3/RW.2, Pancawati <br> Kec. Klari, Karawang, Jawa Barat 41371 <br>No. Telp: 0812-8183-671</p>
    </center>
    <hr>
    <h3 style="text-align: center;">Laporan Sparepart</h3>
    <hr>
    <table class="table table-bordered" id="dataService">
        <thead class="table-secondary" style="text-align: center;">
            <tr>
                <th>No</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Stok</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1 ?>
            <?php foreach ($datserv as $ds) { ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $ds->kode_barang ?></td>
                    <td><?= $ds->nama_barang ?></td>
                    <td style="text-align: center;"><?= $ds->stok ?></td>
                    <td>Rp. <?= number_format($ds->harga) ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>
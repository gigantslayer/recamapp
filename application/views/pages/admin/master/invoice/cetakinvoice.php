<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">

    <link href="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">

</head>

<body>
    <h2 style="text-align: center;color:black">INVOICE</h2>
    <div style="display:flex;color:black">
        <div style="float:left">
            <h5>Pelanggan</h5>
            <h5>Nama : <?= $invoice[0]->nama ?></h5>
            <h5>Alamat : <?= $invoice[0]->alamat ?></h5>
            <h5>Telepon : <?= $invoice[0]->no_telp ?></h5>
        </div>
        <div style="float:right">
            <h5>Nomor : INV/<?= $invoice[0]->id / 20 / 23 ?></h5>
            <h5>Tanggal : <?= $invoice[0]->tgl_pesan ?></h5>
        </div>
    </div>
    <div style="clear:both"></div>

    <div class="table-responsive">
        <table class="table table-striped" id="dataTableDetail" width="100%" cellspacing="0">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Sub Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $total = 0;
                foreach ($read as $data) {
                    $sub_total = $data->harga * $data->jumlah;
                    $total += $sub_total;
                ?>
                    <tr class="text-center">
                        <td><?php echo $no ?></td>
                        <td><?php echo $data->nama_brg ?></td>
                        <td><?php echo $data->jumlah ?></td>
                        <td>Rp. <?php echo number_format($data->harga, 0, ",", ".") ?></td>
                        <td>Rp. <?php echo number_format($sub_total, 0, ",", ".") ?></td>
                    </tr>
                <?php
                    $no++;
                }
                ?>
                <tr>
                    <td colspan="4" class="text-right">Total Belanja</td>
                    <td class="text-center">Rp. <?php echo number_format($total, 0, ",", ".") ?></td>
                </tr>
            </tbody>
        </table>
    </div>


</body>

</html>
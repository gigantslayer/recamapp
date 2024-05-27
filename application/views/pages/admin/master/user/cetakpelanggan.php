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
    <div style="display:flex;color:black">
        <div style="float:left;margin-right:20px">
            <img src="<?= base_url("assets/img/logo.png") ?>" style="width:100px;height:100px" />
        </div>
        <div style="float:left" style="margin-left:20px">
            <h3 style="margin:0px;padding:0px;margin-top:-10px">Arisan App</h3>
            <p style="margin:0px;padding:0px;margin-top:-10px">Jalan Merdeka Raya</p>
            <p style="margin:0px;padding:0px;margin-top:-10px">08345345345</p>
        </div>
    </div>
    <div style="clear:both"></div>

    <h2 style="text-align: center;color:black">Laporan Pelanggan</h2>

    <p>Tanggal Awal : <?= $_POST['date-start'] ?></p>
    <p>Tanggal Akhir : <?= $_POST['date-end'] ?></p>

    <div class="table-responsive">
        <table class="table table-striped" id="dataTableDetail" width="100%" cellspacing="0">
            <thead>
                <tr class="text-center">
                    <th>Nomor</th>
                    <th>Nama Pelanggan</th>
                    <th>Nomor HP</th>
                    <th>Tanggal Daftar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $total = 0;
                foreach ($read as $data) {
                ?>
                    <tr class="text-center">
                        <td><?php echo $no ?></td>
                        <td><?php echo $data->nama ?></td>
                        <td><?php echo $data->no_hp ?></td>
                        <td><?php echo $data->tanggal_daftar ?></td>
                    </tr>
                <?php
                $no++;
                }
                ?>
            </tbody>
        </table>
    </div>


</body>

</html>
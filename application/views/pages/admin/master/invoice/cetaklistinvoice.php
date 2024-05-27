<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  <title>Cetak List Invoice</title>
</head>

<body>
  <h2 h2 style="text-align: center;color:black">DATA INVOICE</h2>
  <div class="content-wrapper">
    <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr class="text-center">
          <th>No</th>
          <th>Nama Pembeli</th>
          <th>Alamat</th>
          <th>No HP</th>
          <th>Tanggal Cetak</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        foreach ($read as $data) {
          $status = $data->status;
        ?>
          <tr class="text-center">
            <td><?php echo $no ?></td>
            <td><?php echo $data->nama ?></td>
            <td><?php echo $data->alamat ?></td>
            <td><?php echo $data->no_telp ?></td>
            <td><?php echo $data->tgl_cetak ?></td>
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
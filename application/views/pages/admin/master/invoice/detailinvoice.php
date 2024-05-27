<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Detail Invoice</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item active"><a class="text-info" href="<?php echo base_url() ?>invoice">Invoice</a></li>
            <li class="breadcrumb-item">Detail Invoice</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">


      <div class="row">
        <div class="col-12">
          <!-- /.card -->
          <?= $this->session->flashdata('message'); ?>
          <?php unset($_SESSION['message']) ?>;
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">

              <?php foreach ($invoice as $data) {
                $status = $data->status;
                $statusShow = "tar";
                if ($status == 0) {
                  $statusShow =  '<a class="btn btn-sm btn-danger"> Belum </a>';
                } else {
                  $statusShow = '<a class="btn btn-sm btn-success">Sudah </a>';
                }
              ?>
                <table class="my-2">
                  <tr>
                    <td><span class="font-weight-bold">Status Pembayaran :</span> <?= $statusShow ?>
                      <?php if ($status == 1) { ?>
                        <a class="btn btn-sm btn-primary" id="btn_bukti">Lihat Bukti</a>
                      <?php } ?>
                    </td>
                  </tr>
                  <?php if ($status == 1) { ?>
                    <tr style="height:50px">
                      <td><span class="font-weight-bold">Tanggal Pembayaran :
                          <?= $data->tgl_bayar ?>
                      <td>
                    </tr>
                  <?php } ?>
                </table>
                <?php if ($status == 1) { ?>
                  <div id="bukti_bayar" class="d-none position-absolute text-center" style="right:0;left:0;top:0;bottom:0;margin-left: auto;margin-right: auto; width:300px;height:300px;z-index:100">
                    <img style="widht:300px;height:300px" src="<?= base_url('assets/img/bukti_bayar/') . $data->bukti_bayar ?>">
                  </div>
                <?php } ?>


              <?php } ?>

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
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="darkscreen" class="d-none position-absolute text-center" style="right:0;left:0;top:0;bottom:0;margin-left: auto;margin-right: auto;background:rgba(0,0,0,0.3)">
    </div>

</div>
</div>

<script>
  let bukti = document.getElementById("bukti_bayar");
  let btnBukti = document.getElementById("btn_bukti");
  let darkscreen = document.getElementById("darkscreen");

  darkscreen.addEventListener('click', function() {
    darkscreen.classList.add("d-none");
    bukti.classList.add("d-none");
  })

  btnBukti.addEventListener('click', function() {
    bukti.classList.remove("d-none");
    darkscreen.classList.remove("d-none");
  })
</script>
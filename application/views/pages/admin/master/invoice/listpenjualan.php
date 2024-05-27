<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Invoice</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item active"><a class="text-info" href="<?php echo base_url() ?>invoice">Invoice</a></li>
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
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr class="text-center">
                      <th>No</th>
                      <th>Nama Pembeli</th>
                      <th>Alamat</th>
                      <th>No HP</th>
                      <th>Tanggal Pesan</th>
                      <th>Status Pembayaran</th>
                      <th>Status Pengiriman</th>
                      <th>Detail</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($read as $data) {
                      $status = $data->status;
                      $statusShow = "";
                      $statusPengiriman = "";
                      if ($status == 0) {
                        $statusShow =  '<a class="btn btn-sm btn-danger"> Belum </a>';
                        $statusPengiriman =  '<a data-toggle="modal" data-target="#ubahStatusModal" data-id="' . $data->id . '" onclick="openUpdateModal(this, `admin/updateStatusInvoice/2`)" class="btn btn-sm btn-danger"> Belum </a>';
                      } else if ($status == 1) {
                        $statusShow = '<a class="btn btn-sm btn-success">Sudah</a>';
                        $statusPengiriman =  '<a data-toggle="modal" data-target="#ubahStatusModal" data-id="' . $data->id . '" onclick="openUpdateModal(this, `admin/updateStatusInvoice/2`)" class="btn btn-sm btn-danger"> Belum </a>';
                      } else if ($status == 2) {
                        $statusShow = '<a class="btn btn-sm btn-success">Sudah</a>';
                        $statusPengiriman =  '<a class="btn btn-sm btn-success"> Sudah </a>';
                      }
                    ?>
                      <tr class="text-center">
                        <td><?php echo $no ?></td>
                        <td><?php echo $data->nama ?></td>
                        <td><?php echo $data->alamat ?></td>
                        <td><?php echo $data->no_telp ?></td>
                        <td><?php echo $data->tgl_pesan ?></td>
                        <td><?php echo $statusShow ?></td>
                        <td><?php echo $statusPengiriman ?></td>
                        <td>
                          <a href="<?= base_url('detailinvoice/' . $data->id); ?>" class="btn btn-sm btn-success" role="button" title="Ubah"> Detail </a>
                          <a target="_blank" href="<?= base_url('cetakinvoice/' . $data->id); ?>" class="btn btn-sm btn-primary" role="button" title="Ubah"> Cetak invoice</a>
                        </td>
                      </tr>
                    <?php
                      $no++;
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
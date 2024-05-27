<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>List Pembayaran ke - <?= $nomor ?></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">List Arisan</li>
            <li class="breadcrumb-item active"><a class="text-info" href="<?= base_url() ?>listarisan">Arisan</a></li>
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
            <div class="card-header">
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama User</th>
                      <th>Jumlah Pembayaran</th>
                      <th>Tanggal Bayar</th>
                      <th>Status Bayar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($read as $data) {
                      if ($data->status == 0) {
                        $status = "<a class='btn btn-sm btn-danger'>Belum Membayar</a>";
                      } else if ($data->status == 1){
                        $status = "<a class='btn btn-sm btn-warning'>Pending</a>";
                      }else if ($data->status == 2){
                        $status = "<a class='btn btn-sm btn-success'>Sudah Membayar</a>";
                      }


                      if ($data->tanggal_dibayar == null) {
                        $bayar = "-";
                      } else {
                        $bayar = $data->tanggal_dibayar;
                      }

                    ?>
                      <tr>
                        <td style="text-align:center"><?= $no ?></td>
                        <td><?= $data->nama ?></td>
                        <td><?= $data->nominal_pembayaran ?></td>
                        <td><?= $bayar ?></td>
                        <td>
                          <?php if ($data->status == 0) { ?>
                            <a href="<?= base_url('changestatuspembayaranmember/' . $data->idpembayaran . "/" . $data->id_arisan . "/" . $data->pembayaran_ke); ?>" onclick="return confirm('Apakah anda yakin mengubah status menjadi sudah dibayarkan?')" class="btn btn-sm btn-success" role="button" title="ubah status"> Ubah Status </a>
                          <?php } ?>
                          <?= $status ?>
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
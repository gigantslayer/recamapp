<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Arisan</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">Home</li>
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
              <h6 class="m-0 font-weight-bold text-primary"> <a style="text-decoration: none" class="collapse-item text-info" href="<?= base_url() ?>tambahdataarisan"> <i class="text-info fas fa-fw fa-plus"></i> Tambah Data Arisan</h6></a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Arisan</th>
                      <th>Jumlah Slot</th>
                      <th>Jumlah Terdaftar</th>
                      <th>Nominal Arisan</th>
                      <th>Pembayaran Per Orang</th>
                      <th>Tanggal Acak</th>
                      <th>Periode</th>
                      <th>Deskripsi</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($read as $data) {
                      if ($data->status == 0) {
                        $status = '<a class="btn btn-sm mt-1 btn-danger">Belum dikocok</a>';
                      } else if ($data->status == 1) {
                        $status = '<a class="btn btn-sm mt-1 btn-warning">Sedang berlangsung</a>';
                      } else if ($data->status == -1) {
                        $status = '<a class="btn btn-sm mt-1 btn-danger">Dibatalkan</a>';
                      } else if ($data->status == 2) {
                        $status = '<a class="btn btn-sm mt-1 btn-success">Selesai</a>';
                      }

                    ?>
                      <tr>
                        <td style="text-align:center"><?= $no ?></td>
                        <td><?= $data->nama ?></td>
                        <td><?= $data->jumlah_slot ?></td>
                        <td><?= $data->jumlah_member ?></td>
                        <td>Rp. <?= number_format($data->nominal, 0, ",", ".") ?></td>
                        <td>Rp. <?= number_format($data->nominal_per_slot, 0, ",", ".") ?></td>
                        <td><?= $data->tanggal_acak ?></td>
                        <td><?= $data->nama_periode ?> (<?= $data->jumlah_hari_periode ?> Hari)</td>
                        <td><?= $data->deskripsi ?></td>
                        <td><?= $status ?></td>
                        <td width="20%">
                          <a href="<?= base_url('memberarisan/' . $data->idarisan); ?>" class="btn mt-1 btn-sm btn-primary" role="button" title="member"> Lihat Member </a>

                          <?php if ($data->status != 2 && $data->status != -1 && $data->status != 1 && $data->jumlah_member == 0) { ?>
                            <a href="<?= base_url('editdataarisan/' . $data->idarisan); ?>" class="btn mt-1 btn-sm btn-warning" role="button" title="Ubah"> Ubah </a>
                            <a href="#" data-toggle="modal" data-target="#deleteModal" data-id="<?= $data->idarisan; ?>" class="btn btn-sm mt-1 btn-danger mr-1" title="Hapus" onclick="openDeleteModal(this, 'admin/deletearisan')" role="button"> Hapus </a>
                          <?php } ?>

                          <?php if ($data->status != 2 && $data->status != -1) { ?>
                            <a href="#" data-toggle="modal" data-target="#doneModal" data-id="<?= $data->idarisan; ?>" class="btn btn-sm mt-1 btn-success mr-1" title="Selesai" onclick="openDoneModal(this, 'admin/selesaikanarisan')" role="button"> Selesaikan </a>
                            <a href="#" data-toggle="modal" data-target="#cancelModal" data-id="<?= $data->idarisan; ?>" class="btn btn-sm mt-1 btn-danger mr-1" title="Cancel" onclick="openCancelModal(this, 'admin/cancelarisan')" role="button"> Cancel </a>
                          <?php } ?>
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
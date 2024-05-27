<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data User</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item active"><a class="text-info" href="<?php echo base_url() ?>listuser">Users</a></li>
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
                      <th>Nama</th>
                      <th>Nomor HP</th>
                      <th>Email</th>
                      <!-- <th>Photo</th> -->
                      <th>Tanggal Daftar</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($read as $data) {
                    ?>
                      <tr>
                        <td align="center"><?php echo $no ?></td>
                        <td><?php echo $data->nama ?></td>
                        <td><?php echo $data->no_hp ?></td>
                        <td><?php echo $data->email ?></td>
                        <!-- <td><img width="50px" src='<?php echo base_url("assets/img/user/") . $data->image ?>'></td> -->
                        <td><?php echo $data->tanggal_daftar ?></td>
                        <td width="20%">
                          <a href="<?= base_url('editdatauser/' . $data->id_user); ?>" class="btn btn-sm btn-success" role="button" title="Ubah"> Edit </a>
                          <a href="#" data-toggle="modal" data-target="#deleteModal" data-id="<?= $data->id_user; ?>" class="btn btn-sm btnOpenDeleteModal btn-danger mr-1" title="Hapus" onclick="openDeleteModal(this, 'admin/deleteuser')" class="btn btn-sm btn-danger" role="button" title="Hapus"> Hapus </a>
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
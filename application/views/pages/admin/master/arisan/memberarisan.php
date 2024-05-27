<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Member Arisan</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">List Member Arisan</li>
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
              <?php if ($arisan[0]->status == 0) { ?>

                <?php if ($arisan[0]->jumlah_member == $arisan[0]->jumlah_slot) { ?>

                  <h6 class="m-0 font-weight-bold text-primary"><a href="<?= base_url() ?>acakarisan/<?= $arisan[0]->id ?>" onclick="return confirm('Apakah Anda yakin ingin mengacak Arisan?');" class="m-0 font-weight-bold text-primary" style="text-decoration: none">
                      <i class="text-info fas fa-random"></i> ACAK
                    </a></h6>
                <?php } else { ?>
                  <h6 class="m-0 font-weight-bold text-primary"><a onclick="alert('Jumlah member arisan belum memenuhi');" class="m-0 font-weight-bold text-primary" style="text-decoration: none">
                      <i class="text-info fas fa-random"></i> ACAK
                    </a></h6>
                <?php } ?>
              <?php } else { ?>
                <h6 class="m-0 font-weight-bold text-primary"><a onclick="alert('Arisan Sudah Di acak');" class="m-0 font-weight-bold text-primary" style="text-decoration: none">
                    <i class="text-info fas fa-random"></i> ACAK
                  </a></h6>
              <?php } ?>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama User</th>
                      <th>Alamat</th>
                      <th>Nomor Urut</th>
                      <th>Tanggal Menerima</th>
                      <th>Pembayaran</th>
                      <th>Status Penerimaan Uang</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($read as $data) {
                      if ($data->status == 0) {
                        $status = "<a class='btn btn-sm btn-warning'>Belum Menerima</a>";
                      } else {
                        $status = "<a class='btn btn-sm btn-success'>Sudah Menerima</a>";
                      }

                      if ($data->urutan == 0) {
                        $urutan = "-";
                      } else {
                        $urutan = $data->urutan;
                      }

                      if ($data->tanggal_terima == null) {
                        $terima = "-";
                      } else {
                        $terima = $data->tanggal_terima;
                      }

                    ?>
                      <tr>
                        <td style="text-align:center"><?= $no ?></td>
                        <td><?= $data->nama_user ?></td>
                        <td><?= $data->alamat ?></td>
                        <td><?= $urutan ?></td>
                        <td><?= $terima ?></td>
                        <td><?= $data->jumlah_membayar ?> sudah membayar</td>
                        <td><?= $status ?></td>
                        <td width="20%">
                          <?php if ($data->status == 0) { ?>
                            <a href="<?= base_url('changestatuspembayaran/' . $data->idmemberarisan . "/" . $data->id_arisan); ?>" onclick="return confirm('Apakah anda yakin mengubah status menjadi sudah dibayarkan?')" class="btn btn-sm btn-success" role="button" title="ubah status"> Ubah Status </a>
                          <?php } ?>

                          <a href="<?= base_url('listpembayaran/' . $data->idarisan . '/' . $data->urutan); ?>" class="btn btn-sm btn-primary" role="button" title="pembayaran"> Lihat Pembayaran </a>
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
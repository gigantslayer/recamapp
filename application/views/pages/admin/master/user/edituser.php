<div class="content">
  <div class="container-fluid">
    <h6 class="m-0 font-weight-bold text-info" align="right"> <a style="text-decoration: none" class="collapse-item text-info" href="<?php echo base_url() ?>listuser"> Kembali</h6></a><br>

    <?= $this->session->flashdata('message'); ?>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-info">
            <h4 class="card-title">Form Data User</h4>
          </div>
          <div class="card-body">
            <h4>Edit User</h4>
            <hr>
            <?php
            foreach ($read as $data) {
            ?>
              <form action="<?php echo base_url() . 'admin/updateuser'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
                <div class="row">
                  <input type="hidden" value="<?= $data->id_user ?>" name='id_user'>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Nama<small class="text-danger">*</small></label>
                      <input style="padding-bottom: 10px;" type="text" name="nama" class="form-control" value="<?= $data->nama ?>">
                      <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Nomor HP<small class="text-danger">*</small></label>
                      <input style="padding-bottom: 10px;" type="number" name="no_hp" class="form-control" value="<?= $data->no_hp ?>">
                      <?= form_error('no_hp', '<small class="text-danger">', '</small>'); ?><s></s>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Alamat<small class="text-danger">*</small></label>
                      <input style="padding-bottom: 10px;" type="text" name="alamat" class="form-control" value="<?= $data->alamat ?>">
                      <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Nomor Rekening<small class="text-danger">*</small></label>
                      <input style="padding-bottom: 10px;" type="text" name="no_rekening" class="form-control" value="<?= $data->no_rekening ?>">
                      <?= form_error('no_rekening', '<small class="text-danger">', '</small>'); ?>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Atas Nama Rekening<small class="text-danger">*</small></label>
                      <input style="padding-bottom: 10px;" type="text" name="nama_rekening" class="form-control" value="<?= $data->nama_rekening ?>">
                      <?= form_error('nama_rekening', '<small class="text-danger">', '</small>'); ?>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Nama Bank<small class="text-danger">*</small></label>
                      <input style="padding-bottom: 10px;" type="text" name="nama_bank" class="form-control" value="<?= $data->nama_bank ?>">
                      <?= form_error('nama_bank', '<small class="text-danger">', '</small>'); ?>
                    </div>
                  </div>

                  <div class="col-md-12 row">
                    <div class="col-md-6">
                      <label class="bmd-label-floating">Photo</label>
                      <div class="custom-file" id="file1">
                        <input type="file" class="custom-file-input" id="file-input" id="photo" name="photo" onchange="previewfile()">
                        <label class="custom-file-label" id="file-label" for="photo">Pilih file</label>
                      </div>
                    </div>
                    <div class="col-3 text-center">
                      <img src="<?= base_url('assets/img/user/') . $data->photo ?>" alt="" class="img-thumbnail  img-preview" id="file-preview">
                    </div>
                  </div>

                </div>
                <br>

                <button type="submit" class="btn btn-info pull-right">Simpan</button>

              </form>
            <?php
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div><br>
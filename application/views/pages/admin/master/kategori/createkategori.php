<div class="content">
  <div class="container-fluid">
    <h6 class="m-0 font-weight-bold text-primary" align="right"> <a style="text-decoration: none" class="collapse-item text-info" href="<?php echo base_url() ?>listkategori"> Kembali</h6></a><br>

    <?= $this->session->flashdata('message'); ?>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Form Data Kategori</h4>
            <p class="card-category">Masukkan Data Kategori</p>
          </div>
          <div class="card-body">
            <h4>Data Kategori</h4>
            <hr>
            <form action="<?php echo base_url() . 'tambahdatakategori'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Nama Kategori<small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" name="namakategori" class="form-control" value="<?= set_value('namakategori') ?>">
                    <?= form_error('namakategori', '<small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label class="bmd-label-floating">Image<small class="text-danger">*</small></label>
                  <div class="custom-file" id="file1">
                    <input type="file" class="custom-file-input" id="file-input" name="imagekategori" onchange="previewfile()">
                    <label class="custom-file-label" id="file-label" for="file-input">Pilih file</label>
                    <?= form_error('imagekategori', '<small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
                <div class="col-3 text-center">
                  <img width="100px" src="" alt="" class="img-thumbnail  img-preview" id="file-preview">
                </div>
              </div>
              <button type="submit" class="btn btn-info pull-right my-4">Simpan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div><br>
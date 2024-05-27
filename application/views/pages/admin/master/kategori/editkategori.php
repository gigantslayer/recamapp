<div class="content">
  <div class="container-fluid">
    <h6 class="m-0 font-weight-bold text-info" align="right"> <a style="text-decoration: none" class="collapse-item text-info" href="<?php echo base_url() ?>listkategori"> Kembali</h6></a><br>

    <?= $this->session->flashdata('message'); ?>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-info">
            <h4 class="card-title">Form Data Kategori</h4>
            <p class="card-category">Masukkan Data Kategori</p>
          </div>
          <div class="card-body">
            <h4>Data Kategori</h4>
            <hr>
            <?php
            foreach ($kategori as $data) {

            ?>
              <form action="<?php echo base_url() . 'admin/updatekategori'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input style="padding-bottom: 10px;" type="hidden" name="idkategori" class="form-control" value="<?= $data->id ?>" required>
                      <label class="bmd-label-floating">Nama Kategori<small class="text-danger">*</small></label>
                      <input style="padding-bottom: 10px;" type="text" name="namakategori" class="form-control" value="<?= $data->nama_kategori ?>" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label class="bmd-label-floating">Image</label>
                    <div class="custom-file" id="file1">
                      <input type="file" class="custom-file-input" id="file-input" name="imagekategori" onchange="previewfile()">
                      <label class="custom-file-label" id="file-label" for="file-input">Pilih file</label>
                      <?= form_error('imagekategori', '<small class="text-danger">', '</small>'); ?>
                    </div>
                  </div>
                  <div class="col-3 text-center">
                    <img width="100px" src="<?= base_url('assets/img/kategori/') . $data->image ?>" alt="" class="img-thumbnail  img-preview" id="file-preview">
                  </div>
                </div>

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
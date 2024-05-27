<div class="content">
  <div class="container-fluid">
    <h6 class="m-0 font-weight-bold text-info" align="right"> <a style="text-decoration: none" class="collapse-item text-info" href="<?php echo base_url() ?>listproduk"> Kembali</h6></a><br>

    <?= $this->session->flashdata('message'); ?>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-info">
            <h4 class="card-title">Form Data Produk</h4>
            <p class="card-category">Masukkan Data Produk</p>
          </div>
          <div class="card-body">
            <h4>Data Produk</h4>
            <hr>
            <?php
            foreach ($produk as $data) {
            ?>
              <form action="<?php echo base_url() . 'admin/updateproduk'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
                <div class="row">
                  <input type="hidden" value="<?= $data->idproduk ?>" name='idproduk'>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Nama Produk<small class="text-danger">*</small></label>
                      <input style="padding-bottom: 10px;" type="text" name="namaproduk" class="form-control" value="<?= $data->nama ?>">
                      <?= form_error('namaproduk', '<small class="text-danger">', '</small>'); ?>
                    </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Kategori<small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" name="kategori" class="form-control" value="<?= $data->kategori ?>">
                    <?= form_error('kategori', '<small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Stok<small class="text-danger">*</small></label>
                      <input style="padding-bottom: 10px;" type="number" name="stokproduk" class="form-control" value="<?= $data->stok ?>">
                      <?= form_error('stokproduk', '<small class="text-danger">', '</small>'); ?>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Harga<small class="text-danger">*</small></label>
                      <input style="padding-bottom: 10px;" type="number" name="hargaproduk" class="form-control" value="<?= $data->harga ?>">
                      <?= form_error('hargaproduk', '<small class="text-danger">', '</small>'); ?>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">Deskripsi</label>
                      <textarea style="padding-bottom: 10px;" name="deskripsiproduk" class="form-control"><?= $data->deskripsi ?></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label class="bmd-label-floating">Gambar</label>
                    <div class="custom-file" id="file1">
                      <input type="file" class="custom-file-input" id="file-input" name="photoproduk" onchange="previewfile()">
                      <label class="custom-file-label" id="file-label" for="ijazah">Pilih file</label>
                    </div>
                  </div>
                  <div class="col-3 text-center">
                    <img src="<?= base_url('assets/img/produk/') . $data->photo ?>" alt="" class="img-thumbnail  img-preview" id="file-preview">
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
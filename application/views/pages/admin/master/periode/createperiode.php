<div class="content">
  <div class="container-fluid">
    <h6 class="m-0 font-weight-bold text-primary" align="right"> <a style="text-decoration: none" class="collapse-item text-info" href="<?php echo base_url() ?>listperiode"> Kembali</h6></a><br>

    <?= $this->session->flashdata('message'); ?>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Form Data Periode</h4>
            <p class="card-category">Masukkan Data Periode</p>
          </div>
          <div class="card-body">
            <h4>Data Periode</h4>
            <hr>
            <form action="<?php echo base_url() . 'tambahdataperiode'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Nama Periode<small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="text" name="namaperiode" class="form-control" value="<?= set_value('namaperiode') ?>">
                    <?= form_error('namaperiode', '<small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Jumlah Hari<small class="text-danger">*</small></label>
                    <input style="padding-bottom: 10px;" type="number" name="jumlahhari" class="form-control" value="<?= set_value('jumlahhari') ?>">
                    <?= form_error('jumlahhari', '<small class="text-danger">', '</small>'); ?>
                  </div>
                </div>
              <br>
              <button type="submit" class="btn btn-info pull-right">Simpan</button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<br>
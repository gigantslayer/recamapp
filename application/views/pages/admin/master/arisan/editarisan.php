<div class="content">
  <div class="container-fluid">
    <h6 class="m-0 font-weight-bold text-info" align="right"> <a style="text-decoration: none" class="collapse-item text-info" href="<?php echo base_url() ?>listarisan"> Kembali</h6></a><br>

    <?= $this->session->flashdata('message'); ?>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-info">
            <h4 class="card-title">Form Data Arisan</h4>
            <p class="card-category">Masukkan Data Arisan</p>
          </div>
          <div class="card-body">
            <h4>Data Arisan</h4>
            <hr>
            <?php
            foreach ($arisan as $data) {
            ?>
              <form action="<?php echo base_url() . 'admin/updatearisan'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
                <input type="hidden" value="<?= $data->idarisan ?>" name='idarisan'>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Nama Arisan<small class="text-danger">*</small></label>
                      <input style="padding-bottom: 10px;" type="text" name="namaarisan" class="form-control" value="<?= $data->nama ?>" required>
                      <?= form_error('namaarisan', '<small class="text-danger">', '</small>'); ?>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Jumlah Slot<small class="text-danger">*</small></label>
                      <input style="padding-bottom: 10px;" oninput="setNominalPerOrang()" type="number" id="jumlahslotarisan" name="jumlahslotarisan" class="form-control" value="<?= $data->jumlah_slot ?>" required>
                      <?= form_error('jumlahslotarisan', '<small class="text-danger">', '</small>'); ?>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Nominal Arisan<small class="text-danger">*</small></label>
                      <input style="padding-bottom: 10px;" oninput="setNominalPerOrang()" id="nominalarisan" type="number" name="nominalarisan" class="form-control" value="<?= $data->nominal ?>" required>
                      <?= form_error('nominalarisan', '<small class="text-danger">', '</small>'); ?>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Nominal Per Orang<small class="text-danger">*</small></label>
                      <input style="padding-bottom: 10px;" id="nominalperorangarisan" type="number" name="nominalperorangarisan" class="form-control" value="<?= $data->nominal_per_slot ?>" readonly>
                      <?= form_error('nominalperorangarisan', '<small class="text-danger">', '</small>'); ?>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Tanggal Acak<small class="text-danger">*</small></label>
                      <input style="padding-bottom: 10px;" type="date" id="tanggalacakarisan" name="tanggalacakarisan" class="form-control" value="<?= $data->tanggal_acak ?>" required>
                      <?= form_error('tanggalacakarisan', '<small class="text-danger">', '</small>'); ?>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Periode<small class="text-danger">*</small></label>
                      <select style="padding-bottom: 10px;" id="periodearisan" type="number" name="periodearisan" class="form-control" required>
                        <option value="">Pilih Periode</option>
                        <?php foreach ($data_periode as $periode) { ?>
                          <?php if ($data->id_periode == $periode->id) { ?>
                            <option value="<?= $periode->id ?>" selected><?= $periode->nama_periode ?> ( <?= $periode->jumlah_hari_periode ?> Hari)</option>
                          <?php } else { ?>
                            <option value="<?= $periode->id ?>"><?= $periode->nama_periode ?> ( <?= $periode->jumlah_hari_periode ?> Hari)</option>
                          <?php } ?>
                        <?php } ?>
                      </select>
                      <?= form_error('periodearisan', '<small class="text-danger">', '</small>'); ?>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">Deskripsi</label>
                      <textarea style="padding-bottom: 10px;" name="deskripsiarisan" class="form-control" value="<?= set_value('deskripsiarisan') ?>"><?= $data->deskripsi ?></textarea>
                    </div>
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
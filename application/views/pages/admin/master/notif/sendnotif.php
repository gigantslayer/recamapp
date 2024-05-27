<div class="content">
  <div class="container-fluid">
    <h6 class="m-0 font-weight-bold text-primary" align="right"> <a style="text-decoration: none" class="collapse-item text-info" href="<?php echo base_url() ?>listkaryawan"> Kembali</h6></a><br>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Kirim Notifikasi</h4>
          </div>
          <div class="card-body">

            <form action="<?php echo base_url() . 'kirimnotifikasi'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
              <div class="row p-3">
                <div class="row dol-md-8">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">Target<small class="text-danger">*</small></label>
                      <select style="padding-bottom: 10px;" id="target" name="target" class="form-control" required onchange="targetChange(this)">
                        <option value="ALL_USER">Kirim kesemua user</option>
                        <option value="ARISAN">Arisan Tertentu</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-12" id="wrap_arisan" style="display:none">
                    <div class="form-group">
                      <label class="bmd-label-floating">List Arisan<small class="text-danger">*</small></label>
                      <select style="padding-bottom: 10px;" id="arisan" name="arisan" class="form-control" onchange="arisanChange(this)">
                        <option value="">Pilih Arisan</option>
                        <?php foreach ($listarisan as $arisan) { ?>
                          <option value="<?= $arisan->id ?>"><?= $arisan->nama ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-12" id="wrap_user" style="display:none">
                    <div class="form-group">
                      <label class="bmd-label-floating">List User<small class="text-danger">*</small></label>
                      <select style="padding-bottom: 10px;" id="user" name="user" class="form-control">
                        <option value="all_user">Semua member arisan</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">Judul<small class="text-danger">*</small></label>
                      <input style="padding-bottom: 10px;" type="text" name="judul" class="form-control" value="" required>
                      <?= form_error('judul', '<small class="text-danger">', '</small>'); ?>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">Isi<small class="text-danger">*</small></label>
                      <textarea style="padding-bottom: 10px;" type="text" name="isi" class="form-control" required></textarea>
                    </div>
                  </div>
                  <br>
                  <button type="submit" class="btn btn-info pull-right ml-2">Kirim</button>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<br>

<script>
  function targetChange(e) {
    let target = $(e).val();
    $("#arisan").val("");
    $("#user").val("all_user");
    if (target == "ALL_USER") {
      $("#arisan").removeAttr("required");
      $("#wrap_arisan").css("display", "none");
      $("#user").removeAttr("required");
      $("#wrap_user").css("display", "none");
    } else {
      $("#arisan").attr("required", "true");
      $("#wrap_arisan").css("display", "block");
      $("#user").attr("required", "true");
      $("#wrap_user").css("display", "block");
    }
  }

  function arisanChange() {
    let html = `<option value="all_user">Semua member arisan</option>`;
    let currentIdArisan = $("#arisan").val();
    <?php foreach ($listuser as $u) { ?>
      var idArisan = "<?= $u->idarisan ?>";
      if (currentIdArisan == idArisan) {
        html += `<option value = "<?= $u->id_user ?>" > <?= $u->nama_user ?> </option>`
      }

    <?php } ?>

    $("#user").html(html)
  }
</script>

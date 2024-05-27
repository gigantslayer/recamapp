<script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>
<script src="<?= base_url('assets/js/sb-admin-2.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url(); ?>assets/js/script.js"></script>
<script src="<?= base_url('assets/js/demo/datatables-demo.js') ?>"></script>

<script>
  $(document).ready(function() {
    // ketika tombol detail ditekan
    $('.hapusdatasiswa').on("click", function() {
      // ambil nilai id dari link print
      var DataJadwal = this.id;
      var datanya = DataJadwal.split("|");
      $("#IsiModalHapusSiswa").html('<input style="padding-bottom: 10px;" type="hidden" name="idsiswa" class="form-control" value=' + datanya[0] + '><input style="padding-bottom: 10px;" type="hidden" name="iduser" class="form-control" value=' + datanya[1] + '> Apakah anda yakin ingin menghapus data ini ?');
    });

  });
</script>
<script>
  $(document).ready(function() {
    // ketika tombol detail ditekan
    $('.ubah').on("click", function() {
      // ambil nilai id dari link print
      var DataJadwal = this.id;
      var datanya = DataJadwal.split("|");
      $("#IsiModal").html('<input style="padding-bottom: 10px;" type="hidden" name="id" class="form-control" value=' + datanya[0] + '><input style="padding-bottom: 10px;" type="hidden" name="subtotal" class="form-control" value=' + datanya[5] + '><input style="padding-bottom: 10px;" type="hidden" name="stok" class="form-control" value=' + datanya[6] + '> <div class="row"> <div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Id Barang</label><input style="padding-bottom: 10px;" type="text" name="idbarang" class="form-control" value=' + datanya[1] + ' readonly> </div></div><div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Nama Barang</label><input style="padding-bottom: 10px;" type="text" name="namabarang" class="form-control" value=' + datanya[2] + ' readonly> </div></div></div><div class="row"> <div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Harga Jual</label><input style="padding-bottom: 10px;" type="text" name="hargajual" class="form-control" value=' + datanya[3] + ' readonly></div></div><div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Jumlah Beli</label><input style="padding-bottom: 10px;" type="text" name="jumlahbeli" class="form-control" value=' + datanya[4] + '><input style="padding-bottom: 10px;" type="hidden" name="jumlahbeliasal" class="form-control" value=' + datanya[4] + '></div></div></div> ');
    });

  });
</script>
<script>
  $(document).ready(function() {
    // ketika tombol detail ditekan
    $('.ubahayamhilang').on("click", function() {
      // ambil nilai id dari link print
      var DataJadwal = this.id;
      var datanya = DataJadwal.split("|");
      $("#IsiModal").html('<input style="padding-bottom: 10px;" type="hidden" name="id" class="form-control" value=' + datanya[0] + '><input style="padding-bottom: 10px;" type="hidden" name="ayamhilang" class="form-control" value=' + datanya[6] + '> <div class="row"> <div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Id Ayam</label><input style="padding-bottom: 10px;" type="text" name="idayam" class="form-control" value=' + datanya[1] + ' readonly> </div></div><div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Nama Ayam</label><input style="padding-bottom: 10px;" type="text" name="namaayam" class="form-control" value=' + datanya[2] + ' readonly> </div></div></div><div class="row"> <div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Harga Jual</label><input style="padding-bottom: 10px;" type="text" name="hargajual" class="form-control" value=' + datanya[3] + ' readonly></div></div><div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Stock Awal</label><input style="padding-bottom: 10px;" type="text" name="stockawal" class="form-control" value=' + datanya[4] + ' readonly></div></div></div> <div class="row"><div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Jumlah Ayam</label><input style="padding-bottom: 10px;" type="text" name="jumlahayam" class="form-control" value=' + datanya[5] + '> <input style="padding-bottom: 10px;" type="hidden" name="jumlahayamasal" class="form-control" value=' + datanya[5] + ' readonly></div></div></div>');
    });

  });
</script>


<script>
  $(document).ready(function() {
    // ketika tombol detail ditekan
    $('.ubahayammati').on("click", function() {
      // ambil nilai id dari link print
      var DataJadwal = this.id;
      var datanya = DataJadwal.split("|");
      $("#IsiModal").html('<input style="padding-bottom: 10px;" type="hidden" name="id" class="form-control" value=' + datanya[0] + '><input style="padding-bottom: 10px;" type="hidden" name="ayammati" class="form-control" value=' + datanya[6] + '> <div class="row"> <div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Id Ayam</label><input style="padding-bottom: 10px;" type="text" name="idayam" class="form-control" value=' + datanya[1] + ' readonly> </div></div><div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Nama Ayam</label><input style="padding-bottom: 10px;" type="text" name="namaayam" class="form-control" value=' + datanya[2] + ' readonly> </div></div></div><div class="row"> <div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Harga Jual</label><input style="padding-bottom: 10px;" type="text" name="hargajual" class="form-control" value=' + datanya[3] + ' readonly></div></div><div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Stock Awal</label><input style="padding-bottom: 10px;" type="text" name="stockawal" class="form-control" value=' + datanya[4] + ' readonly></div></div></div> <div class="row"><div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Jumlah Ayam</label><input style="padding-bottom: 10px;" type="text" name="jumlahayam" class="form-control" value=' + datanya[5] + '> <input style="padding-bottom: 10px;" type="hidden" name="jumlahayamasal" class="form-control" value=' + datanya[5] + ' readonly></div></div></div>');
    });

  });
</script>
<script>
  $(document).ready(function() {
    // ketika tombol detail ditekan
    $('.hapusayammati').on("click", function() {
      // ambil nilai id dari link print
      var DataJadwal = this.id;
      var datanya = DataJadwal.split("|");
      $("#IsiModalHapusAyamMati").html('<input style="padding-bottom: 10px;" type="hidden" name="id" class="form-control" value=' + datanya[0] + '><input style="padding-bottom: 10px;" type="hidden" name="idayam" class="form-control" value=' + datanya[1] + '><input style="padding-bottom: 10px;" type="hidden" name="ayammati" class="form-control" value=' + datanya[2] + '><input style="padding-bottom: 10px;" type="hidden" name="jumlahayam" class="form-control" value=' + datanya[3] + '> Apakah anda yakin ingin menghapus data ini ?');
    });

  });
</script>
<script>
  $(document).ready(function() {
    // ketika tombol detail ditekan
    $('.change').on("click", function() {
      // ambil nilai id dari link print
      var DataJadwal = this.id;
      var datanya = DataJadwal.split("|");
      $("#IsiModalChange").html('<input style="padding-bottom: 10px;" type="hidden" name="id" class="form-control" value=' + datanya[0] + '> <input style="padding-bottom: 10px;" type="hidden" name="subtotal" class="form-control" value=' + datanya[5] + '><input style="padding-bottom: 10px;" type="hidden" name="ayamkeluar" class="form-control" value=' + datanya[6] + '> <div class="row"> <div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Id Ayam</label><input style="padding-bottom: 10px;" type="text" name="idayam" class="form-control" value=' + datanya[1] + ' readonly> </div></div><div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Nama Ayam</label><input style="padding-bottom: 10px;" type="text" name="namaayam" class="form-control" value=' + datanya[2] + ' readonly> </div></div></div><div class="row"> <div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Harga Beli</label><input style="padding-bottom: 10px;" type="text" name="hargajual" class="form-control" value=' + datanya[3] + ' readonly></div></div><div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Jumlah Beli</label><input style="padding-bottom: 10px;" type="text" name="jumlahbeli" class="form-control" value=' + datanya[4] + '><input style="padding-bottom: 10px;" type="hidden" name="jumlahbeliasal" class="form-control" value=' + datanya[4] + '></div></div></div> ');
    });

  });
</script>
<script type="text/javascript">
  function tampil(jenis) {
    var filterdata = "";
    switch (jenis) {
      case "Nama": {
        jenis = '<form action="<?php echo base_url() . 'listperizinan/filterdata-namakaryawan'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true"><div class="row"><div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Nama Karyawan</label><div class="input-group"><input type="text"" class="form-control"  id="namakaryawan" name="namakaryawan" required autofocus></div></div></div></div> <button type="submit" class="btn btn-info">Lihat Data</button></form>';
      }
      break;
      case "Tanggal": {
        jenis = '<form action="<?php echo base_url() . 'listperizinan/filterdata-tanggalperiode'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true"><div class="row"><div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Dari Tanggal</label><input style="padding-bottom: 10px;" type="date" name="dari"  required class="form-control"></div> </div><div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Sampai Tanggal</label><input style="padding-bottom: 10px;" type="date" name="sampai"  required class="form-control"></div> </div></div> <button type="submit" class="btn btn-info">Lihat Data</button></form>'
      }
      break;
      default:
        jenis = "";
    }
    document.getElementById('filterdata').innerHTML = jenis;
  }
</script>
<script type="text/javascript">
  function tampil1(jenis) {
    var filterdata = "";
    switch (jenis) {
      case "Nama": {
        jenis = '<form action="<?php echo base_url() . 'cetakperizinan/filterdata-namakaryawan'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true"><div class="row"><div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Nama Karyawan</label><div class="input-group"><input type="text"" class="form-control"  id="namakaryawan" name="namakaryawan" required autofocus></div></div></div></div> <button type="submit" class="btn btn-info">Cetak Data</button></form>';
      }
      break;
      case "Tanggal": {
        jenis = '<form action="<?php echo base_url() . 'cetakperizinan/filterdata-tanggalperiode'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true"><div class="row"><div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Dari Tanggal</label><input style="padding-bottom: 10px;" type="date" name="dari"  required class="form-control"></div> </div><div class="col-md-6"><div class="form-group"><label class="bmd-label-floating">Sampai Tanggal</label><input style="padding-bottom: 10px;" type="date" name="sampai"  required class="form-control"></div> </div></div> <button type="submit" class="btn btn-info">Cetak Data</button></form>'
      }
      break;
      default:
        jenis = "";
    }
    document.getElementById('filterdatatanggal').innerHTML = jenis;
  }

  function setNominalPerOrang() {
    let nominal = $("#nominalarisan").val();
    let slot = $("#jumlahslotarisan").val();
    $("#nominalperorangarisan").val(nominal/slot);
  }
</script>
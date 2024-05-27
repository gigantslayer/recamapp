<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Laporan</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item active"><a class="text-info" href="<?php echo base_url("laporan") ?>invoice">Laporan</a></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>


  <!-- Modal -->
  <div class="modal fade" id="modalfilterpelanggan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <form action="<?= base_url("laporanpelanggan") ?>" method="post" target="_blank">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Laporan pelanggan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-6">
                <label>Tanggal Awal</label>
                <input type="date" name="date-start" value="<?= date("Y-m-d") ?>" class="form-control" />
              </div>
              <div class="col-6">
                <label>Tanggal Akhir</label>
                <input type="date" name="date-end" value="<?= date("Y-m-d") ?>" class="form-control" />
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Cetak</button>
          </div>

        </div>
      </form>
    </div>
  </div>


    <!-- Modal -->
    <div class="modal fade" id="modalfilterpenjualan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <form action="<?= base_url("laporanpenjualan") ?>" method="post" target="_blank">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Laporan penjualan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-6">
                <label>Tanggal Awal</label>
                <input type="date" name="date-start" value="<?= date("Y-m-d") ?>" class="form-control" />
              </div>
              <div class="col-6">
                <label>Tanggal Akhir</label>
                <input type="date" name="date-end" value="<?= date("Y-m-d") ?>" class="form-control" />
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Cetak</button>
          </div>

        </div>
      </form>
    </div>
  </div>


  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-12">
          <!-- /.card -->
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">

              <div class="row">
                <div class="col-md-4">
                  <div class="card border-bottom-primary shadow h-100 py-2">
                    <div class="card-body">
                      <div class="no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-center">
                            <h4>Laporan Produk</h4>
                          </div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                        </div>
                        <div class="text-center mt-3">
                          <a target="_blank" href="<?= base_url("laporanproduk") ?>" class="btn btn-primary btn-lg">Buka</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="card border-bottom-primary shadow h-100 py-2">
                    <div class="card-body">
                      <div class="no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-center">
                            <h4>Laporan Pelanggan</h4>
                          </div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                        </div>
                        <div class="text-center mt-3">
                          <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalfilterpelanggan">Buka</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="card border-bottom-primary shadow h-100 py-2">
                    <div class="card-body">
                      <div class="no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-center">
                            <h4>Laporan Penjualan</h4>
                          </div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                        </div>
                        <div class="text-center mt-3">
                          <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalfilterpenjualan">Buka</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
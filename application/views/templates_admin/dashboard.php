<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Home</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <?php
        foreach ($datauser as $data) {
        ?>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Jumlah User</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data->jumlah ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <?php
        foreach ($dataarisan as $data) {
        ?>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Jumlah Arisan</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data->jumlah ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dice fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <!-- Content Row -->


        <!-- Content Row -->

    </div>

    <!-- /.container-fluid -->

    <!-- <div class="row">
        <div class="col-6" id="chart-minggu">
            <div class="card">
                <div class="card-header" style="display:flex">
                    <h4 style="width:70%;color:#1CC899;font-size:20px;">Jumlah Penjualan Minggu Ini </h4>
                    <div style="display:flex;width:30%;justify-content:right;">
                        <select id="minggu-select" onchange="ubahGrafikMinggu()">
                            <option selected value="minggu">Minggu Ini</option>
                            <option value="bulan">Bulan Ini</option>
                        </select>
                    </div>
                </div>
                <div class="card-body" style="color:black">
                    <div id="chart-minggu-ini"></div>
                </div>
            </div>
        </div>

        <div class="col-6" id="chart-bulan" style="display:none">
            <div class="card">
                <div class="card-header" style="display:flex">
                    <h4 style="width:70%;color:#1CC899;font-size:20px;">Jumlah Penjualan Bulan Ini </h4>
                    <div style="display:flex;width:30%;justify-content:right;">
                        <select id="bulan-select" onchange="ubahGrafikBulan()">
                            <option value="minggu">Minggu Ini</option>
                            <option value="bulan" selected>Bulan Ini</option>
                        </select>
                    </div>
                </div>
                <div class="card-body" style="color:black">
                    <div id="chart-bulan-ini"></div>
                </div>
            </div>
        </div>
    </div> -->




</div>
</div>
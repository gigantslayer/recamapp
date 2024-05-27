<div class="container-fluid">

                    <!-- 404 Error Text -->
                    <?php if ($user->role_id == 1): ?>
                    <div class="text-center">
                        <div class="error mx-auto" data-text="403">403</div><br>
                        <p class="lead text-gray-800 mb-5">Akses Ditolak</p>
                        <a href="<?= base_url('admin')?>">&larr; Silahkan Kembali </a>
                    </div>
                    <?php endif ?>
                    <?php if ($user->role_id == 2): ?>
                    <div class="text-center">
                        <div class="error mx-auto" data-text="403">403</div><br>
                        <p class="lead text-gray-800 mb-5">Akses Ditolak</p>
                        <a href="<?= base_url('guru')?>">&larr; Silahkan Kembali </a>
                    </div>
                    <?php endif ?>
                    <?php if ($user->role_id == 3): ?>
                    <div class="text-center">
                        <div class="error mx-auto" data-text="403">403</div><br>
                        <p class="lead text-gray-800 mb-5">Akses Ditolak</p>
                        <a href="<?= base_url('siswa')?>">&larr; Silahkan Kembali </a>
                    </div>
                    <?php endif ?>

                </div>
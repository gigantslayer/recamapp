<div class="content">
  <div class="container-fluid">

  <?= $this->session->flashdata('message');?>
    <h1 class="h3 mb-4 text-gray-800">Profile Saya</h1>
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="<?= base_url('assets/img/profile/'). $user->photo?>" class="card-img" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Data Akun</h5>
            <hr>
            <p class="card-text">Nama          : <?= $user->nama ?></p>
            <p class="card-text">Email         : <?= $user->email ?></p>
            <p class="card-text"><small class="text-muted">Akun dibuat pada <?= format_indo(date('Y-m-d', strtotime($user->tanggal_daftar))); ?></small></p>
          </div>
        </div>
      </div>
    </div>
    <br><hr>
    <h1 class="h3 mb-4 text-gray-800">Edit Profile</h1>

    <div class="row">
        <div class="col-lg-8">
            <?= form_open_multipart('admin/edit'); ?>
            <div class="form-group row">
                <input type="hidden" class="form-control" id="email" name="id" value="<?= $user->email ?>" readonly>
                <label for="email" class="col-sm-3 col-foem-label">Email</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="email" value="<?= $user->email ?>" name="email" >
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-3 col-foem-label">Nama Lengkap</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="name" name="name" value="<?= $user->nama ?>">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3">Gambar</div>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="<?= base_url('assets/img/profile/') . $user->photo; ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-9">
                            <div class="custom-file" id="file5">
                              <input type="file" class="custom-file-input" id="file5-input" name="image" onchange="previewfile5()">
                              <label class="custom-file-label" id="file5-label" for="rekomorganisasi">Pilih file</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row justify-content-end">
                <div class="col-sm-9">
                    <button type="submit" class="btn btn-info">Update</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    <hr><br>
    <h1 class="h3 mb-4 text-gray-800">Ubah Password</h1>

    <div class="row">
        <div class="col-lg-6">
            <form action="<?= base_url('ubahpassword-admin') ?>" method="POST">
                <div class="form-group">
                        <label for="current_password">Current Password</label>
                        <div class="input-group">
                            <input type="hidden" class="form-control" id="email" name="id" value="<?= $user->id_user ?>" readonly>
                            <input type="password" class="form-control" id="current_password" name="current_password">
                            <div class="input-group-append">
                                <div class="input-group-text bg-white border-left-0 <?= (form_error('password')) ? 'border-danger rounded-right' : ''; ?>">
                                    <a role="button" onclick="previewPassword(this, 'current_password')"><span class="fa fa-fw fa-sm fa-eye-slash text-black-50"></span></a>
                                </div>
                            </div>
                        </div>
                        
                             <?= form_error('current_password', '<small class="text-danger pl-2">', '</small>'); ?>
                    </div>
                <!-- <div class="form-group">
                    <label for="current_password">Current Password</label>
                    <input type="hidden" class="form-control" id="email" name="id" value="<?= $user->id_user ?>" readonly>
                    <input type="password" class="form-control" id="current_password" name="current_password">
                    <?= form_error('current_password', '<small class="text-danger pl-2">', '</small>'); ?>
                </div> -->
                <div class="form-group">
                        <label for="current_password">New Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="new_password1" name="new_password1">

                            <div class="input-group-append">
                                <div class="input-group-text bg-white border-left-0">
                                    <a role="button" onclick="previewPassword(this, 'new_password1')"><span class="fa fa-fw fa-sm fa-eye-slash text-black-50"></span></a>
                                </div>
                            </div>
                            
                          

                        </div>
                          <?= form_error('new_password1', '<small class="text-danger pl-2">', '</small>'); ?>
                    </div>

                <!-- <div class="form-group">
                    <label for="new_password1">New Password</label>
                    <input type="password" class="form-control" id="new_password1" name="new_password1">
                    <?= form_error('new_password1', '<small class="text-danger pl-2">', '</small>'); ?>
                </div> -->
                <div class="form-group">
                        <label for="current_password">New Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="new_password2" name="new_password2">
                            <div class="input-group-append">
                                <div class="input-group-text bg-white border-left-0 <?= (form_error('password')) ? 'border-danger rounded-right' : ''; ?>">
                                    <a role="button" onclick="previewPassword(this, 'new_password2')"><span class="fa fa-fw fa-sm fa-eye-slash text-black-50"></span></a>
                                </div>
                            </div>
                            <?= form_error('password'); ?>
                        </div>

                            <?= form_error('new_password2', '<small class="text-danger pl-2">', '</small>'); ?>
                    </div>
                <!-- <div class="form-group">
                    <label for="new_password2">Repeat Password</label>
                    <input type="password" class="form-control" id="new_password2" name="new_password2">
                    <?= form_error('new_password2', '<small class="text-danger pl-2">', '</small>'); ?>
                </div> -->
                <div class="form-group">
                    <button type="submit" class="btn btn-info">Change Password</button>
                </div>
            </form>
        </div>
    </div>
    <br>

</div>
  </div>
</div>
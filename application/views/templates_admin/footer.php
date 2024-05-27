<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy; Arisan App 2023</span>
    </div>
  </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin keluar dari sistem?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Silahkan klik "Logout" untuk keluar dari sistem</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-info" href="<?= base_url('auth/logout') ?>">Logout</a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="logoutLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="logoutLabel">Konfirmasi Hapus</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Apakah anda yakin ingin menghapus data ini ?</div>
      <div class="modal-footer">
        <?= form_open('', 'class="d-inline" id="formLinkDelete"') ?>
        <input type="hidden" name="id" id="valueId">
        <button type="submit" class="btn btn-danger"> Ya </button> <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
        <?= form_close(); ?>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="doneModal" tabindex="-1" role="dialog" aria-labelledby="logoutLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="logoutLabel">Konfirmasi</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Apakah anda yakin ingin menyelesaikan arisan ini ?</div>
      <div class="modal-footer">
        <?= form_open('', 'class="d-inline" id="formLinkDone"') ?>
        <input type="hidden" name="id" id="valueDoneId">
        <button type="submit" class="btn btn-danger"> Ya </button> <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
        <?= form_close(); ?>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="cancelModal" tabindex="-1" role="dialog" aria-labelledby="logoutLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="logoutLabel">Konfirmasi</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Apakah anda yakin ingin cancel arisan ini ?</div>
      <div class="modal-footer">
        <?= form_open('', 'class="d-inline" id="formLinkCancel"') ?>
        <input type="hidden" name="id" id="valueCancelId">
        <button type="submit" class="btn btn-danger"> Ya </button> <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
        <?= form_close(); ?>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="ubahStatusModal" tabindex="-1" role="dialog" aria-labelledby="logoutLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="logoutLabel">Konfirmasi Ubah Status</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>

      </div>
      <div class="modal-body">Apakah anda yakin ingin mengubah Status Pengiriman menjadi Selesai ?</div>
      <div class="modal-footer">
        <?= form_open('', 'class="d-inline" id="formLinkUpdate"') ?>
        <input type="hidden" name="id" id="valueIdStatus">
        <button type="submit" class="btn btn-danger"> Ya </button> <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
        <?= form_close(); ?>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form action="<?php echo base_url() . 'admin/deletekaryawan'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
        <div class="modal-body" id="IsiModalHapuskaryawan">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger">Ya</button>
          <a class="btn btn-info" type="button" data-dismiss="modal">Cancel</a>
        </div>
      </form>
    </div>
  </div>
</div>
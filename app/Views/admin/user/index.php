<?= $this->extend('layouts/layout_admin') ?>
<?= $this->section('layout') ?>

<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><?= $title ?></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active"><?= $title ?></li>
          </ol>
        </div>
      </div>
      <?php if (session()->getFlashdata('success')) { ?>
        <div class="alert alert-success">
          <?= session()->getFlashdata('success'); ?>
        </div>
      <?php } else if (session()->getFlashdata('error')) { ?>
        <div class="alert alert-danger">
          <?= session()->getFlashdata('error'); ?>
        </div>
      <?php } ?>
    </div>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data <?= $title ?></h3>
            <div class="card-tools">
              <a class="btn btn-sm btn-success" href="<?= base_url('dashboard/user/new') ?>"><i class="fa fa-plus"></i> Tambah Data</a>
            </div>
          </div>

          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <thead>
                <th class="text-center">No</th>
                <th>Username</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
                <th>Dibuat</th>
                <th>Terakhir Akses</th>
                <th>Aksi</th>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($users as $user) :
                ?>
                  <tr>
                    <td class="text-center"><?= $no++; ?></td>
                    <td><?= $user['username']  ?></td>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['role'] ?></td>
                    <td><?= $user['status'] == 1 ? 'Active' : 'Need Confirmation' ?></td>
                    <td><?= $user['created_at'] ?></td>
                    <td><?= $user['last_login'] ?></td>
                    <td>
                      <a class="btn btn-sm btn-primary" href="<?= base_url('dashboard/user/' . $user['id'] . '/preview') ?>"><i class="fa fa-eye"></i></a>
                      <a class="btn btn-sm btn-info" href="<?= base_url('dashboard/user/' . $user['id'] . '/edit') ?>"><i class="fa fa-edit"></i></a>
                      <a class="btn btn-sm btn-danger" href="#" data-href="<?= base_url('dashboard/user/' . $user['id'] . '/delete') ?>" onclick="confirmToDelete(this)"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>

            <!-- modal -->
            <div id="confirm-dialog" class="modal" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-body">
                    <h2 class="h2">Are you sure?</h2>
                    <p>The data will be deleted and lost forever</p>
                  </div>
                  <div class="modal-footer">
                    <a href="#" role="button" id="delete-button" class="btn btn-danger">Delete</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<script>
  function confirmToDelete(el) {
    $("#delete-button").attr("href", el.dataset.href);
    $("#confirm-dialog").modal('show');
  }
</script>

<?= $this->endSection(); ?>
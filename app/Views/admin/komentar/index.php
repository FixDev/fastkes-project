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
    </div>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data <?= $title ?></h3>

          </div>

          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <thead>
                <th class="text-center">No</th>
                <th>Tanggal</th>
                <th>Username</th>
                <th>Faskes</th>
                <th>Isi</th>
                <th>Rating</th>
                <th>Aksi</th>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($komens as $komentar) :
                ?>
                  <tr>
                    <td class="text-center"><?= $no++; ?></td>
                    <td><?= $komentar['tanggal']  ?></td>
                    <td><?= $komentar['username'] ?></td>
                    <td><?= $komentar['faskes'] ?></td>
                    <td><?= $komentar['isi'] ?></td>
                    <td><?= $komentar['nilai_rating'] . ' (' . $komentar['rating'] . ')' ?></td>
                    <td>
                      <a class="btn btn-sm btn-danger" href="#" data-href="<?= base_url('dashboard/komentar/' . $komentar['id'] . '/delete') ?>" onclick="confirmToDelete(this)"><i class="fa fa-trash"></i></a>
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
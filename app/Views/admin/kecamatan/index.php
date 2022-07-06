<?= $this->extend('layouts/layout_admin') ?>
<?= $this->section('layout') ?>

<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>List Kecamatan</h1>
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
            <div class="card-tools">
              <a class="btn btn-sm btn-success" href="<?= base_url('dashboard/kecamatan/new') ?>"><i class="fa fa-plus"></i> Tambah Data</a>
            </div>
          </div>

          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <thead>
                <th class="text-center">No</th>
                <th>Nama</th>
                <th>Aksi</th>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($kecamatan as $kec) :
                ?>
                  <tr>
                    <td class="text-center"><?= $no++; ?></td>
                    <td><?= $kec['nama']  ?></td>
                    <td><a class="btn btn-sm btn-info" href="#"><i class="fa fa-edit"></i></a> <a class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a></td>
                  </tr>
                <?php endforeach; ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?= $this->endSection(); ?>
<?= $this->extend('layouts/layout_admin') ?>
<?= $this->section('layout') ?>

<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Data <?= $title ?></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('dashboard/kecamatan') ?>"><?= $title ?></a></li>
            <li class="breadcrumb-item active">Edit Data <?= $title ?></li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Data <?= $title ?></h3>
            </div>
            <form action="" method="POST">
              <input type="hidden" name="id" value="<?= $kecamatan['id'] ?>" />
              <div class="card-body">
                <div class="form-group">
                  <label for="kecamatan">Nama Kecamatan</label>
                  <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?= $kecamatan['nama'] ?>" placeholder="Masukkan nama kecamatan">
                </div>
              </div>

              <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?= $this->endSection() ?>
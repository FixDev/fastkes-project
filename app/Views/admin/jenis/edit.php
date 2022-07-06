<?= $this->extend('layouts/layout_admin') ?>
<?= $this->section('layout') ?>

<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah Data Jenis Fasilitas Kesehatan</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= route_to('jenis-index') ?>">Jenis Faskes</a></li>
            <li class="breadcrumb-item active">Tambah Data Jenis Faskes</li>
          </ol>
        </div>
      </div>
      <?php if (session()->getFlashdata('error')) { ?>
        <div class="alert alert-danger">
          <?= session()->getFlashdata('error'); ?>
        </div>
      <?php } ?>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Data Jenis Faskes</h3>
            </div>
            <form action="" method="POST">
              <input type="hidden" name="id" value="<?= $jenis['id'] ?>" />
              <div class="card-body">
                <div class="form-group">
                  <label for="nama">Nama Jenis Faskes</label>
                  <input type="text" class="form-control" id="nama" name="nama" value="<?= $jenis['nama']??null ?>" placeholder="Masukkan nama jenis fasilitas kesehatan">
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
<?= $this->extend('layouts/layout_admin') ?>
<?= $this->section('layout') ?>

<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah Data <?= $title ?></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('dashboard/user') ?>"><?= $title ?></a></li>
            <li class="breadcrumb-item active">Tambah Data <?= $title ?></li>
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
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Data <?= $title ?></h3>
            </div>
            <form action="" method="POST">
              <div class="card-body">
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username" required>
                </div>

                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required>
                </div>

                <div class="form-group">
                  <label for="retypepassword">Retype-Password</label>
                  <input type="password" class="form-control" id="retypepassword" name="retypepassword" placeholder="Ketikkan Ulang Password" required>
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" required>
                </div>

                <div class="form-group">
                  <label for="role">Role</label>
                  <select id="role" name="role" class="custom-select" required>
                    <option value="administrator">Administrator</option>
                    <option value="public">Public</option>
                    <option value="member">Member</option>
                  </select>
                </div>

              </div>
              <div class="card-footer text-right">
                <a href="<?= base_url('dashboard/user') ?>" class="btn btn-secondary">Back</a>
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
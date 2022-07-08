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
            <li class="breadcrumb-item"><a href="<?= base_url('dashboard/user') ?>"><?= $title ?></a></li>
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
              <input type="hidden" name="id" value="<?= $user['id'] ?>" />
              <div class="card-body">
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" id="username" name="username" value="<?= $user['username'] ?>">
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" value="<?= $user['email'] ?>">
                </div>

                <div class="form-group">
                  <label>Status</label>
                  <div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input name="status" id="active" type="radio" class="custom-control-input" value="1" <?= $user['status'] == 1 ? 'checked' : '' ?>>
                      <label for="active" class="custom-control-label">Active</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input name="status" id="needapprove" type="radio" class="custom-control-input" value="0" <?= $user['status'] == 0 ? 'checked' : '' ?>>
                      <label for="needapprove" class="custom-control-label">Need Confirmation</label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="role">Role</label>
                  <select id="role" name="role" class="custom-select">
                    <option value="administrator" <?= $user['role'] == 'administrator' ? 'selected' : '' ?>>Administrator</option>
                    <option value="public" <?= $user['role'] == 'public' ? 'selected' : '' ?>>Public</option>
                    <option value="member" <?= $user['role'] == 'member' ? 'selected' : '' ?>>Member</option>
                  </select>
                </div>

              </div>

              <div class="card-footer text-right">
                <a href="<?= base_url('dashboard/user') ?>" class="btn btn-secondary">Back</a>
                <a href="<?= base_url('dashboard/user/' . $user['id'] . '/change-password') ?>" class="btn btn-info">Change Password</a>
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
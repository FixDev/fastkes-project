<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="<?= base_url('/dashboard') ?>" class="brand-link">
        <img src="<?= base_url('img/Lambang_Kota_Depok.png') ?>" alt="FASTKES DEPOK Logo" class="brand-image elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">FASTKES DEPOK</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url('adminlte/dist/img/user2-160x160.jpg') ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Sayib Ganteng</a>
            </div>
        </div>

        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?= base_url('/dashboard') ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('/dashboard/faskes') ?>" class="nav-link">
                        <i class="nav-icon fas fa-hospital"></i>
                        <p>
                            Kelola Faskes
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('/dashboard/kecamatan') ?>" class="nav-link">
                        <i class="nav-icon fas fa-compass"></i>
                        <p>
                            Kelola Kecamatan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('/dashboard/jenis') ?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Kelola Jenis Faskes
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('/dashboard/user') ?>" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Kelola User
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('/dashboard/komentar') ?>" class="nav-link">
                        <i class="nav-icon fas fa-comment"></i>
                        <p>
                            Kelola Komentar
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<?= $this->extend('layouts/layout_admin'); ?>
<?= $this->section('layout') ?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-lg-3 col-6">

                <div class="small-box bg-info">
                    <div class="inner">
                        <h3><?= $totalFaskes ?? "0"; ?></h3>
                        <p>Total Faskes</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-hospital"></i>
                    </div>
                    <a href="<?= base_url('dashboard/faskes') ?>" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-6">

                <div class="small-box bg-success">
                    <div class="inner">
                        <h3><?= $totalJenis ?? "0"; ?></h3>
                        <p>Total Jenis Faskes</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-list"></i>
                    </div>
                    <a href="<?= base_url('dashboard/jenis') ?>" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-6">

                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3><?= $totalKomentar ?? "0"; ?></h3>
                        <p>Total Komentar</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-comment"></i>
                    </div>
                    <a href="<?= base_url('dashboard/komentar') ?>" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-6">

                <div class="small-box bg-primary">
                    <div class="inner">
                        <h3><?= $totalUser ?? "0"; ?></h3>
                        <p>Total User</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <a href="<?= base_url('dashboard/user') ?>" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-6">

                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?= $avgRating ?? "0"; ?></h3>
                        <p>Avg. Rating</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <!-- <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a> -->
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>
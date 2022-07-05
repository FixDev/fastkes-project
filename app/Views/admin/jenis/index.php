<?= $this->extend('layouts/layout_admin') ?>
<?= $this->section('layout') ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Jenis Fasilitas Kesehatan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Jenis Faskes</li>
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
                        <h3 class="card-title">Data Jenis Faskes</h3>
                        <div class="card-tools">
                            <a class="btn btn-sm btn-success" href="<?= route_to('jenis-add') ?>"><i class="fa fa-plus"></i> Tambah Data</a>
                        </div>
                    </div>

                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap text-center">
                            <thead>
                                <th>No</th>
                                <th>Nama Jenis Faskes</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($jenis as $j) :
                                ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $j['nama']  ?></td>
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
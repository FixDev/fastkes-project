<?= $this->extend('layouts/layout_admin') ?>
<?= $this->section('layout') ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Fasilitas Kesehatan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Faskes</li>
                    </ol>
                </div>
            </div>

            <?php if (session()->getFlashdata('success')) { ?>
                <div class="alert alert-success">
                    <?= session()->getFlashdata('success'); ?>
                </div>
            <?php } ?>
        </div>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Faskes</h3>
                        <div class="card-tools">
                            <a class="btn btn-sm btn-success" href="<?= route_to('faskes-add') ?>"><i class="fa fa-plus"></i> Tambah Data</a>
                        </div>
                    </div>

                    <div class="card-body p-0">
                        <table class="table table-responsive table-hover text-nowrap text-center" id="table-data">
                            <thead>
                                <th>No</th>
                                <th>Nama Faskes</th>
                                <th>Jenis</th>
                                <th>Alamat</th>
                                <th>Koordinat</th>
                                <th>Kecamatan</th>
                                <th>Foto</th>
                                <th>Website</th>
                                <th>Rating</th>
                                <th>Jumlah Dokter</th>
                                <th>Jumlah Pegawai</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($faskes as $f) :
                                ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $f['nama']  ?></td>
                                        <td><?= $f['nama_faskes']  ?></td>
                                        <td><?= $f['alamat'] ?></td>
                                        <td><?= $f['latlong']  ?></td>
                                        <td><?= $f['nama_kecamatan'] ?></td>
                                        <td><img src="/faskes/<?= $f['foto1']  ?>" alt="<?= $f['foto1']  ?>" class="w-100"></td>
                                        <td><?= $f['website']  ?></td>
                                        <td><?= $f['skor_rating'] ?></td>
                                        <td><?= $f['jumlah_dokter'] ?></td>
                                        <td><?= $f['jumlah_pegawai'] ?></td>
                                        <td><a class="btn btn-sm btn-info" href="<?= route_to('faskes-edit', $f['id']) ?>"><i class="fa fa-edit"></i></a> <a class="btn btn-sm btn-danger" href="<?= route_to('faskes-delete', $f['id']) ?>"><i class="fa fa-trash"></i></a></td>
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
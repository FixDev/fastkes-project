<?= $this->extend('layouts/layout_admin') ?>
<?= $this->section('layout') ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
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
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Faskes</h3>

                <div class="card-tools">
                    <a class="btn btn-sm btn-success" href="<?= route_to('faskes-add') ?>"><i class="fa fa-plus"></i> Tambah Data</a>
                    <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button> -->
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped table-responsive" id="table-data">
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
                                <td><img src="/faskes/<?= $f['foto1']  ?>" alt="<?= $f['foto1']  ?>"></td>
                                <td><?= $f['website']  ?></td>
                                <td><?= $f['skor_rating'] ?></td>
                                <td><?= $f['jumlah_dokter'] ?></td>
                                <td><?= $f['jumlah_pegawai'] ?></td>
                                <td><a class="btn d-block btn-sm btn-warning" href="#"><i class="fa fa-edit"></i> Edit</a> <a class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Hapus</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>

<?= $this->endSection(); ?>
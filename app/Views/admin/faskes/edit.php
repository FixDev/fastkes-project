<?= $this->extend('layouts/layout_admin') ?>
<?= $this->section('layout') ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Data Fasilitas Kesehatan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= route_to('faskes') ?>">Faskes</a></li>
                        <li class="breadcrumb-item active">Tambah Data Faskes</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Data Faskes</h3>
                            <div class="card-tools">
                                <!-- <a class="btn btn-sm btn-success" href=""><i class="fa fa-plus"></i> Tambah Data</a> -->
                                <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button> -->
                            </div>
                        </div>
                        <form action="<?= route_to('faskes-update', $faskes['id']) ?>" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 mb-2">
                                        <div class="form-group">
                                            <label for="nama">Nama Jenis Faskes</label>
                                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?= $faskes['nama'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <div class="form-group">
                                            <label>Jenis</label>
                                            <select name="jenis_faskes_id" class="form-control">
                                                <?php
                                                foreach ($jenis_faskes as $jf) {
                                                ?>
                                                    <option <?= $faskes['jenis_faskes_id'] == $jf['id'] ? 'selected' : '' ?> value="<?= $jf['id'] ?>"><?= $jf['nama'] ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="<?= $faskes['alamat'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <div class="form-group">
                                            <label>Jenis</label>
                                            <select name="kecamatan_id" class="form-control">
                                                <?php
                                                foreach ($kecamatan as $k) {
                                                ?>
                                                    <option <?= $faskes['kecamatan_id'] == $k['id'] ? 'selected' : '' ?> value="<?= $k['id'] ?>"><?= $k['nama'] ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <div class="form-group">
                                            <label>Koordinat</label>
                                            <input type="text" class="form-control" name="latlong" id="latlong" placeholder="Koordinat" value="<?= $faskes['latlong'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <input type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Deskripsi" value="<?= $faskes['deskripsi'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <div class="form-group">
                                            <label>Skor Rating</label>
                                            <input type="number" step="0.01" class="form-control" name="skor_rating" id="skor_rating" placeholder="Skor Rating" value="<?= $faskes['skor_rating'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <div class="form-group">
                                            <label>Website</label>
                                            <input type="text" class="form-control" name="website" id="website" placeholder="Website" value="<?= $faskes['website'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <div class="form-group">
                                            <label>Jumlah Dokter</label>
                                            <input type="number" class="form-control" name="jumlah_dokter" id="jumlah_dokter" placeholder="Jumlah Dokter" value="<?= $faskes['jumlah_dokter'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <div class="form-group">
                                            <label>Jumlah Pegawai</label>
                                            <input type="number" class="form-control" name="jumlah_pegawai" id="jumlah_pegawai" placeholder="Jumlah Pegawai" value="<?= $faskes['jumlah_pegawai'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <div class="form-group">
                                            <label>Foto 1</label>
                                            <input type="file" class="form-control" name="foto1" id="foto1" placeholder="Jumlah Pegawai">
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <div class="form-group">
                                            <label>Foto 2</label>
                                            <input type="file" class="form-control" name="foto2" id="foto2" placeholder="Jumlah Pegawai">
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <div class="form-group">
                                            <label>Foto 3</label>
                                            <input type="file" class="form-control" name="foto3" id="foto3" placeholder="Jumlah Pegawai">
                                        </div>
                                    </div>
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
    <!-- /.content -->
</div>

<?= $this->endSection() ?>
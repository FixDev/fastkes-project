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

        <!-- Default box -->
        <div class="card">
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
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label>Jenis</label>
                        <select name="jenis_id" class="form-control">
                            <?php
                            foreach ($jenis_faskes as $jf) {
                            ?>
                                <option value="<?= $jf['id'] ?>"><?= $jf['nama'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label>Jenis</label>
                        <select name="jenis_id" class="form-control">
                            <?php
                            foreach ($kecamatan as $k) {
                            ?>
                                <option value="<?= $k['id'] ?>"><?= $k['nama'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label>Koordinat</label>
                        <input type="text" class="form-control" name="latlong" id="latlong" placeholder="Koordinat">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label>Deskripsi</label>
                        <input type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Deskripsi">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label>Skor Rating</label>
                        <input type="number" step="0.01" class="form-control" name="skor_rating" id="skor_rating" placeholder="Skor Rating">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label>Website</label>
                        <input type="text" class="form-control" name="website" id="website" placeholder="Website">
                    </div>
                    <div class="col-md-6 md-2">
                        <label>Jumlah Dokter</label>
                        <input type="number" class="form-control" name="jumlah_dokter" id="jumlah_dokter" placeholder="Jumlah Dokter">
                    </div>
                    <div class="col-md-6 md-2">
                        <label>Jumlah Pegawai</label>
                        <input type="number" class="form-control" name="jumlah_pegawai" id="jumlah_pegawai" placeholder="Jumlah Pegawai">
                    </div>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->

    </section>
    <!-- /.content -->
</div>

<?= $this->endSection() ?>
<?php
    $nama_dokter = $_SESSION['nama'];

    $query = mysqli_query($koneksi, "SELECT * FROM dokter WHERE nama='$nama_dokter'");
    $view = mysqli_fetch_array($query);
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-1">
            <div class="col-sm-6">
                <h1>Profil Dokter</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="dokter.php?page=dashboard">Home</a></li>
                    <li class="breadcrumb-item active">Profil</li>
                </ol>
            </div>
        </div>
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Data Dokter</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method='post' action='update/update_profil.php' enctype='multipart/form-data'>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputNamaDokter">Nama Dokter</label>
                    <input type="text" class="form-control" id="exampleInputNamaDokter" placeholder="Nama Dokter" name="nama" value="<?php echo $view['nama']; ?>">
                    <input type="text" class="form-control" id="exampleInputNamaDokter" placeholder="Nama Dokter" name="hidden_id" value="<?php echo $view['id']; ?>" hidden>
                </div>
                <div class="form-group">
                    <label for="exampleInputAlamat">Alamat Dokter</label>
                    <input type="text" class="form-control" id="exampleInputAlamat" placeholder="Alamat Dokter" name="alamat" value="<?php echo $view['alamat']; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputTelepon">Telepon Dokter</label>
                    <input type="text" class="form-control" id="exampleInputTelepon" placeholder="Telepon Dokter" name="no_hp" value="<?php echo $view['no_hp']; ?>">
                </div>
                <div class="form-group">
                    <label class="form-label" for="customFile">Unggah Foto</label>
                    <div style="padding-bottom: 10px"><img src="foto/<?php echo $view['foto']; ?>" width="200px"></div>
                    <input type="file" name="foto" class="form-control" id="customFile">
                </div>
                <!-- /.card-body -->
            </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</section>
<?php
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM pasien WHERE pasien.id='$id'");
    $view = mysqli_fetch_array($query);
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Perbarui Data Pasien</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method='get' action='update/update_data_pasien.php'>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputNamaPasien">Nama Pasien</label>
                    <input type="text" class="form-control" id="exampleInputNamaPasien" placeholder="Nama Pasien" name="nama" value="<?php echo $view['nama']; ?>">
                    <input type="text" class="form-control" id="exampleInputNamaPasien" placeholder="Nama Pasien" name="id" value="<?php echo $view['id']; ?>" hidden>
                </div>
                <div class="form-group">
                    <label for="exampleInputAlamat">Alamat</label>
                    <input type="text" class="form-control" id="exampleInputAlamat" placeholder="Alamat" name="alamat" value="<?php echo $view['alamat']; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputNoKtp">Nomor KTP</label>
                    <input type="text" class="form-control" id="exampleInputNoKtp" placeholder="Nomor KTP" name="no_ktp" value="<?php echo $view['no_ktp']; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputNoHp">Nomor Hp</label>
                    <input type="text" class="form-control" id="exampleInputNoHp" placeholder="Nomor Hp" name="no_hp" value="<?php echo $view['no_hp']; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputNoRm">Nomor RM</label>
                    <input type="text" class="form-control" id="exampleInputNoRm" placeholder="Nomor RM" name="no_rm" value="<?php echo $view['no_rm']; ?>" readonly>
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
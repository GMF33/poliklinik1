<?php
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM poli WHERE poli.id='$id'");
    $view = mysqli_fetch_array($query);
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Perbarui Data Poli</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method='get' action='update/update_data_poli.php'>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputNamaPoli">Nama Poli</label>
                    <input type="text" class="form-control" id="exampleInputNamaPoli" placeholder="Nama Poli" name="nama_poli" value="<?php echo $view['nama_poli']; ?>">
                    <input type="text" class="form-control" id="exampleInputNamaPoli" placeholder="Nama Poli" name="id" value="<?php echo $view['id']; ?>" hidden>
                </div>
                <div class="form-group">
                    <label for="exampleInputKeterangan">Keterangan</label>
                    <input type="text" class="form-control" id="exampleInputKeterangan" placeholder="Keterangan" name="keterangan" value="<?php echo $view['keterangan']; ?>">
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
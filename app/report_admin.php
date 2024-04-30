<?php 
    include('../conf/config_poliklinik.php');
    $query = mysqli_query($koneksi, "SELECT id, 
                            (SELECT count(id) FROM dokter) AS jml_dok, 
                            (SELECT count(id) FROM pasien) AS jml_pasien, 
                            (SELECT count(id) FROM poli) AS jml_poli, 
                            (SELECT count(id) FROM obat) AS jml_obat 
                            FROM dokter");
    $view = mysqli_fetch_array($query);
?>
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                <div class="inner">
                    <h3><?php echo $view['jml_dok']; ?></h3>

                    <p>Total Dokter</p>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-user-md"></i>
                </div>
                <a href="index.php?page=data-dokter" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                <div class="inner">
                    <h3><?php echo $view['jml_pasien']; ?></h3>

                    <p>Total Pasien</p>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-user-injured"></i>
                </div>
                <a href="index.php?page=data-pasien" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                <div class="inner">
                    <h3><?php echo $view['jml_poli']; ?></h3>

                    <p>Total Poli</p>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-hospital"></i>
                </div>
                <a href="index.php?page=kelola-poli" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                <div class="inner">
                    <h3><?php echo $view['jml_obat']; ?></h3>

                    <p>Total Obat</p>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-pills"></i>
                </div>
                <a href="index.php?page=data-obat" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
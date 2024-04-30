<!DOCTYPE html>
<html lang="en">
<?php
  include('../conf/config_poliklinik.php');

  //Input otomatis no_rm
  date_default_timezone_set('Asia/Jakarta');

  $auto = mysqli_query($koneksi, "SELECT max(no_rm) AS max_code FROM pasien");
  $data = mysqli_fetch_array($auto);
  $code = $data['max_code'];
  $urutan = (int)substr($code, 8, 3);
  $urutan++;

  $date = date('Ym');
  $kd_noRM = $date."-".sprintf("%03s", $urutan);
?>
  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-1">
              <div class="col-sm-6">
                <h1>Kelola Pasien</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="index.php?page=dashboard">Home</a></li>
                  <li class="breadcrumb-item active">Pasien</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
      </section>
      <!-- Main content -->
      <section class="content-header">
        <div class="container-fluid">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg">
            Tambah Data
          </button>
          <br></br>
          <div class="row">
            <!-- /.col -->
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Pasien</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th style="width: 10px">No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No. KTP</th>
                        <th>No. Hp</th>
                        <th>No. RM</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $query = mysqli_query($koneksi,"SELECT * FROM pasien");
                        while($dok = mysqli_fetch_array($query)){
                          
                      ?>
                      <tr>
                        <td><?php echo $dok['id'];?></td>
                        <td><?php echo $dok['nama'];?></td>
                        <td><?php echo $dok['alamat'];?></td>
                        <td><?php echo $dok['no_ktp'];?></td>
                        <td><?php echo $dok['no_hp'];?></td>
                        <td><?php echo $dok['no_rm']; ?></td>
                        <td>
                          <a href="index.php?page=edit-data-pasien&& id=<?php echo $dok['id']?>" class="btn btn-sm btn-success">Ubah</a>
                          <a onClick="hapus_data_pasien(<?php echo $dok['id']?>)" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
        </div>  
      </section>
      <!-- /.content -->

      <!-- Tambah Data Pasien -->
      <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data Pasien</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="resetData()">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form id="dataPasien" method="post" action="add/tambah_data_pasien.php">
              <div class="modal-body">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputNamaPasien">Nama Pasien</label>
                    <input type="text" class="form-control" id="exampleInputNamaPasien" placeholder="Nama Pasien" name="nama" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputAlamat">Alamat</label>
                    <input type="text" class="form-control" id="exampleInputAlamat" placeholder="Alamat" name="alamat" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNoKtp">Nomor KTP</label>
                    <input type="text" class="form-control" id="exampleInputNoKtp" placeholder="Nomor KTP" name="no_ktp" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNoHp">Nomor Hp</label>
                    <input type="text" class="form-control" id="exampleInputNoHp" placeholder="Nomor Hp" name="no_hp" required>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputNoRm">Nomor Rekam Medis</label>
                      <input type="text" class="form-control" name="no_rm" value="<?php echo $kd_noRM; ?>" required readonly>
                  </div>
                  <!-- /.card-body -->
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="submit" class="btn btn-default" data-dismiss="modal" onclick="resetData()">Batal</button>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </div>  
            </form>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      </div>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <script>
      // Reset the form after submission
      function resetData() {
        document.getElementById("dataPasien").reset();
      }

      function hapus_data_pasien(data_id){
        Swal.fire({
          title: "Apakah yakin data ingin dihapus ?",
          showCancelButton: true,
          confirmButtonText: "Hapus Data",
        }).then((result) => {
          /* Read more about isConfirmed, isDenied below */
          if (result.isConfirmed) {
            window.location=("delete/hapus_data_pasien.php?id="+data_id)
          }
        });
      }
    </script>
  </body>
</html>
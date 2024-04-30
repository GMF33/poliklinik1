<!DOCTYPE html>
<html lang="en">
  <?php
    include('../conf/config_poliklinik.php');
  ?>
  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-1">
              <div class="col-sm-6">
                <h1>Kelola Poli</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="index.php?page=dashboard">Home</a></li>
                  <li class="breadcrumb-item active">Poli</li>
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
                  <h3 class="card-title">Poli</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th style="width: 10px">No</th>
                        <th>Nama Poli</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $query = mysqli_query($koneksi,"SELECT * FROM poli");
                        while($dok = mysqli_fetch_array($query)){
                          
                      ?>
                      <tr>
                        <td><?php echo $dok['id'];?></td>
                        <td><?php echo $dok['nama_poli'];?></td>
                        <td><?php echo $dok['keterangan'];?></td>
                        <td>
                          <a href="index.php?page=edit-data-poli&& id=<?php echo $dok['id']?>" class="btn btn-sm btn-success">Ubah</a>
                          <a onClick="hapus_data_poli(<?php echo $dok['id']?>)" class="btn btn-sm btn-danger">Hapus</a>
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

      <!-- Tambah Data Dokter -->
      <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data Poli</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="resetData()">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form id="dataPoli" method="post" action="add/tambah_data_poli.php">
              <div class="modal-body">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputNamaPoli">Nama Poli</label>
                    <input type="text" class="form-control" id="exampleInputNamaPoli" placeholder="Nama Poli" name="nama_poli" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputKeterangan">Keterangan</label>
                    <input type="text" class="form-control" id="exampleInputKeterangan" placeholder="Keterangan" name="keterangan" required>
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
        document.getElementById("dataPoli").reset();
      }

      function hapus_data_poli(data_id){
        Swal.fire({
          title: "Apakah yakin data ingin dihapus ?",
          showCancelButton: true,
          confirmButtonText: "Hapus Data",
        }).then((result) => {
          /* Read more about isConfirmed, isDenied below */
          if (result.isConfirmed) {
            window.location=("delete/hapus_data_poli.php?id="+data_id)
          }
        });
      }
    </script>
  </body>
</html>
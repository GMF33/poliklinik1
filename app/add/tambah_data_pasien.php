<?php
include('../../conf/config_poliklinik.php');

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_ktp = $_POST['no_ktp'];
$no_hp = $_POST['no_hp'];

$no_rm = $_POST['no_rm'];

$query = mysqli_query($koneksi,"INSERT INTO pasien (id,nama,alamat,no_ktp,no_hp,no_rm) VALUES ('','$nama','$alamat','$no_ktp','$no_hp','$no_rm')");
if (!$query) {
    die('Error: ' . mysqli_error($koneksi));
}
header('Location: ../index.php?page=data-pasien');
?>
<?php
include('../../conf/config_poliklinik.php');
$id = $_GET['id'];
$nama = $_GET['nama'];
$alamat = $_GET['alamat'];
$no_ktp = $_GET['no_ktp'];
$no_hp = $_GET['no_hp'];
$no_rm = $_GET['no_rm'];

$query = mysqli_query($koneksi,"UPDATE pasien SET nama='$nama', alamat='$alamat', no_ktp='$no_ktp', no_hp='$no_hp', no_rm='$no_rm' WHERE pasien.id='$id'");
if (!$query) {
    die('Error: ' . mysqli_error($koneksi));
}
header('Location: ../index.php?page=data-pasien');
?>
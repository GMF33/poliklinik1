<?php
include('../../conf/config_poliklinik.php');
$nama_poli = $_POST['nama_poli'];
$keterangan = $_POST['keterangan'];

$query = mysqli_query($koneksi,"INSERT INTO poli (id,nama_poli,keterangan) VALUES ('','$nama_poli','$keterangan')");
if (!$query) {
    die('Error: ' . mysqli_error($koneksi));
}
header('Location: ../index.php?page=kelola-poli');
?>
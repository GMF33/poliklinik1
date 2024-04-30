<?php
include('../../conf/config_poliklinik.php');
$id = $_GET['id'];
$nama_poli = $_GET['nama_poli'];
$keterangan = $_GET['keterangan'];


$query = mysqli_query($koneksi,"UPDATE poli SET nama_poli='$nama_poli', keterangan='$keterangan' WHERE poli.id='$id'");
if (!$query) {
    die('Error: ' . mysqli_error($koneksi));
}
header('Location: ../index.php?page=kelola-poli')
?>
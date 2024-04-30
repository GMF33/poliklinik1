<?php
include('../../conf/config_poliklinik.php');

$id = $_POST['hidden_id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];

$nama_file = $_FILES['foto']['name'];

$file_tmp = $_FILES['foto']['tmp_name'];
move_uploaded_file($file_tmp,'../foto/'.$nama_file);

$query = mysqli_query($koneksi, "UPDATE dokter SET nama='$nama', alamat='$alamat', no_hp='$no_hp', foto='$nama_file' WHERE id='$id'");
if (!$query) {
    die('Error: ' . mysqli_error($koneksi));
} else {
    echo 'Data berhasil diperbarui.';
}
header('Location: ../dokter.php?page=data-profil');
?>
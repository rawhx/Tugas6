<?php
include "koneksi.php";
$id = $_POST['ID'];
$nama = $_POST['nama'];
$kelamin = $_POST['kelamin'];
$alamat = $_POST['alamat'];
$submit = $_POST['submit'];
$telpon = $_POST['no_telepon'];
$hasil = "UPDATE tabel_siswa SET Nama = '$nama', Jenis_Kelamin = '$kelamin', Alamat = '$alamat', no_telepon = '$telpon' WHERE ID=$id";
if ($submit) {
    $simpan = mysqli_query($mysqli, $hasil);
    header('Location: index.php');
}
?>
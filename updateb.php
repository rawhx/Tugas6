<?php
include "koneksi.php";
$id = $_GET['ID'];
@$nama = $_GET['nama'];
@$kelamin = $_GET['kelamin'];
@$alamat = $_GET['alamat'];
@$submit = $_GET['submit'];
@$hasil = "UPDATE tabel_siswa SET Nama = '$nama', Jenis_Kelamin = '$kelamin', Alamat = '$alamat' WHERE ID=$id";
if ($submit) {
    $simpan = mysqli_query($mysqli, $hasil);
    header('Location: index.php');
}
?>
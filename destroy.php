<?php
include "koneksi.php";
$id = $_GET['id'];
$query = "DELETE FROM tabel_siswa WHERE ID = '$id'";
$hasil = mysqli_query($mysqli, $query);
if ($hasil) {
    header('Location: index.php');
} else {
    echo 'gagal hapus';
}
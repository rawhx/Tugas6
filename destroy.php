<?php
include "koneksi.php";
$id = $_GET['id'];
$delete = "DELETE FROM tabel_siswa WHERE ID = '$id'";
$hasil = mysqli_query($mysqli, $delete);
if ($hasil) {
    header('Location: index.php');
} else {
    echo 'gagal hapus';
}
<?php
    include "koneksi.php";
    if ($_POST['submit']) {
        $id = $_POST['ID'];
        $nama = $_POST['nama'];
        $kelamin = $_POST['kelamin'];
        $alamat = $_POST['alamat'];
        $telpon = $_POST['no_telepon'];
        $update =  $mysqli->prepare("UPDATE tabel_siswa SET Nama = ?, Jenis_Kelamin = ?, Alamat = ?, no_telepon = ? WHERE ID = ?");
        $update->bind_param("sissi", $nama, $kelamin, $alamat, $telpon, $id);
        try {
            $update->execute();
            header('Location: index.php');
        } catch (\Throwable $th) {
            echo "Error : $th";
        }
    }
?>
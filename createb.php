<?php
    include "koneksi.php";
    if ($_POST['submit']) {
        $nama = $_POST['nama'];
        $kelamin = $_POST['kelamin'];
        $alamat = $_POST['alamat'];
        $telpon = $_POST['no_telepon'];
        $hasil = $mysqli->prepare("INSERT INTO tabel_siswa(Nama, Jenis_Kelamin, Alamat, no_telepon) VALUES (?, ?, ?, ?)");
        $hasil->bind_param("siss", $nama, $kelamin, $alamat, $telpon);
        try {
            $hasil->execute();
            header('Location: index.php');
        } catch (\Throwable $th) {
            echo "Error : $th";
        }
    }
    
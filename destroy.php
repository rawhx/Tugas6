<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $delete = $mysqli->prepare("DELETE FROM tabel_siswa WHERE ID = ?");
    $delete->bind_param("i", $id);
    try {
        $delete->execute();
        header('Location: index.php');
    } catch (\Throwable $th) {
        echo "Error : $th";
    }
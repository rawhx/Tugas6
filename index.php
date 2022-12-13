<?php
include('koneksi.php');
$table = "SELECT * FROM tabel_siswa";
$hasil = mysqli_query($mysqli, $table);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa</title>
</head>
<body>
    <table border="1" align="center">
        <tr>
            <td>
                <a href="create.php">Tambahkan Baru</a>
            </td>
        </tr>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th colspan="2">Aksi</th>
        </tr>
         <?php
        while ($data = mysqli_fetch_array($hasil)) {
        ?> 
        <tr>
            <td><?= $data['ID']?></td>
            <td><?= $data['Nama']?></td>
            <td>
                <?php 
                    if ($data['Jenis_Kelamin'] == 0) {
                        echo "Laki-laki";
                    } else {
                        echo "Perempuan";
                    }
                ?>
            </td>
            <td><?= $data['Alamat']?></td>
            <td>
                <a href="update.php?id=<?=$data['ID']?>">Update</a>
            </td>
            <td>
                <a href="destroy.php?id=<?=$data['ID']?>" style="color: red;" onclick="return confirm('Data akan hilang, apakah anda yakin ?')" style="color: red;">Hapus</a>
            </td>
        </tr>
        <?php 
        }
        ?>
    </table>
</body>
</html>
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
    <link rel="stylesheet" href="style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Hasil Data Siswa</h1>
    <table class="table table-striped" align="center">
        <tr class="table-info">
            <td>
                <a href="create.php">Tambahkan</a>
            </td>
        </tr>
        <tr style="background-color: greenyellow; text-align: center;">
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
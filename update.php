<?php
include('koneksi.php');
$id = $_GET['id'];
$table = "SELECT * FROM tabel_siswa WHERE ID = '$id'";
$hasil = mysqli_query($mysqli, $table);
$data = mysqli_fetch_array($hasil);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <form action="updateb.php" method="POST">
        <table>
            <tr>
                <input type="hidden" name="ID" value="<?php echo $data['ID']; ?>">
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?= $data['Nama']?>"></td>
            </tr>
            <tr>
                <td>Kelamin</td>
                <td>:</td>
                <td>
                    <?php 
                        if ($data['Jenis_Kelamin'] == 0) { ?>
                            <input type="radio" name="kelamin" value="0" checked>Laki-laki
                            <input type="radio" name="kelamin" value="1">Perempuan  
                            <?php    } else { ?>
                            <input type="radio" name="kelamin" value="0" >Laki-laki
                            <input type="radio" name="kelamin" value="1" checked>Perempuan  
                    <?php    } 
                    ?>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat" cols="30" rows="10"><?= $data['Alamat']?></textarea></td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: right;">
                    <input type="submit" value="perbarui" name="submit">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
<form action="createb.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="nama" name="nama" required></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="kelamin" value="0" checked>Laki-laki
                    <input type="radio" name="kelamin" value="1">Perempuan
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat"cols="30" rows="10" required></textarea></td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: right;">
                    <input type="submit" name="submit" value="create">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
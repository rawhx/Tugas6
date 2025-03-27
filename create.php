<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="p-5 d-flex align-items-center" style="height: 100vh;flex-direction: column;">
    <h2 style="text-align: center;" class="mb-5">Tambahkan Siswa</h2>
    <form action="createb.php" method="post" style="width: 30em;">
        <div class="row mb-3">
            <label for="nama" class="col-sm-4 col-form-label">Nama</label>
            <div class="col-sm-8">
                <input type="text" name="nama" class="form-control" id="nama" required>
            </div>
        </div>
        <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-4 pt-0">Jenis Kelamin</legend>
            <div class="col-sm-8">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="kelamin" id="kelamin1" value="0" checked>
                    <label class="form-check-label" for="kelamin1">
                        Laki-Laki
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="kelamin" id="kelamin2" value="1">
                    <label class="form-check-label" for="kelamin2">
                        Perempuan
                    </label>
                </div>
            </div>
        </fieldset>
        <div class="row mb-3">
            <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
            <div class="col-sm-8">
                <textarea name="alamat" class="form-control" id="alamat" required></textarea>
            </div>
        </div>
        <div class="row mb-3">
            <label for="no_telepon" class="col-sm-4 col-form-label">No Telp</label>
            <div class="col-sm-8">
                <input name="no_telepon" class="form-control" id="no_telepon" type="text" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary col-sm-12">Simpan</button>
    </form>
</body>
</html>
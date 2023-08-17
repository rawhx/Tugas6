<?php
include "koneksi.php";
$nama = $_POST['nama'];
$kelamin = $_POST['kelamin'];
$alamat = $_POST['alamat'];
$telpon = $_POST['no_telepon'];
$hasil = "INSERT INTO tabel_siswa(Nama, Jenis_Kelamin, Alamat, no_telepon) VALUES ('$nama', '$kelamin', '$alamat', '$telpon')";
if ($_POST['submit']) {
    $simpan = mysqli_query($mysqli, $hasil);
?>
    <script language="javascript">document.location.href="index.php";</script>
<?php
} else {
    echo 'gagal';
}
?>
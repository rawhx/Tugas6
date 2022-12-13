<?php
include "koneksi.php";
$nama = $_POST['nama'];
$kelamin = $_POST['kelamin'];
$alamat = $_POST['alamat'];
$hasil = "INSERT INTO tabel_siswa(Nama, Jenis_Kelamin, Alamat) VALUES ('$nama', '$kelamin', '$alamat')";
if ($_POST['submit']) {
    $simpan = mysqli_query($mysqli, $hasil);
?>
    <script language="javascript">document.location.href="index.php";</script>
<?php
} else {
    echo 'gagal';
}
?>
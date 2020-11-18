<?php
include "koneksi.php";
$delnrp = $_GET['delnrp'];
echo $delnrp;
mysqli_query($sambung, "DELETE FROM mahasiswa WHERE NRP='$delnrp'");
echo "<script>alert('data berhasil dihapus');</script>";
echo "<script>location='Tugas1.php';</script>";

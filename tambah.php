<?php
include "koneksi.php";

$nim = $_POST["NIM"];
$nama = $_POST["nama"];
$prodi = $_POST["prodi"];
$angkatan = $_POST["angkatan"];

$sql = "insert into mahasiswa
values ('$nim', '$nama', '$prodi', '$angkatan')";

$hasil = mysqli_query($konek, $sql);

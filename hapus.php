<?php
include 'koneksi.php';

$nim = $_POST['id'];

$query = "DELETE FROM mahasiswa WHERE NIM='$nim'";
$hasil = mysqli_query($konek, $query);

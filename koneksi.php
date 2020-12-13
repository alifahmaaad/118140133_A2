<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "Minggu6";

$konek = mysqli_connect($host, $user, $password, $db);
if (!$konek) {
    die("Koneksi gagal:" . mysqli_connect_error());
}

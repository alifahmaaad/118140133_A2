<html>
<?php
function hargabet($nama, $warna = "red")
{
    $harga = 1;
    $nm = strlen($nama);
    if ($nm > 0 && $nm <= 10) {
        $harga = 300 * $nm;
        echo '<font color="' . $warna . '">Nama  = ' . $nama . '<br/>Harga = RP. ' . $harga . '</font><br/><br/>';
    } elseif ($nm <= 20) {
        $harga = 500 * $nm;
        echo '<font color="' . $warna . '">Nama  = ' . $nama . '<br/>Harga = RP. ' . $harga . '</font><br/><br/>';
    } elseif ($nm > 20) {
        $harga = 700 * $nm;
        echo '<font color="' . $warna . '">Nama  = ' . $nama . '<br/>Harga = RP. ' . $harga . '</font><br/><br/>';
    }
}
/*
*note
Warna Harus dalam bahasa Inggris
Spasi Termasuk dalam karakter
*/
?>

<head>
    <title>hargabet</title>
</head>
<form method="post">
    Nama &nbsp;: <input type="text" name="nama"><br><br>
    Warna : <input type="text" name="Warna">
    <button type="submit" name="sub"> Submit</button>
</form>

</html>
<?php
if (isset($_POST['sub'])) {
    $nama = $_POST['nama'];
    $warna = $_POST['Warna'];
    if (strlen($warna) > 0) {
        hargabet($nama, $warna);
    } else {
        hargabet($nama);
    }
}

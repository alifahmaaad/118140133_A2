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
hargabet("Ahmad Alif Sofian", "blue");
hargabet("saskeh", "black");
hargabet("Nama Saya Lebih Dari 20 Karakter Nih", "cyan");

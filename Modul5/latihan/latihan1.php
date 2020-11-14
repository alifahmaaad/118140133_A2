<?php
$bil1 = 20;
$bil2 = 5;
$operator = ['+', '-', '*', '/', '%'];
echo "Bilangan 1 = $bil1<br>
      Bilangan 1 = $bil2<br><br>   
      Berikut merupakan hasil dari setiap operasi<br><br>";
echo  "PENJUMLAHAN<br>
      Operator : " . $operator[0] . " <br>
      Hasil : " . ($bil1 + $bil2) . "<br><br>";
echo "PENGURANGAN<br>
      Operator : " . $operator[1] . "  <br>
      Hasil : " . ($bil1 - $bil2)  . "<br><br>";
echo "PERKALIAN<br>
      Operator : " . $operator[2] . "  <br>
      Hasil : " . ($bil1 * $bil2) . "<br><br>";
echo "PEMBAGIAN<br>
      Operator : " . $operator[3] . " <br>
      Hasil : " . ($bil1 / $bil2) . "<br><br>";
echo "MODULUS<br>
      Operator : " . $operator[4] . " <br>
      Hasil : " . ($bil1 % $bil2) . "<br><br>";

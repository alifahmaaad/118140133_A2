<?php

function faktorial($bil)
{
  $i = 1;
  $hasil = 1;
  for ($i = 1; $i <= $bil; $i++) {
    $hasil = $hasil * $i;
  }
  echo "hasilnya = $hasil";
}
faktorial(5);

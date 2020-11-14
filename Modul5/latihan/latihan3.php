<?php
$bilangan = 50;
for ($i = 1; $i <= $bilangan; $i++) {
    $p = 0;
    for ($j = 1; $j <= $i; $j++) {
        if ($i % $j == 0) {
            $p++;
        }
    }
    if ($p <= 2) {
        $hasil .= $i . ", ";
    }
    echo $hasil;
}

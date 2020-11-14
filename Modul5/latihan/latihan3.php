<?php

$prima = array_fill(0, 49, true);

for ($i = 2; $i * $i <= 50; $i++) {
    if ($prima[$i] == true) {
        for ($j = $i * $i; $j <= 50; $j += $i) {
            $prima[$j] = false;
        }
    }
}

for ($i = 2; $i <= 49; $i++) {
    if ($prima[$i]) {
        echo $i . " ";
    }
}

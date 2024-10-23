<?php
function ucgen($deger)
{
    $kenar = '*';
    $i = 0;
    for ($j = 0; $j <= $deger; $j++) {
        while ($i <= $j) {
            echo str_repeat($kenar[0], $i) . '<br>';
            $i++;
        }
    }
}
ucgen(15);

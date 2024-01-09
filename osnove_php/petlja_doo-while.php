<?php
$a=0;
do {
    echo $a."^2=" .$a*$a. PHP_EOL;

    $a++;
} while ($a <= 10);


do {
    echo $a."^3=" .pow($a,3). PHP_EOL;
    
    $a-=3;
} while ($a >= -20);
<?php


$a="\noxxy";

function nekafunkcija(){
    global $a;
    echo $a;
    $a="\nabcdf";
}
//print_r($GLOBALS);
echo $a;

nekafunkcija();
echo $a;
echo "\n Ispisi globalni a ".$GLOBALS["a"];
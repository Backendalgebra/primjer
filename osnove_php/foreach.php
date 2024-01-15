<?php


$niz2=array();
for ($i=0; $i <22; $i++){
    $niz2["elem".$i]=$i*$i;
}
print_r($niz2);

foreach ($niz2 as $key => $value) {
    echo "kljuc je: ".$key. " vrijednost je: ".$value.PHP_EOL;
}

foreach ($niz2 as $value) {
    echo "vrijednost je: ".$value.PHP_EOL;
}

foreach ($niz2 as $key => $value) {
    echo "kljuc je: ".$key.PHP_EOL;
}

//print_r(get_defined_vars());

$svevarijable=get_defined_vars();

foreach ($svevarijable as $key => $value) {
    if(gettype($value)=="array"){
        continue;
    }
    echo $key." ".gettype($value)." vrijednost".$value.PHP_EOL;
}

$allVarsJSON=json_encode($svevarijable,$flags=JSON_PRETTY_PRINT);
echo $allVarsJSON;
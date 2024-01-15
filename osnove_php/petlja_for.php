<?php


for ($i=0; $i <39; $i+=7) { 
    # code...
    echo $i." ";
}
echo"\n--------------------\n";
for ($i=39; $i >0; $i-=7) { 
    # code...
    echo $i." ";
}

echo"\n--------------------\n";
for ($i=39; $i >0; $i-=1) { 
    if ($i%7==0) {
        echo $i.PHP_EOL;
    }
    echo $i." ";
}

echo"\n--------------------\n";
for ($i=39; $i >0; $i-=1) { 
    if ($i%3==0) {
        continue;
    }
    echo $i." ";
}

echo"\n--------------------\n";
for ($i=39; $i >0; $i-=1) { 
    if ($i%3==0 || $i%7==0) {
        continue;
    }
    echo $i." ";
}

$niz=array();
for ($i=0; $i <22; $i+=2){
    $niz[]=$i;
}
print_r($niz);

$niz2=array();
for ($i=0; $i <22; $i++){
    $niz2["elem".$i]=$i*$i;
}
print_r($niz2);
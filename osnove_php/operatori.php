<?php
//Ternarni operator/ tri varijable
$poruka = 4 < 5 ? "zdravo" : "dovidenja";

echo $poruka;
var_dump($poruka);

//ostatako kod djeljenja modula %

$a=7.0;
$b=7;
var_dump($a);
if($a % 2 == 0){
    echo "broj je paran";
}
else{
    echo "broj je neparan";
}

if ($a==$a){
    echo "brojevi a i b su isti";
}
if ($a===$a){//iste vrijednosti i istog tipa varijable
    echo "brojevi a i b su identicni";
}
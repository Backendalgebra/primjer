<?php
//Ternarni operator/ tri varijable
$poruka = 4 < 5 ? "zdravo" : "dovidenja";

echo $poruka;
var_dump($poruka);

//ostatako kod djeljenja modula %

$a=7.0;
$b=6;
var_dump($a);
if($a % 2 == 0){
    echo "broj je paran";
}
else{
    echo "broj je neparan";
}

if ($a==$b){
    echo "brojevi a i b su isti";
}
if ($a===$b){//iste vrijednosti i istog tipa varijable
    echo "brojevi a i b su identicni";
}

$text="ovo je neki text";
$text.="u njemu pisem pismo";
$text.="lala";
$text.=$poruka;
$text.="u 123456789";
$text.="ovo je kraj<br>";

echo $text;

var_dump($a==$b);
var_dump($a===$b);
var_dump($a!=$b);
var_dump($a<$b);
var_dump($a>$b);
var_dump($a<=$b);
var_dump($a>=$b);
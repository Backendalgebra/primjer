<?php

$voce=["jabuke","sljive"];

var_dump($voce);
echo "<pre>";
print_r($voce);
echo "</pre>";

$voce[]="jagode";
var_dump($voce);
echo "<pre>";
print_r($voce);
echo "</pre>";

#ispisujemo prvi clan, nizovi pocinju s indeksom 0
echo $voce[1];

$voce[7]="ribizle";
print_r($voce);
$voce[]="borovnice";
print_r($voce);
#koji je bio zadnji index
echo array_key_last($voce);
#koji je prvi index
echo array_key_first($voce);
#pronadi mi pojam
echo "ribizle se nalaze na indexu broj:" .array_search("ribizle",$voce,$strict=true);

$egzo=$voce;

array_pop($egzo);
print_r($egzo);

$borovnice=array_diff($voce,$egzo);//trazi se razlika izmedu prve i ostarlih navedenih arraya
print_r($borovnice);

$asocijacije=array("domace","za_rakiju","metkovse","iz_uvoza");
$asocijativno_voce=array_combine($asocijacije,$egzo);
print_r($asocijativno_voce);

#ispisi mi voce iz uvoza:
echo $asocijativno_voce["iz_uvoza"];

#funkcija array filter
function odd($var){
    //returns whether the input is odd
    return $var & 1;
}
function even($var){
    // returns whether the input iteger is even
    return !($var & 1);
}
$array1 =["a"=>1,"b"=>2, "c"=>3, "d"=>4, "e"=>5];
$array2 = [6,7,8,9,10,11,12,12];
echo "odd:\n";
print_r(array_filter($array1,"odd"));
echo "even:\n";
print_r(array_filter($array2,"even"));
$array2 = [6,7,8,9,10,"kamencic",11,12,12];

$svibrojevi=array_merge($array1,$array2);
print_r($svibrojevi);
$unique=array_unique($svibrojevi,SORT_STRING); //sort_string=2
print_r($unique);
$unique2=array_unique($svibrojevi,SORT_NUMERIC);//sort_numeric=1
print_r($unique2);

#niz sa asocijama
print_r($asocijativno_voce);
#niz s indexima
print_r(array_values($asocijativno_voce));
array_push($asocijativno_voce,"lubenica");
print_r($asocijativno_voce);
//$asocijativno_voce[0]=["dalmatinska"=>"lubenica"]
$asocijativno_voce=array_replace($asocijativno_voce,["dalmatinska"=>"lubenica"]);
print_r($asocijativno_voce);
unset($asocijativno_voce[0]);
print_r($asocijativno_voce);

echo "broj clanova niza asocijativnovoce:".count($asocijativno_voce);
shuffle($asocijativno_voce);
print_r($asocijativno_voce);
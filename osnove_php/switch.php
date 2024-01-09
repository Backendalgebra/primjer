<?php

//$title="breaking bad";
$title="die hard";
switch($title){
    case "breaking bad":
    case "die hard": echo "clasic"; break;
    case "casablanca": echo "humprey bogart"; break;
    case "home alone": echo "jingle bells"; break;
    default: echo "sapunica"; break;
}

$title="mokingbird";
switch($title){
    case "breaking bad": echo "narcosi"; break;
    case "die hard": echo "bald"; break;
    case "casablanca": echo "humprey bogart"; break;
    case "home alone": echo "jingle bells"; break;
    default: echo "sapunica"; break;
}

$a=15;
$b=10;
$c=5;

if($a<$b && $c>$b){
echo "<hr>b je izmedu a i c";
}
elseif($a>$b && $c<$b){
    echo "<hr>b je izmedu a i c";
}
else{
    echo "b nije izmedu a i c";
}

echo "uz pomoc switch case";

switch (true) {
    case ($a<$b && $c>$b) ==true;
    case ($a>$b && $c<$b) == true;
        echo "<hr>b je izmedu a i c";
        
        break;

    default:
       echo "<hr> nije izmedu a i c";
        break;
    }
 echo "<br>";
 date_default_timezone_set("Europe/Zagreb");
 $curentTime = date("y-m-d h:i:s");
    echo "local time: ".$curentTime;
echo date("D d M y H:i:i",time());
echo "<br> danas je" . date("D",time());
switch(strtolower(date("D",time()))){
    case "fri";
    case "friday"; echo "petak"; break;
    case "sun" ;
    case "sunday"; echo "nedjelja"; break;
    case "mon" :
    case "monday" ;echo "ponedjeljak"; break;
    case "tuesday" ;
    case "tue" ;echo "utorak"; break;
    default; echo "sri,cet, subota";
}
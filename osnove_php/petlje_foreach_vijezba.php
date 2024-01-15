<?php

$names=["ime1"=>"pavica",
    "ime2"=>"bara",
    "ime3"=>"dragica",
    "ime4"=>"mila",
    "ime5"=>"breza",];

$brojac=0;
foreach ($names as $kljuc => $ime) {
    echo " ekipa za poker";
    echo $kljuc." -----> ".$ime.PHP_EOL;
    if($brojac>=3){
        break;
    }
    $brojac++;
}
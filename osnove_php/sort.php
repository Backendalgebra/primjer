<?php

$trielem=["jabuka",44,"voce1"=>"jabuka",1,"broj1"=>3,"1jabuka"];

print_r($trielem);
//gube se asocijacije i resetira se index kljuceva
sort($trielem);
print_r($trielem);
//po kljucevima reverse
$trielem=["jabuka",44,"voce1"=>"jabuka",1,"broj1"=>3,"1jabuka"];
krsort($trielem);
echo "<hr> KRSORT";
print_r($trielem);
//po kljucevima
$trielem=["jabuka",44,"voce1"=>"jabuka",1,"broj1"=>3,"1jabuka"];
ksort($trielem);
echo "<hr> KSORT";
print_r($trielem);
//po vrijednostima asc
$trielem=["jabuka",44,"voce1"=>"jabuka",1,"broj1"=>3,"1jabuka"];
asort($trielem);
echo "<hr> ASORT";
print_r($trielem);
//po vrijednostima desc
$trielem=["jabuka",44,"voce1"=>"jabuka",1,"broj1"=>3,"1jabuka"];
arsort($trielem);
echo "<hr> ARSORT";
print_r($trielem);
<?php

$a=true;
$b=false;
//$a=NULL;
//unset($a);
//vraca false posto je variabla a true
var_dump(!$a);
//vraca true posto je varijabla b false
var_dump($a && $b);
//vraca false posto je varijabla b false
var_dump($a and $b);
//vraca true posto je varijabla a true
var_dump($a || $b);
//vraca true posto je varijabla a true
var_dump($a or $b);
echo "<hr>";

$a=true;
$b=true;
//vraca false posto je variabla true
var_dump(!$a);
//vraca true ako je varijabla false
var_dump($a && $b);
//
var_dump($a and $b);
//
var_dump($a || $b);
//
var_dump($a or $b);
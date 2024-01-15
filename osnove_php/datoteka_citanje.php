<?php
//error_reporting(0); //iskljucujemo sva upozorenja
//error_reporting(E_ALL); //za dev/test okruzenje
//error_reporting(0); // za production okruzenje
ini_set("error_reporting",0);
ini_set("max_input_time",59);
header("content-type:application/json");
//print_r($GLOBALS);
$globalsJSON=json_encode($GLOBALS,JSON_PRETTY_PRINT);
//echo $globalsJSON;

$file="globalne_varijable.json";
$curent=@file_get_contents($file);
$curent .= "john smith\n";
file_put_contents($file,$globalsJSON);

//citaj file

$procitanifile=file_get_contents($file,false,null,0,filesize($file));
//echo $procitanifile;

$dekodiraniniz=json_decode($procitanifile,1);
//print_r($dekodiraniniz);
echo $dekodiraniniz["_SERVER"]["Path"];